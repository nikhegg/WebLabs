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

    <div class="shadow-container">
        <h1>Task 3 Form</h1>
        <form action="employee-register.php">
            <label for="employee-name">Name</label>
            <input type="text" name="name" id="employee-name">
            <br>
            <label for="employee-age">Age</label>
            <input type="number" name="age" id="employee-age">
            <br>
            <label for="employee-salary">Salary</label>
            <input type="number" name="salary" id="employee-salary">
            <br>
            <label for="employee-email">Email</label>
            <input type="email" name="email" id="employee-email">
            <br>
            <label for="employee-position">Position</label>
            <input type="text" name="position" id="employee-position">
            <br>
            <input type="submit" value="Publish data">
        </form>
        <br>
        <a class="main-button" href="/employee-profile.php">View employee profile</a>
    </div>
</body>
</html>