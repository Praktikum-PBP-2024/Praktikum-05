<?php include('./header.php') ?>
<div class="container mt-4">
    <h2 class="mb-4">Search Results</h2>

    <div class="table-container">
        <?php
        require_once('./lib/db_login.php');
        if (isset($_GET['searchTerm'])) {
            $searchTerm = $db->real_escape_string($_GET['searchTerm']);
            $query = "SELECT * FROM books WHERE title LIKE '%$searchTerm%'";
            $result = $db->query($query);
            if ($result && $result->num_rows > 0) {
                echo "<table class='table table-bordered table-hover'>
                <thead class='table-light'>
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>";
                while ($row = $result->fetch_object()) {
                    echo '<tr>';
                        echo '<td>' . htmlspecialchars($row->isbn) . '</td>';
                        echo '<td>' . htmlspecialchars($row->title) . '</td>';
                        echo '<td><button class="btn btn-primary btn-sm" onclick="showBookDetail(\'' . htmlspecialchars($row->isbn) . '\')">Detail</button></td>';
                    echo '</tr>';
                }
                echo '</table>';
                echo '<br />';
                echo '<p>Total Rows = ' . $result->num_rows . '</p>';
            } else {
                echo '<div class="alert alert-warning" role="alert">Tidak ada buku yang ditemukan dengan judul "' . htmlspecialchars($searchTerm) . '".</div>';
            }
            $result->free();
        } else {
            echo '<div class="alert alert-danger" role="alert">Parameter searchTerm tidak ditemukan.</div>';
        }
        $db->close();
        ?>
    </div>
</div>
<?php include('./footer.php') ?>