<?php

$image = $_POST['image'];
$image = explode(";", $image)[1];
$image = explode(",", $image)[1];
$image = str_replace(" ", "+", $image);
$nome = $_GET['var_PHP_data'];

$path = "uploads/assinatura-email-edu.jpeg";

$image = base64_decode($image);
file_put_contents($path, $image); //serializar
echo "Done";
