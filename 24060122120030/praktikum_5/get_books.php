<?php

require_once('./lib/db_login.php');

// Ambil nilai keyword dari query string
$keywords = $db->real_escape_string($_GET['keywords']);

// Query untuk mencari buku berdasarkan judul
$query = "SELECT isbn, author, title, price FROM books WHERE title LIKE '%$keywords%'";
$result = $db->query($query);

if (!$result) {
    die("Could not query the database: <br>" . $db->error);
}

// Tampilkan hasil pencarian
if ($result->num_rows > 0) {
    echo '<table class="table table-striped">';
    echo '<tr><th>ISBN</th><th>Author</th><th>Title</th><th>Price</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['isbn'] . '</td>';
        echo '<td>' . $row['author'] . '</td>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $row['price'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<table class="table table-striped"><tr><td colspan="4" align="center">No books found for the given title.</td></tr></table>';
}

$result->free();
$db->close();