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

<html>
<head>
<style>
div {
  background-color: #FFF4A3;
  width:400px;
  height:350px;
  border-radius:20px;
  border-style:solid;
  border-width:1px;
  box-shadow:0px 0px 6px;
}
.inp{
	width=75%;
}
</style>
</head>
	<body style=background-color:grey;>
	<center>
		<div style="padding-top:70px; margin-top:100px;">
			<?php
				echo "<h3>Register</h3>"
			?>
		
		<form method="POST" action="">
			<label>Username</label><br>
			<input class="inp" style="border-radius:7px; width=75%;" type="text" name="username" required><br>
			<label>Email</label><br>
			<input class="inp" style="border-radius:7px;"type="email" name="email" required><br>
			<label>Password</label><br>
			<input class="inp" style="border-radius:7px;"type="password" name="password" required><br><br>
			<input style="background-color:green; border-radius:8px; border-width:0.5px; margin-right:120px;" type="submit" value="Submit">
		
		</form>
		</div>
	</center>
	</body>
</html>