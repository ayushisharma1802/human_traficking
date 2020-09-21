<?php
session_start();
$random_alpha = md5(rand());
$capta_code = substr($random_alpha, 0, 6);
$_SESSION['capta_code'] = $capta_code;
header('Content-Type: image/png');
$image = imagecreatetruecolor(200, 38);
$background_color = imagecolorallocate($image, 231, 100, 18);
$text_color = imagecolorallocate($image, 255, 255, 255);
imagefilledrectangle($image, 0, 0, 200, 38, $background_color);
$font = dirname(_FILE_) . '/arial.ttf';
imagettftext($image,  20, 0, 60, 38, $text_color, $font, $capta_code);
imagepng($image);
imagedestroy($image);
