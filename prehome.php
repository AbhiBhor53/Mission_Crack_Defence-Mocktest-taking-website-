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
		 echo $count;
      if($count == 1) {
          echo'Success';
        
        
      }else {
            echo'failed';
         $error = "Your Login Name or Password is invalid";
      }
    }
}
      }
    }
?>