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
          ?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My exams</title>
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
         <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="logo2.png" type="image/gif/png">


 
	</head>
	<body>
		                                   
		<div class="container">
       <br>
		<br>
      
		<h1>My Mocktests</h1>
		<br>
		<br>
			<table class= "table table-bordered">
			<thead>
				<tr>
					<th>sr</th>
					<th>Exam1</th>
					<th>Exam2</th>
					<th>Exam3</th>

				</tr>
			</thead>
			<tbody>
				<?php
                 // Start the session
                  session_start();
 
                // Echo session variables that were set on previous page
                 $user= $_SESSION['accountName'];
                                                                      

				$c=1;
				$con=mysqli_connect('localhost','abhi_mcd_user','qwertyuiop','mcd_app');
				if($con){
					//echo "coonection done";

				}else{
					echo 'connection fail';
				}
				$sel="SELECT * FROM `ordertbl` WHERE Username='$Username'";
			    $query=$con->query($sel);
				while ($row=$query->fetch_assoc()) {
					// code...

					?>
					<tr>
						
						<td> <?php echo $c++?></td>
				     	
				     	<?php
						if($row['Exam1']=='NDA 1 2020'){
						?>
						<td><a href="viewtestnda12020.php"><?php echo $row['Exam1'];?></a></td>
						<td><a href="viewtestnda22020.php"><?php echo $row['Exam2'];?></td>
						<td><a href="viewtestnda12021.php"><?php echo $row['Exam3'];?></td>
						<?php
				      	}
				      	elseif($row['Exam1']=='CDS IMA 1 2020'){
						?>
						<td><a href="viewtestima12020.php"><?php echo $row['Exam1'];?></a></td>
						<td><a href="viewtestima22020.php"><?php echo $row['Exam2'];?></td>
						<td><a href="viewtestima12021.php"><?php echo $row['Exam3'];?></td>
						<?php
				      	}
                        elseif($row['Exam1']=='CDS OTA 1 2020'){
						?>
						<td><a href="viewtestota12020.php"><?php echo $row['Exam1'];?></a></td>
						<td><a href="viewtestota22020.php"><?php echo $row['Exam2'];?></td>
						<td><a href="viewtestota12021.php"><?php echo $row['Exam3'];?></td>
						<?php
				      	}
				      	elseif($row['Exam1']=='AFCAT 1 2020'){
						?>
						<td><a href="viewtestafcat1.php"><?php echo $row['Exam1'];?></a></td>
						<td><a href="viewtestafcat2.php"><?php echo $row['Exam2'];?></td>
						<td><a href="viewtestafcat3.php"><?php echo $row['Exam3'];?></td>
						<?php
				      	}
				      	else{
						?>
						<td><a href="#"><?php echo $row['Exam1'];?></a></td>
						<td><a href="#"><?php echo $row['Exam2'];?></td>
						<td><a href="viewtestoir3.php"><?php echo $row['Exam3'];?></td>
						<?php
				      	}
				      	?>
					</tr>
					<?php
				}
				?>

			</tbody>
			</table>
		</div>


	
	</body>
	</html>
<?php 
      
      }else {
            echo'failed';
         $error = "Your Login Name or Password is invalid";
      }
    }
}
      }
    }
?>