<?php
$num = isset($_GET['num']) ? $_GET['num'] : '';
function show($number)
{
    for ($i = 2; $i <= $number; ++$i) {
        $k = 1;
        for ($j = 2; $j < $i; ++$j) {
            if ($i % $j == 0) {
                $k = 0;
                break;
            }
        }
        if ($i % 10 == 1) {
            echo '<tr>';
        }
        if ($i == 2) {
            echo '<td>1</td>';
        }
        if ($k == 1 && $i != 1) {
            echo "<td class='bg-mine'>$i</td>";
        } else {
            echo "<td>$i</td>";
        }
        if ($i % 10 == 0) {
            echo '</tr>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            text-align: center;
        }
        table, td {
            border: 1px solid;
        }
        .bg-mine {
            background-color: pink;
        }
        td {
            width: 10%;
        }
    </style>
</head>
<body>
    <a href="https://jerry092383.nctu.me/iii_php_hw">首頁</a>
    <hr>
    <form action="prime.php">
        <input type="number" name="num" value="">
        <button type="submit">送出</button>
    </form>
    <p></p>
    <table>
    <?php
    if ($num != '') {
        show($num);
    }
    ?>
    </table>
</body>
</html>