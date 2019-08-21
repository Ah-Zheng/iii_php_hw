<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        table {
            width: 100%;
            font-size: 2em;
        }
        table, td {
            text-align: center;
            border: 1px solid black;
        }
        td {
            width: 6%;
        }
    </style>
</head>
<body>
    <table>
        <?php
        // 取得新牌
        for ($i = 0; $i < 52; ++$i) {
            $num[$i] = $i + 1;
        }

        // 洗牌
        for ($i = 0; $i < count($num); ++$i) {
            $index = rand($i, 51);
            $res[$i] = $num[$index];
            $a = $num[$index];
            $b = $num[$i];
            $num[$i] = $a;
            $num[$index] = $b;
        }

        // 發牌
        $players = [[], [], [], []];
        foreach ($num as $val => $card) {
            $players[$val % 4][(int) ($val / 4)] = $card;
        }

        // 秀出牌組
        $playerAr = ['玩家一', '玩家二', '玩家三', '玩家四'];
        foreach ($players as $player => $nums) {
            echo '<tr>';
            echo "<td style='width: 15%'>$playerAr[$player]</td>";
            foreach ($nums as $val) {
                if ($val <= 13) {
                    echo "<td><img src='./img/spades.svg' />$val</td>";
                } elseif ($val > 13 && $val <= 26) {
                    $val -= 13;
                    echo "<td><img src='./img/hearts.svg'/>$val</td>";
                } elseif ($val > 26 && $val <= 39) {
                    $val -= 26;
                    echo "<td><img src='./img/diamond.svg'/>$val</td>";
                } else {
                    $val -= 39;
                    echo "<td><img src='./img/clubs.svg'/>$val</td>";
                }
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>