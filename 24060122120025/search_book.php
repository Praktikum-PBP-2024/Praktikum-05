<!-- 
NAMA   : DIMAS YUDHA SAPUTRA
NIM    : 24060122120025
LAB    : D2
MATERI : PHP dan AJAX 
TANGGAL: 30/09/2024
-->
<?php include('./header.php')?>
<br>
<div class="container">
    <div class="card shadow-lg border-info">
        <div class="card-header bg-info text-white">
            <h4>Pencarian Data Buku</h4>
        </div>
        <div class="card-body bg-light">
            <form method="GET" autocomplete="on">
                <div class="form-group">
                    <label for="book"> Cari Buku :</label>
                    <br/>
                    <br/>
                    <input type="text" class="form-control border-info" id="book" name="book" placeholder="Masukkan judul buku" style="border-radius: 20px;">
                </div>
                <div id="detail_books" class="mt-3"></div>
                <br />
                <button type="button" class="btn btn-primary" onclick="searchBooks(book.value)" style="border-radius: 20px;">Search</button>
            </form>
        </div>
    </div>
</div>
<?php include('./footer.php')?>
