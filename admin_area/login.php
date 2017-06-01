<?php
@session_start();

include('includes/db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<div>
	<form action="" method="post">
		<div>
			<input type="text" name="user_email" placeholder="Email" class="lg" />
		</div>
		<div>
			<input type="password" name="user_pass" placeholder="Password" class="lg" />
		</div>
		<div style="margin: 10px;">
			<input type="submit" name="login" class="btn" />
		</div>
	</form>

	<?php
		$user_email = @$_POST['user_email'];
		$user_pass  = @$_POST['user_pass'];
		$login = @$_POST['login'];

		if ($login) {
			if ($user_email == "" || $user_pass == "") {
				?> <script type='text/javascript'>alert('Username / Password Tidak boleh kosong');</script> <?php
			}else{
				$log_pro = "SELECT * FROM admins WHERE user_email='$user_email' AND user_pass=md5('$user_pass')";
				$check_pro = mysqli_query($con, $log_pro);
				$get_log   = mysqli_fetch_array($check_pro);
				$run_log  = mysqli_num_rows($check_pro);
				if ($run_log >=1) {
					                header('Location: index.php');
				}else{
					echo "Login Failed";
				}
			}
		}
	?>
</div>

</body>
</html>