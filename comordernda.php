
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
 , 	<title>Responsive Login Page</title>
	<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css>
	<link rel="stylesheet" href="loginx.css">
	<script> src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8" </script>
</head>
<body>
    <section class="loginx">
	<div class="form">
		<form class="login-form" action="" method="post" >
			<i class="fa-solid fa-circle-user"></i>
			<input class="user-input" type="text" name="Username" placeholder="Username" required>
			<input class="user-input" type="password" name="Password" placeholder="Password" required>
			
			<input class="btn" type="submit" name="Login" value="CONFIRM">
			
		</form>
		<!--Login form end-->
	    <!--Sign Up from starts-->
	    
	</div>
	<script type="text/javascript">
		$('.option-02 a').click(function(){
			$('form').animate({
				height:"toggle",opacity:"toggle"
			},"slow");
		});
	</script>
    </section>
</body>
</html>
<?php
if(isset($_POST['Login'])){
    if (isset($_POST['Username']) && isset($_POST['Password']))
      {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
         
        $host = "localhost";
        $dbUsername = "abhi_mcd_user";
        $dbPassword = "qwertyuiop";
        $dbName = "mcd_app";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            if(isset($_POST['Login'])){
              $sql = "SELECT id FROM register WHERE Username = '$Username' and Password = '$Password'";
      $result = mysqli_query($conn,$sql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
     
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
                     
                    
                    sleep(1);
                    $Username=$Username;
                    $Exam1="NDA 1 2020";
                    $Exam2="NDA 2 2020";
                    $Exam3="NDA 3 2021";
                    $query="insert into ordertbl(Username,Exam1,Exam2,Exam3)values('$Username','$Exam1','$Exam2','$Exam3')";
                    $run=mysqli_query($conn,$query)or die(mysqli_error());
                    if($run){

                ?>  <script>
    window.location.href ='loginxam.php';
            </script>
            <?php
                 
               
      
      }
      }else {
            echo'failed';
         $error = "Your Login Name or Password is invalid";
      }
    }
}
      }
    }
?>
   