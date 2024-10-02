<!-- File: show_books.php 
  Nama   : Abisatya Hastarangga P
 NIM    : 24060122120004-->
<?php include ('./header.php') ?>

<div class="container">
    <h2>Search Books</h2>
    <input type="text" id="keywords" class="form-control" placeholder="Enter book title">
    <br>
    <button id="search" class="btn btn-primary" onclick="searchBooks(document.getElementById('keywords').value)">Search</button>
    <br><br>
    <div id="search_result"></div>
    <br>
    <div id="detail_book"></div>
</div>

<script src="ajax.js"></script> 
<?php include('./footer.php') ?>
