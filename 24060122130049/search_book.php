<?php include('./header.php'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Book Search</h1>
            <div class="form-group mb-3">
                <label for="keywords">Enter book title:</label>
                <!-- input keyword -->
                <input type="text" id="keywords" class="form-control" placeholder="Enter book title">
                <!-- tombol search -->
                <button id="search" class="btn btn-primary mt-3" onclick="searchBooks(document.getElementById('keywords').value)">Search</button>
            </div>

            <div id="search_result" class="mt-4">
                <table class="table table-striped">
                    <tr>
                        <td colspan="6" align="center">Search results will be displayed here...</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('./footer.php'); ?>
