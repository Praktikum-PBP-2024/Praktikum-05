<?php
require_once('./db_login.php');

$keywords = $_GET['keywords'];

$query = "SELECT * FROM books WHERE title LIKE '%$keywords%'";
$result = $db->query( $query );
if (!$result) {
    die("Could not query the database: <br>" . $db->error);
}

while ($row = $result->fetch_object()){
    echo 'ISBN: '.$row->isbn.'<br />';
    echo 'Title: '.$row->title.'<br />';
    echo 'Author: '.$row->author.'<br />';
    echo 'Price: '.$row->price.'<br />';
}

$db->close();
?>