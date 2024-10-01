
<?php include('./header.php') ?>

<div class="row w-50 mx-auto mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">Cari Judul Buku</div>
            <div class="card-body">
                <form action="" method="GET" class="mb-4">
                    <input type="text" id="search" placeholder="Masukkan judul buku" class="px-3 py-2">
                </form>
                <div id="searchResult"></div>
            </div>
        </div>
    </div>
</div>

<?php include('./footer.php') ?>