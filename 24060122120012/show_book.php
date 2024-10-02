<?php include ('./header.php') ?>
<br>

<div class="card">
    <div class="card-header">Show Book Data</div>
        <div class="card-body">
            <input type="text" name="book" id="book" class="form-control" placeholder="Cari" onkeyup="searchBook(this.value)">
            <br>

            <div id="book-details">
                <table class="table">
                    <tr>
                        <td colspan="6" style="text-align: center;">
                            Lakukan Pencarian Terlebih Dahulu.
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('./footer.php') ?>