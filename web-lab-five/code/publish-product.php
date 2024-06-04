<?php
if(true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
}

header('Location: /');
exit();