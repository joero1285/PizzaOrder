<?php
session_start();

$img = imagecreatetruecolor(80,30);

$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);
$grey = imagecolorallocate($img,150,150,150);
$red = imagecolorallocate($img, 255, 0, 0);
$pink = imagecolorallocate($img, 200, 0, 150);

function randomString($length){
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $str = "";
    $i = 0;
    
        while($i <= $length){
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $str = $str . $tmp;
            $i++;
        }
    return $str;
}

for($i=1;$i<=rand(1,5);$i++){
    $color = (rand(1,2) == 1) ? $pink : $red;
    imageline($img,rand(5,70),rand(5,20), rand(5,70)+5,rand(5,20)+5, $color);
}

imagefill($img, 0, 0, $white);

$string = randomString(rand(7,10));
$_SESSION['string'] = $string;

imagettftext($img, 11, 0, 10, 20, $black, "arial.ttf", $string);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?> 