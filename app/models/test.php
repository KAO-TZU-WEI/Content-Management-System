<?php

require_once '../../class/db-class.php';
$test = new Mydb();
$res = $test->toJSON('member');
echo $res;

?>