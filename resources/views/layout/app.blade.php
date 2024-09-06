<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .item{
            background-color: green;
            color: white;
            margin: 10px;
            padding: 10px;
        }
        a{
            display: inline-block;
            background-color: white;
            color: red;
            padding: 5px 8px;
            text-decoration: none;
        }
    </style>
    <title>Document</title>
</head>
<body>
<h1>Student Info</h1>
<div>
    <a href="/students/">Home</a>
    <a href="/students/sort/age">Sort by Age</a></div>
    <a href="/students/trash/data/show">Trash</a></div>
<div>@yield('content')</div>
</body>
</html>
