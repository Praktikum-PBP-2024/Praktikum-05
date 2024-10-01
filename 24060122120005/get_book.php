<!-- Nama       : Aditya Haidar Faishal -->
<!-- NIM        : 240601212130049 -->
<!-- Lab        : D2 -->
<!-- Tanggal    : 1 Oktober 2024-->
<!-- Deskripsi  : membuat program berbasis PHP dengan bantuan AJAX-->

<?php
require_once('./lib/db_login.php');

if (isset($_GET['keywords'])) {
    $keywords = $_GET['keywords']; 

    $query = "SELECT * FROM books WHERE title = '$keywords'"; 

    $result = $db->query($query);

    if (!$result) {
        die("Could not query the database: <br />" . $db->error);
    }

    sleep(3);

    if ($result->num_rows > 0) {
        echo "<strong>Detail Buku:</strong><br />";
        while ($row = $result->fetch_object()) {
            echo 'Title: ' . $row->title . '<br />';
            echo 'ISBN: ' . $row->isbn . '<br />';
            echo 'Author: ' . $row->author . '<br />';
            echo 'Price: ' . $row->price . '<br />';
        }
    } else {
        echo "Buku dengan judul '" . $keywords . "' tidak ditemukan."; 
    }

    $result->free();
    $db->close();
} 
?>