<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$con = mysqli_connect('localhost', 'root', 'root', 'chatbox_db');

$result = $con->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($result)) {
	$res = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$_SESSION['username'] = $res['username'];
	echo "<center>";
	echo "You are now Login. click <a href='index.php'>here</a> to go back to main chat window";
	echo "</center>";
}
else {
	echo "<center>";
	echo "No User found. Please go <a href='index.php'>back</a> and enter the correct login.<br>";
	echo "You may register a new account by clicking <a href='register.php'>here</a>";
	echo "</center>";
}

?>