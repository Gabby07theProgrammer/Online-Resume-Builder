<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        function_alert("Email Address Already Exists !");
    } else {
        $insertQuery = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

function function_alert($message) {
    echo "<script>
    alert('$message');
    window.location.href = 'index.php';
    </script>";
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: User_Page.php");
        exit();
    } else {
        function_alert("Email or password not found");
    }
}

if (isset($_POST['update_password'])) {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $new_password = md5($new_password);

    // Validate input
    if (empty($email) || empty($new_password)) {
        die("Email and new password are required.");
    }

    // Update the password in plaintext (NOT secure)
    $updateQuery = "UPDATE users SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("ss", $new_password, $email);

    if ($stmt->execute()) {
        echo "Password updated successfully!";
        header("Location: index.php");
    } else {
        echo "Error updating password: " . $stmt->error;
    }
}


if (isset($_POST['delete'])) {
    $email = $_POST['email'];

    $deleteQuery = "DELETE FROM users WHERE email = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        function_alert("Account deleted successfully!");
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
