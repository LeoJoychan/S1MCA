<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli("localhost", "root", "", "newdb");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$user = $result->fetch_assoc();
if (password_verify($password, $user['password'])) {
$_SESSION['username'] = $user['username'];
header("Location: dashboard.php");
} else {
echo "Invalid password.";
}
} else {
echo "User not found.";
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="POST" action="">
<h2>Login</h2>
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>
</body>
</html>