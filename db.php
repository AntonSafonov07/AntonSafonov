<?php

$host = 'newssite';
$username = 'root';
$password = '07071997Anton';
$dbname = 'tabl'; // имя вашей базы данных

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>

