<?php

require '../vendor/autoload.php';

use App\Hello;

$hello = new Hello();
$message = $hello->talk();

echo $message;