<?php include 'config.php';
	include 'user.php';
?>
<?php
	if($_SERVER['REQUEST_METHOD'] == "GET") {
		$uName = $_GET['uname'];
		$pw = $_GET['pw'];
		$code = $_GET['code'];
		$email = $_GET['email'];

		$user = new User($uName, $pw);
		$user->email = $email;
		$user->register($db);
	}
	else if($_SERVER['REQUEST_METHOD'] == "POST"){
		$uName = $_POST['uname'];
		$pw = $_POST['pw'];
		$email = $_POST['email'];
		$code = $_POST['code'];

		$user = new User($uName, $pw);
		$user->email = $email;
		$user->register($db);
	}
?>
