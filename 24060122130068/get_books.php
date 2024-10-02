<?php
require_once('./lib/db_login.php');

if (isset($_GET['search'])) {
    $search = $db->real_escape_string($_GET['search']);
    $query = "SELECT * FROM books WHERE title LIKE '%$search%'";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        echo '<table class="table table-striped">';
        echo '<tr><th>isbn</th><th>author</th><th>title</th><th>price</th></tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['isbn']) . '</td>';
            echo '<td>' . htmlspecialchars($row['author']) . '</td>';
            echo '<td>' . htmlspecialchars($row['title']) . '</td>';
            echo '<td>' . htmlspecialchars($row['price']) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<table class="table table-striped"><tr><td colspan="3" align="center">Tidak ada buku "' . htmlspecialchars($keywords) . '"</td></tr></table>';
    }
} else {
    echo '<p>Isi Search</p>';
}

$db->close();
?>