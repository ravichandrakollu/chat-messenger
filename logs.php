<?php 
$con = mysqli_connect('localhost', 'root', 'root', 'chatbox_db');

$result = $con->query("SELECT * FROM logs ORDER by id DESC");

while($extract = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo "<span class='uname'>". $extract["username"] . "</span>: <span class='msg'>" . $extract["msg"]. "</span><br>";
}

?>