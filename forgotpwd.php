<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
 	<title>Responsive Login Page</title>
	<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css>
	<link rel="stylesheet" href="forgotpwd.css">
	<script> src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8" </script>
</head>
<body>
    <section class="content">
	<div class="form">
		<form class="login-form" action="" method="post" >
			<i class="fa-solid fa-circle-user"></i>
      <input class="user-input" type="text" name="Username" placeholder="Username" required>
      <p class="title" >Select Your Security Question :</p>
      <select id = "myList" onchange = "favTutorial()" name="SSQ" required>
     <!-- <option selected hidden value="">Select Security Question</option>-->
      <option value="What is Name of your Pet?">What is Name of your Pet?</option>
      <option value="What is your uncle's name?"> What is your uncle's name? </option>
      <option value="What is your favourite place to visit?"> What is your favourite place to visit? </option>
      <option value="What is your dream of becoming?"> What is your dream of becoming? </option>
      <option value="what was your nickname in childhood?"> what was your nickname in childhood? </option>
      </select>
			<input class="user-input" type="text" name="Ans" placeholder="Security Question's Answer" required>
		  <!--	<input class="user-input" type="password" name="Password" placeholder="Password" required>-->
			
      <div class="options-01">
		  </div>
			<input class="btn" type="submit" name="RESET" value="RESET PASSWORD">
			<div class="option-02">
      <p>Already Registered? <a href="index.html#login">Sign In</a></p>
			</div>
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
if(isset($_POST['RESET'])){
  
    if (isset($_POST['SSQ']) && isset($_POST['Ans'])&& isset($_POST['Username']))
      {
        $SSQ = $_POST['SSQ'];
        $Ansr = $_POST['Ans'];
        $Username = $_POST['Username'];
         
        $host = "localhost";
        $dbUsername = "abhi_mcd_user";
        $dbPassword = "qwertyuiop";
        $dbName = "mcd_app";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            if(isset($_POST['RESET'])){
              $Select = "SELECT Username FROM register WHERE Username = ? ";
              $stmt = $conn->prepare($Select);
              $stmt->bind_param("s", $Username);
              $stmt->execute();
              $stmt->bind_result($resultEmail);
              $stmt->store_result();
              $stmt->fetch();
              $rnum = $stmt->num_rows;
             // echo $Username;
            if ($rnum >= 1) {
             $Select = "SELECT SSQ FROM register WHERE SSQ = ? ";
             $stmt = $conn->prepare($Select);
             $stmt->bind_param("s", $SSQ);
             $stmt->execute();
             $stmt->bind_result($resultEmail);
             $stmt->store_result();
             $stmt->fetch();
             $rnum = $stmt->num_rows;
             if ($rnum >= 1) {
               $stmt->close();
               $sql ="SELECT Ans FROM register WHERE SSQ = '$SSQ' && Username='$Username' ";
               $result = mysqli_query($conn,$sql);
               $Ans = mysqli_fetch_all($result,MYSQLI_ASSOC);
              $pass=implode(" ",$Ans[0]);
              
               if($pass==$Ansr ){
               echo '<script>alert("RESET password")</script>';
               session_start();
 
               // Set variables
               $accountName = $Username;
               
                
               // Set session variables
               $_SESSION['accountName'] = $accountName;
               header('Location: pwdrecover.php');
              }
              else{
                    
              echo '<script>alert("Incorrect Credentials")</script>'; 
                 }

               }
            }
             
            else{
              
              echo '<script>alert("Dont have an account with this username")</script>';
            }
           // $stmt->close();
            $conn->close();
          }
        }
    }
    else {
       echo "All field are required.";
       die();
    }
}


?>