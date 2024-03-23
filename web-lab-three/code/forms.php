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
</body>
</html>