<?php
$name1 = "Rakibul";
$name2 = "Hasan";
$name3 = "Zeem";

if(strlen($name1) < strlen($name2) && strlen($name1) < strlen($name3)){
    echo $name1;
}else if(strlen($name1) < strlen($name2) && strlen($name1) < strlen($name3)){
    echo $name2;
}else{
    echo $name3;
}
