<?php
session_start();
if(true === isset($_REQUEST['user-surname'], $_REQUEST['user-name'], $_REQUEST['user-patronymic'], $_REQUEST['PHPSESSID'])) {
    $_SESSION['user-surname'] = $_REQUEST['user-surname'];
    $_SESSION['user-name'] = $_REQUEST['user-name'];
    $_SESSION['user-patronymic'] = $_REQUEST['user-patronymic'];
}
header('Location: /forms.php');
exit();