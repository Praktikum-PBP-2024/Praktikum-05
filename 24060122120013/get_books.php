<!-- Nama       : Rania   -->
<!-- NIM        : 24060122120013   -->
<!-- Lab        : D2   -->
<!-- Tanggal    : 28 September 2024  -->
<!-- File       : get_books.php -->

<?php
require_once('./lib/db_login.php');

if (isset($_GET['keywords'])) {
    $keywords = $_GET['keywords']; 

    // Ambil data buku berdasarkan judul yang diketik
    $query = "SELECT * FROM books WHERE title = '$keywords'"; 

    // Eksekusi query
    $result = $db->query($query);

    if (!$result) {
        die("Could not query the database: <br />" . $db->error);
    }
    sleep(2);

    // Mengecek apakah ada buku dengan judul tersebut
    if ($result->num_rows > 0) {
        // Fetch dan tampilkan detail buku jika ada
        echo "<strong>Detail Buku:</strong><br />";
        while ($row = $result->fetch_object()) {
            echo 'Title: ' . $row->title . '<br />';
            echo 'ISBN: ' . $row->isbn . '<br />';
            echo 'Author: ' . $row->author . '<br />';
            echo 'Price: ' . $row->price . '<br />';
        }
    } else {
        // Jika tidak ada buku dengan judul tersebut
        echo "Buku dengan judul '" . $keywords . "' tidak ditemukan."; 
    }

    // Tutup koneksi database
    $result->free();
    $db->close();
} 
?>
