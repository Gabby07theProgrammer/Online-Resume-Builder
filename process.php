<?php
session_start();
include 'connect.php';

// Get the user ID from the session or from the form submission
$userId = $_SESSION['user_id']; // Use consistent session variable name

// Update user account
if (isset($_POST['updateUser'])) {
    $newUsername = $_POST['newUsername'];
    $newEmail = $_POST['newEmail'];
    $newPassword = $_POST['newPassword'];

    // Hash the new password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Update query
    $stmt = $conn->prepare("UPDATE users SET username=?, email=?, password=? WHERE id=?");
    $stmt->bind_param("sssi", $newUsername, $newEmail, $hashedPassword, $userId);

    if ($conn->query($sql) === TRUE) {
        session_regenerate_id(true);
        // Redirect back to account page after update
        header('Location: account.html');
        exit();
    } else {
        echo "Error updating account: " . $conn->error;
    }
}

// Delete user account
if (isset($_POST['deleteUser'])) {
    // Delete query
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $userId);

    if ($conn->query($sql) === TRUE) {
        echo "Account deleted successfully!";
        // Redirect to a page after account deletion (e.g., logout page)
        header('Location: login.html');
        exit();
    } else {
        echo "Error deleting account: " . $conn->error;
    }
}

?>
