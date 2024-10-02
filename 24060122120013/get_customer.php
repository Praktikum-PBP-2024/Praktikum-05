<!-- Nama       : Rania   -->
<!-- NIM        : 24060122120013   -->
<!-- Lab        : D2   -->
<!-- Tanggal    : 25 September 2024  -->
<!-- File       : get_customer.php -->

<?php
require_once('./lib/db_login.php');
$customerid = $_GET['id'];

// Asign a query
// TODO 1: Ambil value dari query string parameter id
$query = " SELECT * FROM customers where customerid =".$customerid;

// TODO 2: Tuliskan dan eksekusi query untuk mendapatkan informasi customer
$result = $db->query( $query );

if (!$result) {
    die ("Could not query the database: <br />". $db->error);
}
sleep(2);

// Fetch and display the results
// TODO 3: Tuliskan response
while ($row = $result->fetch_object()) {
    echo 'Name: '.$row->name.'<br />';
    echo 'Address: '.$row->address.'<br />';
    echo 'City: '.$row->city.'<br />';
}

// TODO 4: Dealokasi variabel dan tutup koneksi database
$result->free ();
$db->close () ;
?>