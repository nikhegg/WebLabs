<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./market.css">
    <title>Web Market</title>
</head>
<body>
    <nav>
        <div class="market-logo">Web Market</div>
    </nav>
    <div id="root">
        <div class="shadow-container">
            <h1>Sell your product</h1>
            <form action="./publish-product.php" method="post">
                <label for="category">Select the category</label>
                <select name="category" id="category" required>
                    <option value="cars">cars</option>
                    <option value="phones">phones</option>
                    <option value="other">other</option>
                </select>
                <label for="email">Your contact email</label>
                <input type="email" name="email" required>
                <label for="title">Product title</label>
                <input type="text" name="title" required>
                <label for="description">Description</label>
                <textarea name="description" cols="60" rows="4" required></textarea>
                <br>
                <button type="submit">Publish</button>
            </form>
        </div>
        <div id="offers-table">
            <table>
                <thead>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <?php
                        $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
                        if(mysqli_connect_errno()) {
                            exit();
                        }
                        $adList = $mysqli->query('SELECT * FROM ad ORDER BY created DESC');
                        while($row = $adList->fetch_assoc()) {
                            echo "<tr>";
                            foreach(['category', 'title', 'email', 'description'] as $field) {
                                echo '<td>', $row[$field], "</td>";
                            }
                            echo "</tr>";
                        }
                        $adList->close();
                        $mysqli->close();
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>