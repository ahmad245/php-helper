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


function findValue($val){
    $arr=[
      "id"=>1,"name"=>"ahmad"
    ];
    $result=array_filter($arr,function($key,$value) use($val){
     return $key==$val;
     },ARRAY_FILTER_USE_BOTH );
      
      return $result;
    }
    
    
    var_dump( findValue(1));
    