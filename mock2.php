<?php
// print json_encode($_POST);
$qt = count($_POST["messages"]);

$aux = 0;
do {
  usleep(1000 * rand(20, 50));
  $aux += 10;
} while($aux <= $qt);

$ret = array(
  "st" => "OK",
);
print json_encode($ret);
?>