<?php include('./header.php') ?>
<div class="container mt-5">
        <h2>Search for Books</h2>
        <form onsubmit="event.preventDefault(); searchBooks(document.getElementById('keywords').value);">
            <div class="mb-3">
                <label for="keywords" class="form-label">Book Title</label>
                <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Enter book title" autofocus>
            </div>
            <button type="button" id="search" class="btn btn-primary" onclick="searchBooks(document.getElementById('keywords').value);">Search</button>
        </form>

        <hr>

        <!-- Hasil pencarian akan ditampilkan di sini -->
        <div id="search_result">
            <!-- Hasil dari get_books.php via AJAX akan ditampilkan di sini -->
        </div>
</div>
<?php include('./footer.php') ?>
