<html>
    <head>
    <title>Mission Crack Defence</title>
    <link rel="icon" href="logo2.png" type="image/gif/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="demostyle.css">
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
      <section class="header">
            <nav>
                <ul class="logo">
                <li> <img src="logo2.png"></li>
                <li><h1>MISSION <br>CRA<span>CK DEFENCE</span></h1></li>
                </ul>
                <ul>
                   <li><a href="#">Home</a</li>
                   <li><a href="#">Shop</a</li>
                   <li><a href="#">Blog</a</li>
                   <li><a href="#">MyExams</a</li>
                   <li><a href="#footer">get connected</a</li>
                </ul>
                <a  class="logbtn" href="index.php#login">REGISTER / LOGIN</a>        
                </nav>
            <div class="taglin">
                <a>Dare To Dream Big ! 
                <br>Yes<span> You Dared !</span>  <br>
                Now Its Time ! <br>Take You Close To<span>  Your Dream !</span></a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <button class="tagbtn"onclick= "location.href='index.php#login'">Buy MOCKTESTS</button>
            </div>
        </section>
        
	<!------Course---->
	<section class="blog-comment" id="section2">
		<?php
                                                               
				$con=mysqli_connect('localhost','abhi_mcd_user','qwertyuiop','mcd_app');
				if($con){
					//echo "coonection done";

				}else{
					echo 'connection fail';
				}
				$sel="SELECT * FROM 'post_tbl' ";
				//Retrieving the contents of the table
   $res = mysqli_query($con, "SELECT * FROM post_tbl ");

   //Fetching all the rows as objects
   while($row = mysqli_fetch_assoc($res)){
				

					// code...

					?>
					<br>
					<br>
					<div class="blg-cmt">
			 <table>
			 <tr>
             <td rowspan="2"><i class="fa fa-user-circle" aria-hidden="true"></i></td>
             <td class="td-name"><?php echo $row['Name'] ;?></td>
             </tr>
             <tr>
             <td><?php echo $row['Prof'] ?></td>
             </tr>
             </table>
        <h1><?php echo $row['Head']; ?></h1>
		<p><?php echo $row['Content'];?></p>
		<?php 
	}
	?>

			
		</div>
					
				     	
				     	
		
	</section>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div class="comment">
		<form action="" method="post" class="post-content">

			<p><i class="fa fa-user-circle" aria-hidden="true"></i><span><input  size="50" class="in-nm" type="text" name="Name" placeholder="Enter Name"></span></p>
			<p><i class="fa fa-briefcase" aria-hidden="true"></i><span><input size="50" class="in-pr"  type="text" name="Profession" placeholder="Enter Profession"></span></p>
			<p><i class="fa fa-header" aria-hidden="true"></i><span><input size="50" class="in-pr"  type="text" name="Title" placeholder="Enter Title"></span></p>
			
			<p><span><textarea name="Content" cols="100" rows="10" placeholder="Add Post"></textarea></span></p>
	     		
		
		
		<input class="cmtbtn" type="submit" name="post" value="Submit">
	</form >
	</div>
	</section>
        
        
        <section id="footer">
            <footer>
                <p>STAY<span> TUNED</span></p>
                <p>for more updates get connected</p>
                 <div class="social">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-linkedin"></i></a>
                 </div>
                 <p class="end">Copyright &copy By Abhishek Bhor</p>
            </footer>
        </section>

     

    

    </body>
</html>


	