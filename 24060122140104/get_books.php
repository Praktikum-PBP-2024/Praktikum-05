<?php
require_once('./lib/db_login.php');
$title = $_GET['title'];

// Asign a query
$query = " SELECT * FROM books where title like '%".$title."%'";
$result = $db->query( $query );

if (!$result) {
    die ("Could not query the database: <br />". $db->error);
}

if (mysqli_num_rows($result) == 0){
    echo '<table class="table table-striped"><tr><td colspan="6" align="center">Nothing to see here.</td></tr></table>';
}
else{
    // Fetch and display the results
    echo '  <table class="table table-striped">
                <thead>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Price</th>
                </thead>
                <tbody>';
    while ($row = $result->fetch_object()) {
        echo '  <tr>
                    <td>'.$row->author.'</td>
                    <td>'.$row->title.'</td>
                    <td>'.$row->price.'</td>';
    }
    echo '      </tbody>
            </table>';
}
$result->free ();
$db->close () ;