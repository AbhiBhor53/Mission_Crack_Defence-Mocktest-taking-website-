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
          <!doctype html>
<html>
    <head>
    <title>Mission Crack Defence</title>
    <link rel="icon" href="logo2.png" type="image/gif/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="newstyle.css">
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                   <li><a href="#shop-title">Shop</a</li>
                  
                   <li><a href="loginxam.php">MyExams</a</li>
                   <li><a href="#footer">get connected</a</li>
                </ul>
                <a  class="logbtn" href="index.php">LogOut / SignOut</a>        
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
               
                <button class="tagbtn" onclick= "location.href='home.php#shop-title'">Buy MOCKTESTS</button>
            </div>
        </section>
        <section class="shop-title"id="shop-title">
        <div >              
                
               
                <div class="shop-head">
                
                    <h2>SHOP</h2>
                    
                </div>
            </div>

        </section>
        <section class="cart" id="section2">
       
       

            
            
           
            <div class="shop">
            <img src ="5.PNG">
                <div class="shop-text">

                    <h5>SSB-OIR</h5>
                    <p>Consists of 1 Set of mocktests with verbal and non-verbal tests </p>
                    <h5>1.0 ₹</h5>
                    <button type="button" class="abt-text-btn" onclick="location='https://rzp.io/l/ffNRSUS'">Checkout</button>
                </div>
                
            </div>
            <br>
            <br>
            <br>
               
            <div class="shop">
                <img src ="1.PNG">
                <div class="shop-text">
                
                    <h5>NDA</h5>
                    <p>Consists of 3 Sets of mocktests on the grounds of previous year question paper with full analysis as to where candidate has to improve at  </p>
                    <h5>99.0 ₹</h5>
                    
                    <button type="button" class="abt-text-btn" onclick="location ='https://rzp.io/l/c2seg2BVu'">Checkout</button>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="shop">
            <img src ="2.PNG">
                <div class="shop-text">

                    <h5>CDS-IMA</h5>
                    <p>Consists of 3 Sets of mocktests on the grounds of previous year question paper with full analysis as to where candidate has to improve at </p>
                    <h5>149.0 ₹</h5>
                    <button type="button" class="abt-text-btn" onclick="location ='https://rzp.io/l/MdROe7liQx'">Checkout</button>
                </div>
                
            </div>
            <br>
            <br>
            <br>
            <div class="shop">
            <img src ="3.PNG">
                <div class="shop-text">

                    <h5>AFCAT</h5>
                    <p>Consists of 3 Sets of mocktests on the grounds of previous year question paper with full analysis as to where candidate has to improve at </p>
                    <h5>49.0 ₹</h5>
                    <button type="button" class="abt-text-btn" onclick="location ='https://rzp.io/l/NrhysqZgBc'">Checkout</button>
                </div>
                
            </div>
            <br>
            <br>
            <br>
            <div class="shop">
            <img src ="4.PNG">
                <div class="shop-text">

                    <h5>CDS-OTA</h5>
                    <p>Consists of 3 Sets of mocktests on the grounds of previous year question paper with full analysis as to where candidate has to improve at </p>
                    <h5>99.0 ₹</h5>
                    <button type="button" class="abt-text-btn" onclick="location ='https://rzp.io/l/QfDDyklMd'">Checkout</button>
                </div>
                
            </div>
            
        </section>
        <section class="about" id="section2">
            <div class="main">
               
                <div class="about-text">
                    <h2>About Us</h2>
                    <h5>Mission cra<span>ck Defence</span></h5>
                    <p>We Mission Crack Defence moving forward with the aim of assisting Indian armed Forces aspirants to achieve their dream of becoming an armed forces officer with flying colours herewith we provide the mock test series of AFCAT, NDA, CDS and OIR with advanced software at minimum price, you will get analysis of your performance right after exam which will help aspirant to boost his preparation.Every year there are lakhs of aspirants who apear for some and other kind of defence exam if you want to stand out of crowd then you must have something plus in you and we Mission Crack Defence come up with the highly specialized tools and time tested techniques to not just make you clear the written test but clearing with flying colours. so that the threat of getting merit out will be metigated, we provide 3 mock test series of NDA & CDS-OTA on the grounds of previous year question paper for Rs.99 with analysis which is very cheap as far as utility of software and experience of giving exam is concerned. we provide 3 mock tests series of CDS-IMA for RS.149 on the grounds of previous year question papers. also we have 3 mock tests series for afcat aspirants for only RS.49. But hold on this is nothing because we have something very special for all SSB aspirants from Team Mission Crack Defence that is 3 OIR test series with verbal and non-verbal questions for only RS.1. yes For only RS.1 !</p>
                    <button type="button" class="abt-text-btn" onclick=" mail()">Let's Talk</button>
                </div>
                <img src ="myimg.jpg">
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
   

               
             

