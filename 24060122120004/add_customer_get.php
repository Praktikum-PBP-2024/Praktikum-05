<?php
require_once('./lib/db_login.php');

// Check if the required GET parameters are set
$name = isset($_GET['name']) ? $_GET['name'] : '';
$address = isset($_GET['address']) ? $_GET['address'] : '';
$city = isset($_GET['city']) ? $_GET['city'] : '';

// Make sure the parameters are not empty before proceeding
if (empty($name) || empty($address) || empty($city)) {
    echo '<div class="alert alert-danger alert-dismissible">'.
         '<strong>Error!</strong> Name, address, and city are required.<br>'.
         '</div>';
} else {
    // Use prepared statements to avoid SQL injection
    if ($stmt = $db->prepare("INSERT INTO customers (name, address, city) VALUES (?, ?, ?)")) {
        // Bind parameters
        $stmt->bind_param("sss", $name, $address, $city);

        // Execute the query
        if ($stmt->execute()) {
            echo '<div class="alert alert-success alert-dismissible">'.
                 '<strong>Success!</strong> Data has been added.<br>'.
                 'Name: '.htmlspecialchars($name).'<br>'.
                 'Address: '.htmlspecialchars($address).'<br>'.
                 'City: '.htmlspecialchars($city).'<br>'.
                 '</div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible">'.
                 '<strong>Error!</strong> Could not add data to the database.<br>'.
                 'Error: '.$db->error.
                 '</div>';
        }
        $stmt->close(); // Close the prepared statement
    } else {
        echo '<div class="alert alert-danger alert-dismissible">'.
             '<strong>Error!</strong> Failed to prepare the SQL statement.<br>'.
             'Error: '.$db->error.
             '</div>';
    }
}

// Close the database connection
$db->close();
?>
