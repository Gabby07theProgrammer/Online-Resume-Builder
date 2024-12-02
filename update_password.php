<?php
// Start session if needed
session_start();

// Database connection
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$id = mysqli_real_escape_string($conn, $_POST['id']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Update query
$sql = "UPDATE users SET name = '$name', email = '$email' WHERE id = '$id'";

// Execute query and check result
if (mysqli_query($conn, $sql)) {
    echo "<h3>Record updated successfully</h3>";
    echo "<a href='index.php'>Return to main page</a>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
