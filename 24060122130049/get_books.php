<?php
require_once('./lib/db_login.php');

// Periksa apakah parameter 'keywords' telah dikirim
if (isset($_GET['keywords'])) {
    $keywords = $db->real_escape_string($_GET['keywords']);

    $query = "SELECT * FROM books WHERE title LIKE '%$keywords%'";
    $result = $db->query($query);

    // Cek apakah hasil query ada
    if ($result->num_rows > 0) {
        // Tampilkan hasil dalam bentuk tabel
        echo '<table class="table table-striped">';
        echo '<thead><tr><th>ISBN</th><th>Title</th><th>Author</th><th>Price</th></tr></thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['isbn'] . '</td>';
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['author'] . '</td>';
            echo '<td>$' . number_format($row['price'], 2) . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<table class="table table-striped"><tr><td colspan="6" align="center">No books found for the given keywords.</td></tr></table>';
    }

    $result->free();
}

// Tutup koneksi
$db->close();
?>
