
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
  	<title>Responsive Login Page</title>
      <link rel="icon" href="logo2.png" type="image/gif/png">
	<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css>
	<link rel="stylesheet" href="loginx.css">
	<script> src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8" </script>
    
</head>
<body>
    <section class="loginx">
	<div class="form">
		<form class="login-form" action="Exams.php" method="POST" >
			<i class="fa-solid fa-circle-user"></i>
			<input class="user-input" type="text" name="Username" placeholder="Username" required>
			<input class="user-input" type="password" name="Password" placeholder="Password" required>
			<div class="options-01">
				<label class="remember-me"><input type="checkbox" name="">Remember me</label>
				<a href="forgotpwd.php">Forgot Password?</a>
			</div>
			<input class="btn" type="submit" name="Login" value="LOGIN">
			<div class="option-02">
				<p>Not Registered? <a href="Register.php">Create an Account</a></p>
			</div>
		</form>
        <?php
        session_start();
 
// Set variables
$accountName = $Username;

 
// Set session variables
$_SESSION['accountName'] = $accountName;
    ?>
		<!--Login form end-->
	   
	</div>
</section>
	<script type="text/javascript">
		$('.option-02 a').click(function(){
			$('form').animate({
				height:"toggle",opacity:"toggle"
			},"slow");
		});
	</script>
</body>
</html>
