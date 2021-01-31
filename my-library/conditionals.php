<?php

$newDate = new DateTime();

echo $newDate->format('i');
echo "<br>";

if ($newDate->format('l') == "Monday"){
    echo "today is monday";
}else{
    echo "today is not monday";
}

echo "<br>";
if ($newDate->format('F') == "October"){
    echo "today is monday";
}else{
    echo "We are not on October, we are in ".$newDate->format('F');
}

echo "<br>";
if ($newDate->format('i') <10){
    echo "the current minute is less than 10";
}elseif($newDate->format('i') > 15){
    echo "the current minute is more than 15";
}else{
    echo "does not meet any conditions";
}

echo "<br>";
switch ($newDate->format('l')) {
    case "Sunday":
        echo "Today is Sunday, switch working";
        break;
    case "Monday":
        echo "Today is Monday";
        break;
    default:
        echo "what today";
        break;
}

?>