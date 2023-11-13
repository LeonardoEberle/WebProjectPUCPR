<?php
    include_once("conn.php");

    $sql1 = "select * from user";
    $result1 = $con->query($sql1);