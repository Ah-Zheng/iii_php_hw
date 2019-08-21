<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <table> -->
        <?php
        $poker = [];
        for ($i = 0; $i < 52; ++$i) {
            $poker[$i] = $i + 1;
        }
        $res = [];
        for ($j = 0; $j < count($poker); ++$j) {
            $index = rand($j, 51);
            $res[$j] = $poker[$index];
            $a = $poker[$index];
            $b = $poker[$j];
            $poker[$j] = $a;
            $poker[$index] = $b;
        }
        $players = [[], [], [], []];
        foreach ($poker as $val => $card) {
            $players[$val % 4][(int) ($val / 4)] = $card;
        }
        var_dump($players);
        ?>
    <!-- </table> -->
</body>
</html>