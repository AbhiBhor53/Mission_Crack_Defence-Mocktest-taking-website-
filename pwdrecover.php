<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
 , 	<title>Responsive Login Page</title>
	<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css>
	<link rel="stylesheet" href="forgotpwd.css">
	<script> src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8" </script>
</head>
<body>
	<div class="form">
		<form class="login-form" action="" method="post" >
			<i class="fa-solid fa-circle-user"></i>
			<input class="user-input" type="password" name="CNP" placeholder="Create New Password" required>
			<input class="user-input" type="password" name="CP" placeholder="Confirm Password" required>
			<div class="options-01">
				
			</div>
			<input class="btn" type="submit" name="Save" value="SAVE">
			<div class="option-02">
				<p>already have an account? <a href="login.php">login</a></p>
			</div>
		</form>
		<!--Login form end-->
	    
	</div>
	<script type="text/javascript">
		$('.option-02 a').click(function(){
			$('form').animate({
				height:"toggle",opacity:"toggle"
			},"slow");
		});
	</script>
</body>
</html>
<?php
if(isset($_POST['Save'])){
    if (isset($_POST['CP']) && isset($_POST['CNP']))
      {
        $CP = $_POST['CP'];
        $CNP = $_POST['CNP'];
       
         
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "mcd";
      //  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
       
            
       if($CP == $CNP){
        $link = mysqli_connect("localhost", "root", "", "mcd");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
 
// Echo session variables that were set on previous page
$Username= $_SESSION['accountName'];
 
// Attempt update query execution
$sql = "UPDATE register SET Password='$CP' WHERE Username='$Username' ";
if(mysqli_query($link, $sql)){
    echo'<script>alert("Your Password Updated Successfully")</script>';   
	//header('Location: login.php');
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);  
          
     }
     else{
        echo '<script>alert("Invalid credentials")</script>';   
     }
   
     
    
            
         
    }
    
}
//elseif(isset($_COOKIE['Username'])&&isset($_COOKIE['Password'])){
 //   header('Location: home.php');
//}


?>
