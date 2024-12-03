<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['id'];
$action = $_POST['action'] ?? '';
$password = $_POST['password'] ?? '';

// Verify password first
$verify_sql = "SELECT password FROM users WHERE id = ?";
$verify_stmt = $conn->prepare($verify_sql);
$verify_stmt->bind_param("i", $user_id);
$verify_stmt->execute();
$result = $verify_stmt->get_result();
$user = $result->fetch_assoc();

if (!password_verify($password, $user['password'])) {
    $_SESSION['error'] = "Invalid password";
    header("Location: account_management.php");
    exit();
}

if ($action === 'update') {
    $new_username = $_POST['new_username'] ?? '';
    $new_email = $_POST['new_email'] ?? '';
    
    // Validate inputs
    if (empty($new_username) || empty($new_email)) {
        $_SESSION['error'] = "Username and email cannot be empty";
        header("Location: account_management.php");
        exit();
    }
    
    // Update user information
    $update_sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("ssi", $new_username, $new_email, $user_id);
    
    if ($update_stmt->execute()) {
        $_SESSION['success'] = "Account updated successfully";
    } else {
        $_SESSION['error'] = "Error updating account";
    }
    
} elseif ($action === 'delete') {
    // Delete user account
    $delete_sql = "DELETE FROM users WHERE id = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $user_id);
    
    if ($delete_stmt->execute()) {
        session_destroy();
        header("Location: index.php?msg=account_deleted");
        exit();
    } else {
        $_SESSION['error'] = "Error deleting account";
    }
}

header("Location: account_management.php");
exit();
?>