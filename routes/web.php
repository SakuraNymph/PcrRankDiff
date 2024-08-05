<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\PcrController::class, 'index']);

Route::get('list', [App\Http\Controllers\RoleController::class, 'list']);

Route::post('list', [App\Http\Controllers\RoleController::class, 'list']);

Route::post('is_6', [App\Http\Controllers\RoleController::class, 'is_6']);

Route::post('is_ghz', [App\Http\Controllers\RoleController::class, 'is_ghz']);

Route::get('add_author', [App\Http\Controllers\AuthorController::class, 'addAuthor']);

Route::post('add_author', [App\Http\Controllers\AuthorController::class, 'addAuthor']);

Route::get('get_author', [App\Http\Controllers\AuthorController::class, 'getAuthor']);

Route::get('rank', [App\Http\Controllers\RankController::class, 'index']);

Route::get('add', [App\Http\Controllers\RankController::class, 'add']);

Route::post('add', [App\Http\Controllers\RankController::class, 'add']);

Route::get('edit', [App\Http\Controllers\RankController::class, 'edit']);

Route::post('delete', [App\Http\Controllers\RankController::class, 'delete']);

Route::post('delete_author', [App\Http\Controllers\RankController::class, 'deleteAuthor']);

Route::get('result', [App\Http\Controllers\RankController::class, 'result']);

Route::post('get_can_use_roles', [App\Http\Controllers\RankController::class, 'getCanUseRoles']);






