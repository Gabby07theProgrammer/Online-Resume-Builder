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
            header("Location: LandingPage.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

function function_alert($message) {
    echo "<script>
    alert('$message');
    window.location.href = 'LandingPage.php';
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
        header("Location: homepage.php");
        exit();
    } else {
        function_alert("Email or password not found");
    }
}
?>
