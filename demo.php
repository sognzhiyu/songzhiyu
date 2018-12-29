<?php
$start = 1;
$size = 5;
// $start = $_GET['start'];
// $size = $_GET['size'];
$url = "http://192.168.16.7/6a_jiekou/api.php?start=".$start."&size=".$size;
$data = file_get_contents($url);
$data = json_decode($data,true);
var_dump($data);die;


