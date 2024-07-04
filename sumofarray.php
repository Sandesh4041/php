<?php
function sum($array){
    $sum=0;
    foreach($array as $element){
        $sum+=$element;
    }
    return $sum;

}
$number=array(1,2,3,4,5);
$sum=sum($number);
echo"the sum of number is {$sum}";


