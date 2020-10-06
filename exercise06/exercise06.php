<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style06.css" rel="stylesheet" />
</head>

<body>
    <h1>Exercise numero seis</h1>
    <h2>Calculation of gas charge with the help of PHP</h2>
    <section>
        <?php
        echo "<section>";
        echo "<form method=\"post\">";
        echo "<ul>";
        echo "<li><label for=\"gas\">normal</label>";
        echo "<input name=\"gas\" type=\"radio\" value=\"normal\" checked></li>";

        echo "<li><label for=\"gas\">super</label>";
        echo "<input name=\"gas\" type=\"radio\" value=\"super\"></li>";

        echo "<li><label for=\"gas\">diesel</label>";
        echo "<input name=\"gas\" type=\"radio\" value=\"diesel\"></li>";

        echo "<li><label for=\"charge\">Fuel charge</label>";
        echo "<input name=\"charge\" type=\"text\" ></li>";
        echo "</ul>";
        echo "</form>";
        $benzin = 1.35;
        $super = 1.40;
        $diesel = 1.10;
        $bill;
        if ($_POST) {
            if ($_POST["gas"] == "normal") {
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
            } else if ($_POST["gas"] == "diesel") {
                $number = $_POST["charge"];
                $number = doubleval($number);
                $bill = $number * $diesel;
                $bill = doubleval($bill);
                echo "<p>Your bill of your gas charge is : $bill &euro;</p>";
            }
        }
        echo "</section>";
        ?>
    </section>
</body>

</html>