<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style03.css" rel="stylesheet">
</head>

<body>
    <h1>Exercise numero tres</h1>
    <h2>Calculation of gas charge with the help of PHP</h2>
    <main>
        <?php
        echo "<section>";
        echo "<form method=\"post\">";

        echo "<label for=\"normal\">normal</label>";
        echo "<input name=\"gas\" type=\"radio\" value=\"benzin\" checked>";

        echo "<label for=\"super\">super</label>";
        echo "<input name=\"gas\" type=\"radio\" value=\"super\">";

        echo "<label for=\"charge\">Fuel charge</label>";
        echo "<input name=\"charge\" type=\"text\" >";

        echo "</form>";
        $benzin = 1.35;
        $super = 1.40;

        $bill;
        if ($_POST) {
            if ($_POST["gas"] == "benzin") {
                $number = $_POST["charge"];
                $number = doubleval($number);
                $bill = $number * $benzin;
                $bill = doubleval($bill);
                echo "<p>Your bill of your gas charge is : $bill &euro;</p>";
            } else if ($_POST["gas"] == "super") {
                $number = $_POST["charge"];
                $number = doubleval($number);
                $bill = $number * $super;
                $bill = doubleval($bill);
                echo "<p>Your bill of your gas charge is : $bill &euro;</p>";
            }
        }
        echo "</section>";
        ?>
    </main>
</body>

</html>