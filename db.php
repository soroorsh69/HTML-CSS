<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'Soroor_db';
$db_port = 8889;

$mysqli = new mysqli(
$db_host,
$db_user,
$db_password,
$db_db,
$db_port
);

if ($mysqli->connect_error) {
die("Connection failed: " . $mysqli->connect_error);

}