<?php
//Headers
header('Access-Control-Allow-Origin: *');
// header('Content-Type: image/jpg');
header('Content-Disposition: attachment; filename="picture.jpg"');

$a = readfile( 'https://picsum.photos/700/700');
return $a;