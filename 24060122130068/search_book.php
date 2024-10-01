<?php include('./header.php') ?>

<div class="row w-50 mx-auto">
    <div class="col">
        <div class="card mt-4">
            <div class="card-header">Buku</div>
            <div class="card-body">
                <form method="GET" autocomplete="on">
                    <div class="mb-3">
                        <label for="search" class="form-label">Cari Buku:</label>
                        <input type="text" class="form-control" id="search" name="search">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="searchBooks(document.getElementById('search').value)">Search</button>
                </form>
                <br>
                <div id="show_books"></div>
            </div>
        </div>
    </div>
</div>

<?php include('./footer.php') ?>