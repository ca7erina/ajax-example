<?php
$str = file_get_contents('http://localhost:1234/lab9/xml/lab9_data.xml');
header("Content-type: text/xml; charset=utf-8");
echo $str;
?>
