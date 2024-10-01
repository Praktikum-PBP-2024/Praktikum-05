<!-- File: get_books.php -->
<?php
require_once('./lib/db_login.php');

// Periksa apakah parameter 'action' sudah dikirim
if (isset($_GET['action']) && $_GET['action'] === 'search') {
    if (isset($_GET['keywords'])) {
        // Proses pencarian berdasarkan kata kunci
        $keywords = $db->real_escape_string($_GET['keywords']);
        $query = "SELECT * FROM books WHERE title LIKE '%$keywords%' ORDER BY title";
        $result = $db->query($query);

        if (!$result) {
            die("Database query error: " . $db->error);
        }

        if ($result->num_rows > 0) {
            echo '<table class="table table-striped">';
            echo '<tr><th>Title</th><th>Author</th><th>Harga</th><th>ISBN</th></tr>';
            while ($row = $result->fetch_object()) {
                echo '<tr>';
                echo '<td>' . $row->title . '</td>';
                echo '<td>' . $row->author . '</td>';
                echo '<td>' . $row->price . '</td>';
                echo '<td>' . $row->isbn . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<table class="table table-striped"><tr><td colspan="4" align="center">No books found.</td></tr></table>';
        }
    }
} elseif (isset($_GET['action']) && $_GET['action'] === 'detail') {
    if (isset($_GET['id'])) {
        $bookid = intval($_GET['id']);
        $query = "SELECT * FROM books WHERE bookid = $bookid";
        $result = $db->query($query);

        if (!$result) {
            die("Database query error: " . $db->error);
        }

        if ($result->num_rows > 0) {
            $book = $result->fetch_object();
            echo '<h4>Book Details</h4>';
            echo '<p><strong>Judul:</strong> ' . $book->title . '</p>';
            echo '<p><strong>Author:</strong> ' . $book->author . '</p>';
            echo '<p><strong>Harga:</strong> ' . $book->price . '</p>';
            echo '<p><strong>ISBN:</strong> ' . $book->isbn . '</p>';
        } else {
            echo 'No details found for this book.';
        }
    }
} else {
    echo 'No action specified.';
}
?>
