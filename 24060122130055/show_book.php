<?php include('./header.php') ?>
    <div class="row w-50 mx-auto mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header">Show Book Details</div>
                <div class="card-body">
                    <input type="text" id="keywords" placeholder="Search a Book" class="form-control">
                    <br>
                    <button id="search" class="btn btn-primary" onclick="searchBooks(document.getElementById('keywords').value)">Search</button>
                    <br>
                    <div id="detail_book"></div>
                </div>
            </div>
        </div>
    </div>
<?php include('./footer.php') ?>