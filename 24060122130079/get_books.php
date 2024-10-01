<?php
require_once('./lib/db_login.php');
$keywords = isset($_GET['keywords']) ? $db->real_escape_string($_GET['keywords']) : '';

// Query the database for books with titles matching the search keywords
$query = "SELECT * FROM books WHERE title LIKE '$keywords%'";
$result = $db->query($query);

if (!$result) {
    die ("Could not query the database: <br />". $db->error);
}
sleep(2);
// Fetch and display the results
while ($row = $result->fetch_object()) {
    echo 'Title: '.$row->title.'<br />';
    echo 'Author: '.$row->author.'<br />';
    echo 'Price: '.$row->price.'<br />';
    echo 'ISBN: ' .$row->isbn.'<br />';
}
$result->free ();
$db->close () ;