<?php
$str = file_get_contents('http://localhost:1234/lab9/json/lab9_data.json');
header('Content-Type: application/json');
echo $str;
?>
