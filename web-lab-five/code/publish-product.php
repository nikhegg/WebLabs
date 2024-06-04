<?php
function exitToHome(): void {
    header('Location: /');
    exit();
}
if(true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
    if(mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exitToHome();
    }

    $mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");
}
exitToHome();