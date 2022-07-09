<?php 

include 'includes/config.php';

session_start();

error_reporting(0);

// if (isset($_SESSION['username'])) {
//     header("Location: admin/index.php");
// }

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM farmers WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['farmer_id'] = $row['farmer_id'];
		$_SESSION['name'] = $row['name'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a3af999ee0.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
			body {
			width: 100%;
			min-height: 100vh;
			background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('../images/farm.jpg');
			background-position: center;
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
			}
</style>
	<title>MAIS - Farmer's Login</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 700;">Login as Farmer</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
				<!-- <a href="admin/index.php" class="btn"> Login</a> -->
			</div>
			<!-- <p class=" align-center"> Don't have an account? Register  <a href="register.php">here</a></p> -->
			<p class="login-register-text pt-5"> <i class="fa-solid fa-angle-left"></i> <a href="/agri/index.php">Back</a>  </p>
			

		</form>
	</div>
</body>
</html>