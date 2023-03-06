<?php

// Поля для передачи в базы SQL
$username = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

// Хеширование пароля для безопасности пользователя 
$pass = md5($pass . "ffjdgkdsf2234");
// Подключение к базе данных 
$mysql = new mysqli('localhost', 'root', 'root', 'mybase');
// Подключение к таблицеб указание заполняемых переменных в этой таблице
$mysql->query("INSERT INTO `saymyname` (`username`, `email`, `password`)
VALUES ('$username', '$email', '$pass')"); // Заполнение полей в таблице занчениям Пользователя 
header('Location: /My/index.php'); // Редирект
$mysql->close();
