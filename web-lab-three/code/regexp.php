<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegExp Task</title>
</head>
<body>
    <h1>RegExp</h1>
    <?php
    $str = 'ahb acb aeb aeeb adcb axeb';
    ?>
    <div>Example string: <b><?php echo $str;?></b></div>
    <?php 
    $regexp = '/a..b/';
    ?>
    <div>RegExp: <b><?php echo $regexp?></b></div>

    <?php
    $matches = [];
    $count = preg_match_all($regexp, $str, $matches);
    ?>
    <div>Total RegExp matches: <b><?php echo $count?></b></div>
    <br>
    <div>
        Matching strings:<br>
        <?php 
        foreach($matches[0] as $match) {
            echo "<b>$match</b><br>";
        }
        ?>
    </div>
</body>
</html>