--TEST--
Test Imagick, rotateImage
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php

$angle = 45;
$color = 'rgb(127, 127, 127)';

function rotateImage($angle, $color) {
    $imagick = new \Imagick();
    $imagick->newPseudoImage(640, 480, "magick:logo");
    $imagick->rotateimage($color, $angle);
    $bytes = $imagick->getImageBlob();
    if (strlen($bytes) <= 0) { echo "Failed to generate image.";} 
}

rotateImage($angle, $color) ;
echo "Ok";
?>
--EXPECTF--
Ok