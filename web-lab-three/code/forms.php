<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Word & Symbols Count</title>
</head>
<body>
    <div class="shadow-container">
        <h1>Task 1 Form</h1>
        <form action="textcount.php">
            <label for="text-example">Enter your text</label>
            <br>
            <textarea name="text-example" id="text-example" cols="50" rows="3"></textarea>
            <br>
            <input type="submit" value="Count words and symbols">
        </form>
    </div>

    <div class="shadow-container">
        <h1>Task 2 Form</h1>
        <form action="register.php">
            <label for="user-surname">Your surname</label>
            <input type="text" name="user-surname" id="user-surname">
            <br>
            <label for="user-name">Your name</label>
            <input type="text" name="user-name" id="user-name">
            <br>
            <label for="user-patronymic">Your patronymic</label>
            <input type="text" name="user-patronymic" id="user-patronymic">
            <br>
            <input type="submit" value="Save">
        </form>
        <br>
        <a class="main-button" href="/profile.php">Open your profile</a>
    </div>
</body>
</html>