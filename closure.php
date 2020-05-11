<?php
function expectFun($callback){
    if(is_callable($callback)){
        $result=call_user_func($callback);
    }
    return $result;
}
$variableOutSide=["id"=>1];

$result=expectFun(function() use ($variableOutSide){
    var_dump($arr);
    return "ahmad";
});

var_dump($result);
