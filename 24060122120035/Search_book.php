<?php
require_once('./lib/db_login.php');
include 'header.php';
?>

<div class="row w-50 mx-auto mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">Book Search</div>
            <div class="card-body">
                <input type="text" id="keywords" class="form-control" placeholder="Enter book title">

                <button id="search" class="btn btn-primary" onclick="searchBooks(document.getElementById('keywords').value)">Search</button>

                <div id="search_result" class="mt-4"> <!-- Search results will be displayed here --></div> 
                    
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

