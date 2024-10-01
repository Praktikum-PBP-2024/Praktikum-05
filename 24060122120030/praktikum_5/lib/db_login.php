<?php 
$db_host = 'pbp.shariyl.cloud:3306';
$db_database = 'bookorama_shared';
$db_username = 'praktikum_03';
$db_password = 'password apaaan ini';

//  Connect database
$db = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($db->connect_errno) {
    die('Could not connect to the database: <br/>' . $db->connect_error);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
