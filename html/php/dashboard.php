<?php
session_start();
if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">Logout</a>
</body>
</html>