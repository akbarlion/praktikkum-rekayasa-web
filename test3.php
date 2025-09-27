<?php
$jsonObj = '{"Peter": 35, "Ben" : 37, "Joe": 43}';

$obj = json_decode($jsonObj);

echo $obj->Peter;
echo ', ';
echo $obj->Ben;
echo ', ';
echo $obj->Joe;