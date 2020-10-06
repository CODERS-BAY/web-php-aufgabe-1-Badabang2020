<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style05.css" rel="stylesheet">
</head>

<body>
    <h1>Exercise numero cinco</h1>
    <h2>Calculation of gas charge with the help of PHP</h2>
    <section>
        <?php
        echo "<section>";
        echo "<form method=\"post\">";

        echo "<label for=\"gas\">normal</label>";
        echo "<input name=\"gas\" type=\"radio\" value=\"normal\" checked>";

        echo "<label for=\"gas\">super</label>";
        echo "<input name=\"gas\" type=\"radio\" value=\"super\">";

        echo "<label for=\"charge\">Fuel charge</label>";
        echo "<input name=\"charge\" type=\"text\" >";

        echo "</form>";
        $benzin = 1.35;
        $super = 1.40;
        $bill;
        $discount = 0.98; //2% - to multiply it with changed it to 0,98
        if ($_POST) {
            if ($_POST["gas"] == "normal") {
                $number = $_POST["charge"];
                $number = intval($number);
                if ($number < 100) {

                    $bill = $number * $benzin;
                    $bill = doubleval($bill);
                    echo "<p>Your bill of your gas charge is : $bill &euro;</p>";
                } else {

                    $bill = ($number * $benzin) * $discount;
                    $bill = doubleval($bill);
                    echo "<p>Your bill of your gas charge is : $bill &euro;</p>";
                }
            } else if ($_POST["gas"] == "super") {
                $number = $_POST["charge"];
                $number = intval($number);
                if ($number < 100) {

                    $bill = $number * $super;
                    $bill = doubleval($bill);
                    echo "<p>Your bill of your gas charge is : $bill &euro;</p>";
                } else {

                    $bill = ($number * $super) * $discount;
                    $bill = doubleval($bill);
                    echo "<p>Your bill of your gas charge is : $bill &euro;</p>";
                }
            }
        }

        ?>
    </section>
</body>

</html>