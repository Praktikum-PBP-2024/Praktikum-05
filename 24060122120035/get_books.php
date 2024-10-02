<!-- Nama : Abdul Majid
NIM  : 24060122120035 -->

<?php
require_once('./lib/db_login.php');

$keywords = isset($_GET['keywords']) ? test_input($_GET['keywords']) : '';

if (!empty($keywords)) {
    $query = "SELECT * FROM books WHERE title LIKE ?";
    $stmt = $db->prepare($query);
    $keywords = $keywords . "%";
    $stmt->bind_param("s", $keywords);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if (!$result) {
        die ("Could not query the database: <br />". $db->error);
    }
    while ($row = $result->fetch_assoc()) {
        echo "<div><strong>ISBN : " . $row['isbn'] . "</strong><br>";
        echo "Title: " . $row['title'] . "<br>";
        echo "Author: " . $row['author'] . "<br>";
        echo "Price: " . number_format($row['price'], 2) . "</div>";
    }
    
    $stmt->close();
} 
$db->close();
?>