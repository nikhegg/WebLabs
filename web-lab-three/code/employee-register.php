<?php
session_start();
if(true === isset($_REQUEST['name'], $_REQUEST['age'], $_REQUEST['salary'], $_REQUEST['email'], $_REQUEST['position'])) {
    $_SESSION['employee'] = [$_REQUEST['name'], $_REQUEST['age'], $_REQUEST['salary'], $_REQUEST['email'], $_REQUEST['position']];
}
header('Location: /forms.php');
exit();