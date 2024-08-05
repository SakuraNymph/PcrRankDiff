<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use PDO;



class PcrController extends Controller
{
    public function index()
    {
        $file = base_path('database.lock');
        if (!File::exists($file)) {
            // $this->createDatabase();
            file_put_contents($file, '数据库已创建');
        }
        return view('welcome');
    }

    public function createDatabase()
    {
        $databaseName = 'pcr';

        $dbHost = env('DB_HOST', '127.0.0.1');
        $dbPort = env('DB_PORT', '3306');
        $dbUsername = env('DB_USERNAME', 'root');
        $dbPassword = env('DB_PASSWORD', 'root');



        // 连接数据库服务器
        $pdo = new PDO("mysql:host=$dbHost;port=$dbPort", $dbUsername, $dbPassword);

        // 设置错误模式
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // 创建数据库
        $pdo->exec("CREATE DATABASE `$databaseName` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");





        $file = base_path('pcr.sql');

        if (!File::exists($file)) {
            return response()->json(['error' => 'File does not exist.'], 404);
        }

        $sql = File::get($file);
        $queries = explode(';', $sql);

        foreach ($queries as $query) {
            $query = trim($query);
            if (!empty($query)) {
                try {
                    DB::statement($query);
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Error executing query: ' . $e->getMessage()], 500);
                }
            }
        }
    }
}
