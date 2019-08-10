<?php 
$db_user = "db_user";
$db_pass = "userpassword";
$db_name = "dbtest";
$db = new PDO('mysql:host=mysql-server;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
