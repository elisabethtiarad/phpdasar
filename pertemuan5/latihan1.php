<?php
//array = variavle yg dpt memiliki bnyk nilai

 $hari = array("senin", "selasa", "rabu");

 $bulan = ["januari", "maret", "april"];
 $arr1 = [123,"tiara",false];

//  var_dump($hari);
//  echo "<br>";
//  print_r($bulan);

//  echo $arr1[1];
//  echo "<br>";
//  echo $bulan[1];

var_dump($hari);
$hari[] = "kamis";
echo "<br>";
var_dump($hari);
