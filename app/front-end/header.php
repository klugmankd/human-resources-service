<?
session_start();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app/front-end/css/style.css">
    <script type="text/javascript" src="app/front-end/js/jquery.min.js"></script>
</head>
<body><?
if (!empty($_SESSION['id'])) {
    ?><header>
        <div class="nav-bar">
            <ul class="menu">
                <li class="menu-item active" data-action="create">Створити</li>
                <li class="menu-item" data-action="read">Відобразити</li>
                <li class="menu-item" data-action="update">Оновити</li>
                <li class="menu-item" data-action="delete">Видалити</li>
            </ul>
        </div>
    </header><?
}
?><main>

