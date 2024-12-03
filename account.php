<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['username'])) {
    header('Location: User_Page.php');
    exit();
}

$userId = $_SESSION['id'];
$stmt = $conn->prepare("SELECT id FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if (!$result->fetch_assoc()) {
    session_destroy();
    header('Location: lUser_Page.php');
    exit();
}

header('Location: account.html');
exit();
?>