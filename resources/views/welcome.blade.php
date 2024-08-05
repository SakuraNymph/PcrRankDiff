<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Button Page</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .button-container {
    text-align: center;
  }

  .button-container button {
    display: block;
    width: 200px;
    height: 40px;
    margin-bottom: 10px;
    font-size: 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .button-container button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<div class="button-container">
  <button onclick="location.href='{{ url("rank") }}'">会战角色表</button>
  <button onclick="location.href='{{ url("list") }}'">公主连结角色信息</button>
</div>

</body>
</html>
