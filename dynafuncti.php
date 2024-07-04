<?php
function sayhello(){
    return "hello dada haru";
}
 
function add($a,$b){
    return $a+$b;
}

function multi($a,$b){
    return $a*$b;
}

function dynamicFunctionCall($functionName, ...$params){
    if(function_exists($functionName)){
        return $functionName(...$params);
    }
    else{
        return "function $functionName doesnot exist";
    }
}

$functionToCall='sayhello';
echo dynamicFunctionCall($functionToCall). "<br>\n";

$functionToCall="add";
echo dynamicFunctionCall($functionToCall,2,3)."<br>\n";

$functionToCall = 'hello';
echo dynamicFunctionCall($functionToCall) . "\n";