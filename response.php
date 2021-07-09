<?php
$test = $_POST['var_PHP_data'];
$image = $_POST['var_PHP_img'];
$image = explode(";", $image)[1];
$image = explode(",", $image)[1];
$image = str_replace(" ", "+", $image);
$path = "uploads/assinatura-email-{$test}.jpeg";
$image = base64_decode($image);
file_put_contents($path, $image); //serializar
echo  $image;
