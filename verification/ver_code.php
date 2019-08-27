<?php

session_start();
header('Content-Type: image/jpeg');

$width = 150;
$img = imagecreate($width, 50);
$verCode = (string) (rand(10000, 99999));
$_SESSION['verCode'] = $verCode;

$bg = imagecolorallocate($img, 0, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);

imagefill($img, 0, 0, $bg);

$j = 15;
for ($i = 0; $i < 5; ++$i) {
    imagefttext($img, 16, rand(0, 180), $j, 25, $black,
    'd:/XAMPP/htdocs/iii_php_hw/verification/mingliu.ttc', substr($verCode, $i, 1));
    $j += 30;
}

imagejpeg($img);

imagedestroy($img);
