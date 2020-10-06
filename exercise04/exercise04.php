<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style04.css" rel="stylesheet">
</head>

<body>
    <h1>Exercise numero cuatro</h1>
    <h2>Calculation of gas charge with the help of PHP</h2>
    <main>
        <section>
            <?php

            echo "<form action='" . $_SERVER['PHP_SELF'] . "' method=\"post\">";

            echo "<label for=\"charge\">Fuel charge</label>";
            echo "<input name=\"charge\" type=\"text\">";

            echo "<label for=\"gasType\">N = normal - S = super</label>";
            echo "<input name=\"gasType\" type=\"text\">";

            echo "<button type=\"submit\">Submit</button>";
            echo "</form>";
            $benzin = 1.35;
            $super = 1.40;
            $bill;
            if ($_POST) {
                $number = intval($_POST["charge"]);

                if ($_POST["gasType"] == "N") {

                    $bill = $number * $benzin;
                    $bill = doubleval($bill);
                    echo "<p>Your bill of your gas charge is : $bill &euro;</p>";
                } else if ($_POST["gasType"] == "S") {
                    $number = intval($_POST["charge"]);

                    $bill = $number * $super;
                    $bill = doubleval($bill);
                    echo "<p>Your bill of your gas charge is : $bill &euro;</p>";
                }
            }
            ?>
        </section>
    </main>
</body>

</html>