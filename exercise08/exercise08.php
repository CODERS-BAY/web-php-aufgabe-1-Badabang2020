<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style08.css" rel="stylesheet" />
</head>

<body>
    <h1>Exercise numero ocho</h1>
    <h2>Game of dices with the help of PHP</h2>
    <main>
        <section>

        </section>
    </main>

    <?php
    $valuePlayerOne = 0;
    $valuePlayerTwo = 0;

    while ($valuePlayerOne < 25 || $valuePlayerTwo < 25) {
        $valuePlayerOne += rand(1, 6);
        $valuePlayerTwo += rand(1, 6);
        if ($valuePlayerOne >= 25) {
            echo "Player One has won with: $valuePlayerOne <br>";
            $valuePlayerOne = 0;
            $valuePlayerTwo = 0;
            break;
        } else if ($valuePlayerTwo >= 25) {
            echo "Player Two has won with: $valuePlayerTwo <br>";
            $valuePlayerOne = 0;
            $valuePlayerTwo = 0;
            break;
        }
    }
    ?>

</body>

</html>