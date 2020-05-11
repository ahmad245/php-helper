<?php

$data = array(
    array(
        "id" => 1,
        "name" => "Bruce Wayne",
        "city" => "Gotham",
        "gender" => "Male"
    ),
    array(
        "id" => 2,
        "name" => "Thomas Wayne",
        "city" => "Gotham",
        "gender" => "Male"
    ),
    array(
        "id" => 3,
        "name" => "Diana Prince",
        "city" => "New Mexico",
        "gender" => "Female"
    ),
    array(
        "id" => 4,
        "name" => "Speedy Gonzales",
        "city" => "New Mexico",
        "gender" => "Male"
    )
);

$dataGroubed=array (
    'Male' => 
        array (
        0 => 
        array (
            'id' => 1,
            'name' => 'Bruce Wayne',
            'city' => 'Gotham',
            'gender' => 'Male',
        ),
        1 => 
        array (
            'id' => 2,
            'name' => 'Thomas Wayne',
            'city' => 'Gotham',
            'gender' => 'Male',
        ),
        2 => 
        array (
            'id' => 4,
            'name' => 'Speedy Gonzales',
            'city' => 'New Mexico',
            'gender' => 'Male',
        ),
    ),
    'Female' => 
        array (
        0 => 
        array (
            'id' => 3,
            'name' => 'Diana Prince',
            'city' => 'New Mexico',
            'gender' => 'Female',
        ),
    ),
);
 function groupBy($key,$data){
    $result=[];
    foreach ($data as  $item) {
       if(array_key_exists($key,$item)){
           $result[$item[$key]][]=$item;
       }
       else{
           $result[""][]=[];
       }
       return $result;
    }
}