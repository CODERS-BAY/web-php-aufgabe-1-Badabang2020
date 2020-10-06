<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style07.css" rel="stylesheet" />
</head>

<body>
    <h1>Exercise numero siete</h1>
    <h2>Numerical series with the help of PHP</h2>
    <main>
        <section>

            <?php

            for ($i = 13; $i < 30; $i += 4) {
                echo "$i ";
            }
            echo "<br>";
            for ($j = 2; $j > -1.5; $j -= 0.5) {
                echo "$j ";
            }
            echo "<br>";
            for ($k = 2000; $k < 6001; $k += 1000) {
                echo "$k ";
            }
            echo "<br>";

            for ($zi = 5; $zi < 14; $zi += 2) {
                echo "Z$zi ";
            }
            echo "<br>";

            for ($ab = 1; $ab < 4; $ab++) {
                echo "a b$ab ";
            }
            echo "<br>";
            for ($c = 0; $c < 3; $c++) {
                if ($c < 1) echo "c2 c3 ";
                else if ($c > 0) echo "c" . $c . "2" . " " . "c" . $c . "3 ";
            }
            echo "<br>";
            for ($last = 13; $last < 46; $last += 4) {
                if ($last > 21 && $last < 33) echo " ";
                else echo "$last ";
            }
            echo "<br>";
            ?>
        </section>
    </main>
</body>

</html>