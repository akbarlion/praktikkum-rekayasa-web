<?php
$array = ["nama" => "John", "umur" => 25, "kota" => "Jakarta"];
$json = json_encode($array);
echo "JSON: " . $json . "\n\n";

$jsonString = '{"nama":"Jane","umur":30,"hobi":["membaca","traveling"]}';

$object = json_decode($jsonString);
echo "PHP Object - Nama: " . $object->nama . "\n";
echo "PHP Object - Hobi pertama: " . $object->hobi[0] . "\n\n";

$arrayResult = json_decode($jsonString, true);
echo "PHP Array - Nama: " . $arrayResult['nama'] . "\n";
echo "PHP Array - Hobi kedua: " . $arrayResult['hobi'][1] . "\n";
?>