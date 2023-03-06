<?php
// Поля для передачи в базы SQL
$username = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);


// Хеширование пароля для безопасности пользователя 
$pass = md5($pass . "ffjdgkdsf2234");


// Подключение к базе данных 
$mysql = new mysqli('localhost', 'root', 'root', 'mybase');

// Парсинг данных в таблице SQL по вводу значений пользователя в PHP
$result = $mysql->query("SELECT * FROM `saymyname` WHERE `username` = '$username' AND `password` = '$pass'");


// Передача полей пользователя в массив для проверок 
$user = $result->fetch_assoc();

if (count($user)  == 0) {
    echo "Такого пользователя не найдено";
}

// Устанавливаем куки для пользователя 
setcookie('user', $user['username'], time() + 3600, "/");





header('Location: /My/index.php'); // Редирект
