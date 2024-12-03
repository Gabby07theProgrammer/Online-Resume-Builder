<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update and Delete User</title>
</head>
<body>
    <div class="container">
        <h1>Manage Account</h1>
        <h2>Update Password</h2>
        <form action="register.php" method="POST">
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="new_password" placeholder="Enter New Password" required>
            <button type="submit" name="update_password">Update Password</button>
        </form>
        <form action="register.php" method="POST">
            <h2>Delete Account</h2>
            <input type="email" name="email" placeholder="Enter Email" required>
            <button type="submit" name="delete">Delete Account</button>
        </form>

        <button type="button" onclick="window.location.href='index.php'" class="button">Back</button>
    </div>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 90%;
    max-width: 400px;
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
}

h1, h2 {
    margin: 10px 0;
    color: #444;
}

form {
    margin-bottom: 20px;
}

input {
    width: 95%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background-color: #0056b3;
}

h2 {
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
    margin-bottom: 15px;
    color: #666;
}
</style>