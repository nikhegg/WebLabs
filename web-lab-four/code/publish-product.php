<?php
require_once 'vendor/autoload.php';
if(true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    
}
header('Location: /index.php');
exit();