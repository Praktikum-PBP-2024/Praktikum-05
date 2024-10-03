<?php
    require_once('lib/db_login.php');
    if (isset($_POST["submit"])) {
        $valid = TRUE;
        $name = test_input($_POST['name']) ?? "";

        if ($name == '') {
            $error_name = "Name is required";
            $valid = FALSE;
        } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $error_name = "Only letters and white space allowed";
            $valid = FALSE;
        }

        $address = test_input($_POST['address']);
        if ($address == '') {
            $error_address = "Address is required";
            $valid = FALSE;
        }

        $city = $_POST['city'];
        if ($city == '' || $city == 'none') {
            $error_city = "City is required";
            $valid = FALSE;
        }

        if ($valid) {
            $address = $db->real_escape_string($address);
            $query = "INSERT INTO customers (`customerid`, `name`, `address`, `city`) VALUES (NULL, '" . $name . "', '" . $address . "', '" . $city . "')";
            $result = $db->query($query);
            if (!$result) {
                die("Could not query the database: <br />" . $db->error . '<br>Query: ' . $query);
            } else {
                $db->close();
                header('Location: view_customer.php');
            }
        }
    }
?>
<?php include('./header.php'); ?>
<br>
<div class="card mt-4">
    <div class="card-header">Add Customers Data</div>
    <div class="card-body">
        <form method="GET" autocomplete="on">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php if (isset($name)) echo $name ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address"><?php if (isset($address)) echo $address ?></textarea>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <select name="city" id="city" class="form-control" required>
                <option value="Airport West">Airport West</option>
                <option value="Box Hill">Box Hill</option>
                <option value="Yarraville">Yarraville</option>
                </select>
            </div>
            <br>
            <button type="button" class="btn btn-primary" onclick="add_customer_get()">Add Customer (GET)</button>
            <button type="button" class="btn btn-secondary" onclick="add_customer_post()">Add Customer (POST)</button>
        </form>
        <br>
        <div id="add_response"></div>
    </div>
</div>
<?php include('./footer.php'); ?>
<br><br>