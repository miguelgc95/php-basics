<?php

$newDate = new DateTime();

var_dump($newDate);
echo "<br>";
print_r($newDate);
echo "<br>";
echo "<br>";
echo $newDate->format('Y-m-d');
echo "<br>";
echo $newDate->format('d');

echo "<br>";
echo $newDate->format('m');
echo "<br>";
echo $newDate->format('s');

?>