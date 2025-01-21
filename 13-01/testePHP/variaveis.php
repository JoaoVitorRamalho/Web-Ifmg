<?php
$a = 10;
$b = 10.65;
$c = false;
$d = 'Alan';
$e = "$d Kardec";

echo $a, ' ',$b, ' ', $c, ' ',$d, ' ', $e;

echo '<br>';
echo gettype($c);
echo '<br>';
echo is_integer($a);
echo '<br>';
var_dump($e);