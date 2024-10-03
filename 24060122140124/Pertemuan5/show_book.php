<?php include('./header.php'); ?>

<div class="card my-4">
  <div class="card-header">Cari Buku</div>
  <div class="card-body">
      <div class="mb-3">
        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Masukkan Judul Buku">
      </div>
      <div class="d-flex flex-column gap-3" id="search_result"></div>
  </div>
</div>

<?php include('./footer.php'); ?>
<script src="ajax.js"></script>