<?php
include_once("conn.php");

$sql = "select * from user";
$result = $con->query($sql);

print_r($result);