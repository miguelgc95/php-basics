<?php

var_dump("<br>1+2=",1+2);
var_dump("<br>1-2=",1-2);
var_dump("<br>1*2=",1*2);
var_dump("<br>4/2=", 4/2);
var_dump("<br>4%2=", 4%2);

$a = 1;
$b = 2;
$c = 1;
if ($a > $b) {
    echo "<br>a es mayor que b";
} elseif ($a == $b) {
    echo "<br>a es igual que b";
} else {
    echo "<br>a es menor que b<br>";
}


if ($a == $c && $a<$b){
    echo "<br>a=c y a menor que b";
}

if ($a == $c || $a==$b){
    echo "<br>o a=c o a=b";
}

if (!($a==$b)){
    echo "<br>a distinto de b";
}

?>