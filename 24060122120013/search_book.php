<!-- Nama       : Rania -->
<!-- NIM        : 24060122120013 -->
<!-- Lab        : D2 -->
<!-- Tanggal    : 28 September 2024 -->
<!-- File       : search_book.php -->

<?php include('./header.php'); ?>
    <div class="card" style="margin-top: 50px;">
    <div class="card-header" style="font-size: 1.3em; font-weight: bold;">Show Book Detail</div>
    <div class="card-body" >
        <!-- Form input untuk pencarian buku -->
        <form id="searchForm" onsubmit="return false;">
            <input type="text" id="keywords" name="keywords" class="form-control" placeholder="Masukkan judul buku" required>
            <br>
            <button type="button" id="search" class="btn btn-primary" onclick="searchBooks(document.getElementById('keywords').value)">Cari Buku</button>
        </form>
        
        <br>
        <div id="search_result"></div> 
    </div>
</div>

<script src="ajax.js"></script>
<?php include('./footer.php'); ?>
