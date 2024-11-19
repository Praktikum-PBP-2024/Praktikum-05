<!-- Nama       : Aditya Haidar Faishal -->
<!-- NIM        : 240601212130049 -->
<!-- Lab        : D2 -->
<!-- Tanggal    : 1 Oktober 2024-->
<!-- Deskripsi  : membuat program berbasis PHP dengan bantuan AJAX-->

<?php include('./header.php'); ?>

    <div class="card" style="margin-top: 50px;">
    <div class="card-header" style="font-size: 1.3em; font-weight: bold; text-align: center;">Pencarian Buku</div>
    <div class="card-body" >

        <form id="searchForm" onsubmit="return false;">
            <input type="text" id="keywords" name="keywords" class="form-control" placeholder="Masukkan judul buku" required>
            <br>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary">Cari Buku</button>
                </div>
        </form>
        
        <br>
        <div id="search_result"></div> 
    </div>
</div>

<script src="ajax.js"></script>
<?php include('./footer.php'); ?>