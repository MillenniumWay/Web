<?php
$username = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$mysql = new mysqli('localhost', 'root', 'root', 'mybase');
$pass = md5($pass . "ffjdgkdsf2234");
$about =  $mysql->query("SELECT * FROM `saymyname`");


while ($row = $about->fetch_assoc()) // получаем все строки в цикле по одной
{
    echo  'Id = ' .  $row['id']  . '   Username: ' . $row['username']  . "   Email: " .  $row['email'] . '<br>'; // выводим данные
}


// Выбор данных с помощью PDO (+ подготовленные операторы)



class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
    }
}
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mybase";

try {
    $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $mysql->prepare("SELECT id, username, email FROM `saymyname`");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
