<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}

$userId = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT id FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if (!$result->fetch_assoc()) {
    session_destroy();
    header('Location: login.html');
    exit();
}

header('Location: account.html');
exit();
?>