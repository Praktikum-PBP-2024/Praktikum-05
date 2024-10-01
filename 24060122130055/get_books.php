<?php

require_once('./lib/db_login.php');

$title = $_GET['keywords'];

$query = "SELECT * FROM books where title LIKE '%$title%'";
$result = $db->query( $query );

if (!$result) {
    die("Could not query the database: <br>" . $db->error);
}

if ($result->num_rows == 0) {
    echo "<table class='table table-striped'><tr><td colspan='6' align='center'>No books found.</td></tr></table>";
} else {
    echo "<table class='table table-striped'>";
    echo "<thead align='center'><tr><th>Title</th><th>Author</th><th>ISBN</th><th>Price</th></tr></thead>";
    echo "<tbody>";
    while ($row = $result->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $row->title . "</td>";
        echo "<td>" . $row->author . "</td>";
        echo "<td>" . $row->isbn . "</td>";
        echo "<td>$" . number_format($row->price, 2) . "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
}
$result->free ();
$db->close () ;

?>