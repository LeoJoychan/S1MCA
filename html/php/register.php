<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$conn = new mysqli("localhost", "root", "", "newdb");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email',
'$password')";
if ($conn->query($sql) === TRUE) {
echo "Registration successful!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="POST" action="">
<h2>Register</h2>
<input type="text" name="username" placeholder="Username" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Register</button>
</form>
</body>
</html>