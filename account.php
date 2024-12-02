<?php
session_start();
include 'connect.php';

// Assume the user's ID is stored in the session
$userId = $_SESSION['id']; 

// Fetch current username and email from the database
$sql = "SELECT username, email FROM users WHERE id = '$userId'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

$currentUsername = $user['username'];
$currentEmail = $user['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management</title>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Current Account Information</h2>
            <p><strong>Username:</strong> <?php echo $currentUsername; ?></p>
            <p><strong>Email:</strong> <?php echo $currentEmail; ?></p>
            <a href="User_Page.php">
            <button type="button" class="button">Back</button>
            </a>
        </div>

        <div class="form-container">
            <h2>Update Your Account</h2>
            <form action="process.php" method="POST">
                <input type="hidden" name="userId" value="<?php echo $userId; ?>">
                <input type="text" name="newUsername" placeholder="New Username" required>
                <input type="email" name="newEmail" placeholder="New Email" required>
                <input type="password" name="newPassword" placeholder="New Password" required>
                <button type="submit" name="updateUser" class="btn">Update Account</button>
            </form>
        </div>

        <div class="form-container">
            <h2>Delete Your Account</h2>
            <form action="process.php" method="POST">
                <input type="hidden" name="userId" value="<?php echo $userId; ?>">
                <button type="submit" name="deleteUser" class="btn delete-btn">Delete Account</button>
            </form>
        </div>
    </div>
</body>
</html>
