<?php

$numbers = array(1, 2, 3, 4);
$length = count($numbers);
echo $length;
for ($i=0; $i<$length; $i++){
    echo "<br>iteración número: ","$i";
}


foreach ( $numbers as $number) {
    echo "<br>a ve si se puede: $number";
}

$i=0;
while ($i<7){
    echo "<br>iteración con while número: $i";
    $i++;
}

$word = "palabrita der niño jesu";

echo "<br>$word";
echo strlen($word);

$i=0;
do {
    echo "<br>iteración con do-while número: $i";
    $i++;
}
while ($i<7)

?>