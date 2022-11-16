<?php
$number = 12;
function greetings($n1){
    echo $n1;
}
greetings($number);
echo "<br>";

$name = ["Rakib", "Shakib", "Saim", "Rik"];
foreach ($name as $key => $value){
    echo $key. " = ". $value. "<br>";
}
