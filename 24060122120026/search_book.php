<?php include ('./header.php');?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">Search Books</div>
        <div class="card-body">
            <input type="text" id="keywords" class="form-control" placeholder="Enter book title">
            <br>
            <button id="search" class="btn btn-primary" onclick="searchBooks(document.getElementById('keywords').value)">Search</button>
            <br>
            <div id="search_result"></div>
        </div>
    </div>
</div>

<script src="ajax.js"></script> 
<?php include('./footer.php');?>