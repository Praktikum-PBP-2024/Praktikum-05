<?php
require_once('./lib/db_login.php');
include 'header.php';
?>

<div class="row w-50 mx-auto mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">Book Search</div>
            <div class="card-body">
				<div class="mb-3">
					<input type="text" class="form-control" id="keywords" placeholder="Enter book title">
				</div>
				<button id="search" class="btn btn-primary" onclick="searchBooks(document.getElementById('keywords').value)">Search</button>
				<div id="search_result" class="mt-4">
					<!-- Search result -->
				</div> 
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>