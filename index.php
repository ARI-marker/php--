<?php

function maximum($x , $y){

    if($x > $y){
        return $x;
    }else{
        return $y;
    }
}

$a = 20;
$b = 30;

$test = maximum($a , $b);
echo "Max of $a and $b is $test";

echo "<br>";

function divisible($n){

    if(($n % 7)== 0){
        return "$n is fully divisible by 2";
    }
    else{
        return "$n is not fully divisible by 2";
    }
}

print_r(divisible(4)."<br>");
print_r(divisible(35). "<br>");
print_r(divisible(16). "<br>");
print_r(divisible(21). "<br>");

echo "<br>";

$sports = ["Football","Tenis","Rockey","Basketball","Volleyball"];

echo $sports[0];

echo "<br>";

echo end($sports);

echo "<br>";

echo count($sports);

echo "<br>";








 


    


















?>