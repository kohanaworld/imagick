--TEST--
Test Imagick, shearImage
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php

$shearX = 15;
$shearY = 5;
$color = 'rgb(127, 127, 127)';

function shearImage($color, $shearX, $shearY) {
    $imagick = new \Imagick();
    $imagick->newPseudoImage(640, 480, "magick:logo");
    $imagick->shearimage($color, $shearX, $shearY);
    $bytes = $imagick->getImageBlob();
    if (strlen($bytes) <= 0) { echo "Failed to generate image.";} 
}

shearImage($color, $shearX, $shearY) ;
echo "Ok";
?>
--EXPECTF--
Ok