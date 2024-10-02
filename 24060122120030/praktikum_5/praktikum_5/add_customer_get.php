<?php
require_once('./lib/db_login.php');

$name = $db->real_escape_string($_GET['name']);
$address = $db->real_escape_string($_GET['address']);
$city = $db->real_escape_string($_GET['city']);

// Assign a query
$query = "INSERT INTO customers (name, address, city) VALUES ('" . $name . "', '" . $address . "', '" . $city . "')";
$result = $db->query($query);

if (!$result) {
    // TODO 1: Jika error, tulislah response yang sesuai
    echo "Error: Could not execute the query. " . $db->error;
} else {
    // TODO 2: Jika sukses, tulislah response yang sesuai
    echo "Success: The record has been added successfully.";
}


// Close DB Connection
$db->close();

