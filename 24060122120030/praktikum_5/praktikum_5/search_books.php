<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="ajax.js"></script>
</head>
<body>

    <!-- Container for the book search -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Search Books</div>
                    <div class="card-body">
                        <!-- Input field for book title -->
                        <div class="mb-3">
                            <label for="keywords" class="form-label">Book Title</label>
                            <input type="text" class="form-control" id="keywords" placeholder="Enter book title" onkeyup="searchBooks(this.value)">
                        </div>

                        <!-- Search result will be displayed here -->
                        <div id="search_result">
                            <table class="table table-striped">
                                <tr>
                                    <td colspan="4" align="center">Start typing to search for a book...</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>