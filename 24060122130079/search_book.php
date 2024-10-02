<!--File : search_book.php
Deskripsi : menampilkan data buku
-->

<?php include ('./header.php') ?>
<br>
<div class="card">
    <div class="card-header">Show Books Data</div>
        <div class="card-body">
            <!-- Input field for searching books by title -->
            <input type="text" name="keywords" id="keywords" class="form-control" placeholder="Type a book title...">
            <br>
            <!-- Search button -->
            <button id="search" class="btn btn-primary" onclick="searchBooks(document.getElementById('keywords').value)">Search</button>
            <br><br>
        <div id="search_result"></div> <!-- This will display the search results -->
    </div>
</div>
<?php include('./footer.php') ?>

