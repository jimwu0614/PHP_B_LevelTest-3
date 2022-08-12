<?php

//複製SWITCH.PHP

include_once "../base.php";

$DB=new DB($_POST['table']);
$DB->del($_POST['id']);
?>