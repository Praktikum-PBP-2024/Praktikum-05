<?php
require_once('./lib/db_login.php');
$name = $_GET['name'] ?? '';
$address = $_GET['address'] ?? '';
$city = $_GET['city'] ?? '';

//Asign a query
$query = " INSERT INTO customers (name, address, city) VALUES('".$name."', '". $address."', '".$city."') ";
echo $query;

$result = $db->query( $query );

if ( !$result) {
    echo "
        <div class='alert alert-danger alert-dismissible'>
            <strong>
                Error
            </strong> 

            Could not query the database
            <br>
            $db->error
            <br>
        </div>
    ";
} else {
    echo "
        <div class='alert alert-success alert-dismissible'>
            <strong>
                Sukses!
            </strong>

            Data berhasil ditambahkan.

            <br>

            Name: $name <br>
            Address: $address<br>
            City: $city<br>
        </div>
    ";
}

// Close DB Connection
$db->close();