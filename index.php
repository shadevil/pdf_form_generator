<?php require('form.php'); ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <meta name="description" content="Запрос счета-оферты"/>
    <title>Регистрация</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Регистрация</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>
<header>
    <div class="site-title">
        <a href="#"><h1>ООО "Аукционы Федерации"</h1></a>
    </div>
</header>
<div class="container">
    <div class="form">
    <form action="send.php" method="post">
        <a href="#">
    <div class="logo">
        <div class="part1"><img src="images/part1.png" alt="logo"></div>
        <div class="part2"><img src="images/part2.png" alt="logo"></div>

    </div>
        </a>
        <div class="select">
    <select id="clientTypes">
        <option value="" disabled selected>--Выбрать--</option>
        <?php getClientTypes(); ?>
    </select>
        </div>
        <div class="formContainer"></div>
    </form>
    </div>
</div>
<footer>

</footer>
<script src="js/script.js"></script>
</body>
</html>