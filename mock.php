<?php
$grupos = array(
  "1234",
  "1508",
  "1862",
  "1854",
  "1509",
  "1995",
  "1744",
  "1184",
  "1173",
  "1193",
  "133554",
  "182704",
  "115794",
  "161736",
  "146511",
  "119142",
  "115922",
  "190967",
  "198461",
  "195553",
);

$repres = array(
  "REPRE-T",
  "XPTOABCD-K",
  "UBRTITA-M",
  "UBRTITA-U",
  "MOLOLTELO-U",
);

$grupo = $grupos[array_rand($grupos)];
$repre = $repres[array_rand($repres)];
$ddd = rand(11, 99);
$fone = rand(1000, 9999).rand(1000, 9999);

require_once("LipsumGenerator.php");
$msg =  MasterOdin\Gists\LipsumGenerator::getBytes(rand(100, 160), false);
print "OK RecSms".date("ymdhis").rand(10000000, 99999999).rand(10000000, 99999999)."|{$repre}|{$grupo}|{$ddd}|9{$fone}|".$msg;
?>