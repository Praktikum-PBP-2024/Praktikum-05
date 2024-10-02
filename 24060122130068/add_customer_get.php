<?php
require_once('C:\xampp\htdocs\pbp5\lib\db_login.php');

// Menghindari SQL Injection dengan real_escape_string
$name = $db->real_escape_string($_GET['name']);
$address = $db->real_escape_string($_GET['address']);
$city = $db->real_escape_string($_GET['city']);

// Assign a query
$query = "INSERT INTO customers (name, address, city) VALUES ('$name', '$address', '$city')";
$result = $db->query($query);

if (!$result) {
    // TODO 1: Jika error, tulislah response yang sesuai
    echo '<div class="alert alert-danger alert-dismissible"> 
            <strong>Error!</strong> Could not query the database. <br>' . 
            $db->error . '<br>Query: ' . $query . '
          </div>';
} else {
    // TODO 2: Jika sukses, tulislah response yang sesuai
    echo '<div class="alert alert-success alert-dismissible">
            <strong>Success!</strong> Data has been added. <br>
            Name: ' . htmlspecialchars($_GET['name']) . '<br>
            Address: ' . htmlspecialchars($_GET['address']) . '<br>
            City: ' . htmlspecialchars($_GET['city']) . '
          </div>';
}

// Close DB Connection
$db->close();
?>
