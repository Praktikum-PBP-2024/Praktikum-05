<!--File : show_customer.php
Deskripsi : menampilkan data customers
-->

<?php include ('./header.php') ?>
<br>
<div class="card">
    <div class="card-header">Show Books Data</div>
        <div class="card-body">

            <input type="text" name="books" id="book" class="form-control" placeholder="Enter Book Title" onkeyup="searchBooks(this.value)">
            <br>
        <div id="book-details">
            <table class="table table-striped"><tr><td colspan="6" align="center">Nothing to see here.</td></tr></table>
        </div>
    </div>
</div>
<?php include('./footer.php') ?>