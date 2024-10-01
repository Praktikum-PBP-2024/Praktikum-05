<?php
require_once('./lib/db_login.php');

$name = $db->real_escape_string($_GET['name']);
$address = $db->real_escape_string($_GET['address']);
$city = $db->real_escape_string($_GET['city']);

// Assign a query
$query = "INSERT INTO customers (name, address, city) VALUES ('" . $name . "', '" . $address . "', '" . $city . "')";
$result = $db->query($query);

if (!$result) {
    echo '<div class="alert alert-danger alert-dimissible"><strong>Error!</strong>Could bot query the database<br>'.$db->error.'<br>query = '.$query.'</div>';
} else {
    echo '<div class="alert alert-success alert-dimissible"><strong>Success!</strong>Data has been added<br>
    Name: '.$_GET['name'].'<br>
    Address: '.$_GET['address'].'<br>
    City: '.$_GET['city'].'<br></div>';
}

// Close DB Connection
$db->close();
