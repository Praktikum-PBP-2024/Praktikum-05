<?php
session_start();
require_once('./lib/db_login.php');


if (isset($_GET['keywords']) && !empty($_GET['keywords'])) {

    $title = $db->real_escape_string($_GET['keywords']);


    $query = "SELECT * FROM books WHERE title LIKE '%" . $title . "%'";
    $result = $db->query($query);

    if (!$result) {
        die("Could not query the database: <br>" . $db->error);
    }


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            echo 'Author: ' . htmlspecialchars($row->author) . '<br>';
            echo 'Title: ' . htmlspecialchars($row->title) . '<br>';
            echo 'Price: $' . htmlspecialchars($row->price) . '<br>';
            echo '<hr>'; 
        }
    } else {
        echo 'No books found for the title: ' . htmlspecialchars($title);
    }

    $result->free();
} else {
    echo 'Please enter a title to search.';
}

$db->close();
?>