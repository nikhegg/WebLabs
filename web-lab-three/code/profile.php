<?php
session_start();
if(sizeof($_SESSION) == 0) {
    header('Location: /forms.php');
    exit();
}
$surname = $_SESSION['user-surname'];
$name = $_SESSION['user-name'];
$patronymic = $_SESSION['user-patronymic'];
echo "<h1>Welcome, $surname $name $patronymic!</h1>";