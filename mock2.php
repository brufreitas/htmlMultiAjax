<?php
print json_encode($_POST);
$qt = count($_POST["messages"]);

$rand = rand(10, 50);

usleep(1000 * $qt * $rand);
?>