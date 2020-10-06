<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style02.css" rel="stylesheet">
</head>

<body>
    <h1>Exercise numero dos</h1>
    <h2>Calculation of a square number with the help of PHP</h2>
    <?php
    echo "<section>";
    echo "<form method=\"post\">";
    echo "<input name=\"number\" type=\"number\" >";
    echo "</form>";
    if ($_POST) {
        $number = $_POST["number"];
        $number = intval($number);
        $squareNumber = $number ** 2;
        echo "<p>The square number of $number is: $squareNumber</p>";
    }
    echo "</section>";
    ?>
</body>

</html>