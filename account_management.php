<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

// Get user data
$user_id = $_SESSION['id'];
$sql = "SELECT username, email FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Account Management</title>
    <link rel="stylesheet" type="text/css" href="WebsiteStyle.css">
</head>
<body>
    <div class="container">
        <h2>Account Management</h2>
        
        <div class="user-info">
            <h3>Current Account Information</h3>
            <p>Username: <?php echo htmlspecialchars($user['username']); ?></p>
            <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
        </div>

        <div class="update-form">
            <h3>Update Account Information</h3>
            <form method="POST" action="account_process.php">
                <input type="hidden" name="action" value="update">
                <div class="form-group">
                    <label>New Username:</label>
                    <input type="text" name="new_username" value="<?php echo htmlspecialchars($user['username']); ?>">
                </div>
                <div class="form-group">
                    <label>New Email:</label>
                    <input type="email" name="new_email" value="<?php echo htmlspecialchars($user['email']); ?>">
                </div>
                <div class="form-group">
                    <label>Password (for confirmation):</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="btn-update">Update Account</button>
            </form>
        </div>

        <div class="delete-account">
            <h3>Delete Account</h3>
            <form method="POST" action="account_process.php" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
                <input type="hidden" name="action" value="delete">
                <div class="form-group">
                    <label>Password (for confirmation):</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="btn-delete">Delete Account</button>
            </form>
        </div>
    </div>
</body>
</html>