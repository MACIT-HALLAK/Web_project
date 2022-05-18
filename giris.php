<?php

$title = "Giriş";
require "sablon/header.php";
ob_start();
//require "sablon/navbar.php";

if (isset($_POST['submit'])) {

	include 'veritaban_conn.php';
	session_start();

	$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


	$errors = [];
	if (empty($username)) {
		$errors[] = "username bos olmaz";
	}
	if (empty($pass)) {

		$errors[] = "password bos olmaz";
	}
	if (empty($errors)) {

		$pass = md5($pass);

		$stmt = $conn->prepare("select * from users.user where username = ? and password = ?");
		$stmt->execute([$username, $pass]);
		$state = $stmt->fetch();
		$durum = $state['state'];
		$kontrol = $stmt->rowCount();
		if ($kontrol > 0) {
			echo "<div class='alert alert-success'>giris basariyla gerceklesti </div>";

			$_SESSION['username'] = $username;
			$_SESSION['giris'] = true;
			$_SESSION['id'] = $state['id'];
			$_SESSION['admin'] = $state['state'];
			
			header('location:anasayfa.php');
			
		} else {
			echo "<div class='alert alert-danger'>giris islemi basarisiz</div>";
		}
	}
}
ob_end_clean();
?>
 
<div class="dbody">
	<div class="login-box">
		<h2>Login</h2>
		<?php
		if (isset($_POST['submit'])) {
			if ($errors != "") {

				foreach ($errors as $err) {
					echo "<div class='alert alert-danger'>" . $err . " </div>";
				}
			}
			
		}

		?>
		<form method="POST">
			<div class="user-box">
				<input type="text" name="username" value="<?php if (isset($_POST['username'])) {
																echo $_POST['username'];
															} ?>">
				<label>Username</label>

			</div>
			<div class="user-box">
				<input type="password" name="password">
				<label>Password</label>

			</div>
			<a href="kayitOl.php" class="kayit-ol">kayit ol</a>
			<input class="a btn btn-primary" type="submit" name="submit" value="Submit">
			<!-- <a class="a" href="giris.php"> -->
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<!-- Submit -->
			<!-- </a> -->


		</form>
	</div>

</div>
 