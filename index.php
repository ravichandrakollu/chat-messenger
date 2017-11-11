<?php 
session_start();
if(!isset($_SESSION['username'])) {
?>
	<form name="form2" action="login.php" method="post">
		<table border="1" align="center">
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Login"></td>
			</tr>
			<tr>
				<td colspan="2"><a href="register.php">Register here to get an account</a></td>
			</tr>
		</table>
<?php
exit;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Chat Messenger</title>
<link rel="stylesheet" type="text/css" href="main.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</head>
<body>
	<form name="form1">
		<table border="1" align="center">
			<tr>
				<td>Your Chat Name:</td> 
				<td>
					<b><?php echo $_SESSION['username']; ?></b>
				</td>
			</tr>

			<tr>
				<td>Your Message: </td>
				<td>
					<textarea name="msg"></textarea>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<a href="#" onclick="submitChat()" class="button">send</a>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<a href="logout.php">Logout</a>
				</td>
			</tr>
		</table>
		<div id="imageload">
			<img src="http://www.freeiconspng.com/uploads/load-icon-png-0.png">
		</div>

		<div id="chatlogs">
		LOADING CHATLOGS PLEASE WAIT...	<img src="http://www.freeiconspng.com/uploads/load-icon-png-0.png" width="50px" height="35px">
		</div>
	</form>
</body>
</html>