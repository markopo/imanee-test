<?php


require_once __DIR__.'/vendor/autoload.php';

use Imanee\Imanee;

$width = $_GET["width"];
$height = $_GET["height"];

if(!isset($width) || !isset($height)) {
    echo "No waaayyyy!!!";
    exit();
}

//header("Content-type: image/jpg");

$path = __DIR__.'/images/MACBPMF839KSA.jpg';

$imanee = new Imanee($path);
$thumbPath = __DIR__.'/images/mac_thumb.jpg';

// http://imanee.readthedocs.org/en/latest/basic.html#saving-images-to-disk
$imanee->thumbnail($width, $height)->write($thumbPath, 90);
