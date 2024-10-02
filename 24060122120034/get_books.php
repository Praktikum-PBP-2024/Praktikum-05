<?php
require_once('./lib/db_login.php');

$keywords = $_GET['keywords'];
$keywords = $db->real_escape_string($keywords);

$query = "SELECT * FROM books WHERE title LIKE '%$keywords%'";

$result = $db->query($query);

if (!$result) {
    die("Could not query the database: <br>" . $db->error);
}


if ($result->num_rows == 0) {
    echo '<table class="table table-striped"><tr><td colspan="4" align="center">Your search did not return any result.</td></tr></table>';
} else {
    // Buat tabel HTML untuk menampilkan hasil pencarian
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>ISBN</th><th>Author</th><th>Title</th><th>Price</th></tr></thead><tbody>';
    while ($row = $result->fetch_object()) {
        echo '<tr>';
        echo '<td>' . $row->isbn . '</td>';
        echo '<td>' . $row->author . '</td>';
        echo '<td>' . $row->title . '</td>';
        echo '<td>' . $row->price . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

$result->free();
$db->close();