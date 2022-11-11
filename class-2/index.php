<?php

$hello = "Hello World!";
$hello1 = "Hello";
echo $hello. " " .$hello1;

//difference between empty and null
//$a;
//echo $a - no data types and not assigned any value
//empty means declared bt not assigned any value but assigned something

$name = ['Rakib', "sakib", "saim"];
echo '<pre>';
var_dump($name);

//associative array
$arr = [
    "name" => "Rakib",
    "age" => 23,
    "job" => "Software Engineer"
];
echo '<pre>';
print_r($arr);

//hashing
$hash = "Hashing";
echo md5($hash);
echo "<br>";
echo sha1($hash);

//explode/ implode
$str = "Md Rakibul Hasan";
$arr2 = explode(" ", $str);
print_r($arr2);

//super global variables
echo "<pre>";
print_r($_SERVER);

//even odd
$number = 21;
if($number%2 == 0){
    echo "Even";
}else{
    echo "Odd";
}