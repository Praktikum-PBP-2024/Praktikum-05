<?php

require_once('./lib/db_login.php');

// TODO 1: Ambil value dari query string parameter id
$id = $db->real_escape_string($_GET['id']);

// TODO 2: Tuliskan dan eksekusi query untuk mendapatkan informasi customer
$query = "SELECT * FROM customers WHERE customerid = '$id'";
$result = $db->query($query);

if (!$result) {
    die("Could not query the database: <br>" . $db->error);
}

// TODO 3: Tuliskan response
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Name: " . $row['name'] . "<br>";
    echo "Address: " . $row['address'] . "<br>";
    echo "City: " . $row['city'] . "<br>";
} else {
    echo "No customer found with ID: $id";
}

// TODO 4: Dealokasi variabel dan tutup koneksi database
$result->free();
$db->close();