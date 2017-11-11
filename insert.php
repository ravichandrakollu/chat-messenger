<?php 
session_start();
$uname = $_SESSION['username'];
$msg = $_REQUEST['msg'];

$con = mysqli_connect('localhost', 'root', 'root', 'chatbox_db');


$con->query("INSERT INTO logs (`username`, `msg`) VALUES ('$uname', '$msg')");

$result = $con->query("SELECT * FROM logs ORDER by id DESC");

while($extract = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo "<span class='uName'>". $extract["username"] . "</span>: <span class='msg'>" . $extract["msg"]. "</span><br>";
}

?>