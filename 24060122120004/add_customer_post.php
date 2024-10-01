<?php
require_once('./lib/db_login.php');

// Ensure required POST parameters are set and not empty
if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['city'])) {
    
    // Prepare the SQL query using placeholders
    if ($stmt = $db->prepare("INSERT INTO customers (name, address, city) VALUES (?, ?, ?)")) {

        // Bind parameters (s for string type)
        $stmt->bind_param("sss", $_POST['name'], $_POST['address'], $_POST['city']);
        
        // Execute the query
        if ($stmt->execute()) {
            echo '<div class="alert alert-success alert-dismissible">'.
                 '<strong>Success!</strong> Data has been added.<br>'.
                 'Name: '.htmlspecialchars($_POST['name']).'<br>'.
                 'Address: '.htmlspecialchars($_POST['address']).'<br>'.
                 'City: '.htmlspecialchars($_POST['city']).'<br>'.
                 '</div>';
        } else {
            // Handle query failure
            echo '<div class="alert alert-danger alert-dismissible">'.
                 '<strong>Error!</strong> Could not add data to the database.<br>'.
                 'Error: '.$db->error.
                 '</div>';
        }
        $stmt->close(); // Close the prepared statement
    } else {
        // Handle SQL preparation error
        echo '<div class="alert alert-danger alert-dismissible">'.
             '<strong>Error!</strong> Failed to prepare the SQL statement.<br>'.
             'Error: '.$db->error.
             '</div>';
    }
    
} else {
    // Handle missing data
    echo '<div class="alert alert-danger alert-dismissible">'.
         '<strong>Error!</strong> All fields (name, address, city) are required.<br>'.
         '</div>';
}

// Close the database connection
$db->close();
?>
