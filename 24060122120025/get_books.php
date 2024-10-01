<!-- 
NAMA   : DIMAS YUDHA SAPUTRA
NIM    : 24060122120025
LAB    : D2
MATERI : PHP dan AJAX 
TANGGAL: 30/09/2024
-->

<?php
    require_once('./lib/db_login.php');
    $title = $_GET['keywords'];
    // $title = $db->real_escape_string($_GET['keywords']);

    $query = "SELECT * FROM books where title='".$title."'";
    $result = $db->query($query);

    if (!$result){
        die ("Could not query the database: <br />". $db->error);
    }

    echo '<table class="table table-striped"><tr><td text-align="justify">';   
    while ($row = $result->fetch_object()){
        echo '<h4><bold>Detail Buku : </bold></h4>';
        echo 'ISBN      : '.$row->isbn.'<br />';
        echo 'Author    : '.$row->author.'<br />';
        echo 'Title     : '.$row->title.'<br />';
        echo 'Price     : '.$row->price.'<br />';
    }
    echo '</td></tr></table>';
    
    $result->free();
    $db->close();
?>