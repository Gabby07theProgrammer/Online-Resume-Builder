<?php
session_start();
include 'connect.php';

// Get the user ID from the session or from the form submission
$userId = $_SESSION['id']; // Replace `1` with dynamic user session if needed

// Update user account
if (isset($_POST['updateUser'])) {
    $newUsername = $_POST['newUsername'];
    $newEmail = $_POST['newEmail'];
    $newPassword = $_POST['newPassword'];

    // Hash the new password
    $hashedPassword = md5($newPassword); // Simple example, consider using password_hash() for better security

    // Update query
    $sql = "UPDATE users SET username='$newUsername', email='$newEmail', password='$hashedPassword' WHERE id='$userId'";

    if ($conn->query($sql) === TRUE) {
        echo "Account updated successfully!";
        // Redirect back to account page after update
        header('Location: account.php');
        exit();
    } else {
        echo "Error updating account: " . $conn->error;
    }
}

// Delete user account
if (isset($_POST['deleteUser'])) {
    // Delete query
    $sql = "DELETE FROM users WHERE id='$userId'";

    if ($conn->query($sql) === TRUE) {
        echo "Account deleted successfully!";
        // Redirect to a page after account deletion (e.g., logout page)
        header('Location: logout.php');
        exit();
    } else {
        echo "Error deleting account: " . $conn->error;
    }
}

?>
