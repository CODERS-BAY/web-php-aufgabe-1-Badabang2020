<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style01.css" rel="stylesheet">
</head>

<body>
    <h1>Exercise numero uno</h1>
    <h2>Calculation of netto sum, sales tax and brutto sum with the help of PHP</h2>
    <section>
        <?php
        $item01 = 22.5;
        $item01format = number_format($item01, 2, ",", ".");
        $item02 = 12.3;
        $item02format = number_format($item02, 2, ",", ".");
        $item03 = 5.2;
        $item03format = number_format($item03, 2, ",", ".");

        $nettoSum = $item01 + $item02 + $item03;
        $nettoSumFormat = number_format($nettoSum, 2, ",", ".");
        $salesTax = 0.20;
        $salesTaxSum = $nettoSum * $salesTax;
        $salesTaxSumFormat = number_format($salesTaxSum, 2, ",", ".");
        $bruttoSum = $nettoSum + $salesTaxSum;
        $bruttoSumFormat = number_format($bruttoSum, 2, ",", ".");
        echo "<main>";
        echo "<ul><li>Item01: $item01format &euro;</li>";
        echo "<li>Item02: $item02format &euro;</li>";
        echo "<li>Item03: $item03format &euro;</li></ul>";
        echo "<br>";
        echo "<p class=\"nettoSum\">Netto sum = $nettoSumFormat &euro;</p>";
        echo "<p class=\"salesTaxSum\">Sales tax sum = $salesTaxSumFormat &euro;</p>";
        echo "<p class=\"bruttoSum\">Brutto sum = $bruttoSumFormat &euro;</p>";
        echo "</main>";
        ?>
    </section>
</body>

</html>