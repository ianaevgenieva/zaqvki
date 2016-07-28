<?php

$array =["#00FFFF","#0000FF","#FF7F50","#FF8C00","#1E90FF"];


 $result =$array[rand(0,count($array)-1)];

header('Content-Type: application/json');
echo json_encode($result);