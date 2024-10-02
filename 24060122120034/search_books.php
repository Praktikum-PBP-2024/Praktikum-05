<?php include('./header.php') ?>
<div class="row w-50 mx-auto mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">Search Book Data</div>
            <div class="card-body">
                <input type="text" id="searchKeywords" class="form-control" placeholder="Search by Title" onkeyup="searchBooks(this.value)">
                <br>
                <div id="search_result"></div>
            </div>
        </div>
    </div>
</div>
<?php include('./footer.php') ?>
