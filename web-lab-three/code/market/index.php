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
                    <!-- TODO Place foreach here -->
                    <option value="cars">Cars</option>
                    <option value="other">Other</option>
                    <!-- -->
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
                    <!-- TODO Place foreach here -->
                    <tr>
                        <td>Cars</td>
                        <td>Porsche Cayenne 2020</td>
                        <td>test@webmarket.ru</td>
                        <td>This was my dream car and now it's high time to sell it!</td>
                    </tr>
                    <tr>
                        <td>Cars</td>
                        <td>Porsche Cayenne 2020</td>
                        <td>test@webmarket.ru</td>
                        <td>This was my dream car and now it's high time to sell it!</td>
                    </tr>
                    <tr>
                        <td>Cars</td>
                        <td>Porsche Cayenne 2020</td>
                        <td>test@webmarket.ru</td>
                        <td>This was my dream car and now it's high time to sell it!</td>
                    </tr>
                    <!-- -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>