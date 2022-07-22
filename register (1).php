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
                   <li><a href="#">Shop</a</li>
                   <li><a href="#">Blog</a</li>
                   <li><a href="#">MyExams</a</li>
                   <li><a href="#footer">get connected</a</li>
                </ul>
                <a  class="logbtn" href="#Register">REGISTER / LOGIN</a>        
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
                <button class="tagbtn">Buy MOCKTESTS</button>
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
        <section class="Register" id="Register">
            <div class="form">
                <form class="login-form" action="" method="post" >
                    <i class="fa-solid fa-circle-user"></i>
              <input class="user-input" type="text" name="Name" placeholder="Name" required>
              <input class="user-input" type="text" name="Email" placeholder="Email" required>
                    <input class="user-input" type="text" name="Username" placeholder="Username" required>
                    <input class="user-input" type="password" name="Password" placeholder="Password" required>
              <select id = "myList" onchange = "favTutorial()" name="SSQ" required>
             <!-- <option selected hidden value="">Select Security Question</option>-->
              <option value="What is Name of your Pet?">What is Name of your Pet?</option>
        <option value="What is your uncle's name?"> What is your uncle's name? </option>
        <option value="What is your favourite place to visit? "> What is your favourite place to visit? </option>
        <option value="What is your dream of becoming?"> What is your dream of becoming? </option>
        <option value=" what was your nickname in childhood?"> what was your nickname in childhood? </option>
        </select>
        <input class="user-input" type="text" name="Ans" placeholder="Security Question's Answer" required>
                    <div class="options-01">
                        <label class="remember-me"><input type="checkbox" name="">Remember me</label>
                        <a href="forgotpwd.php">Forgot Password?</a>
                    </div>
                    <input class="btn" type="submit" name="signup" value="SIGN UP">
                    <div class="option-02">
                        <p>Registered Already? <a href="index.php">login to Account</a></p>
                    </div>
                </form>
                <!--Login form end-->
                
        
                </form>
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
if (isset($_POST['signup'])) {
    
      
         $Name = $_POST['Name'];
         $Username = $_POST['Username'];
         $Email = $_POST['Email'];
         $Password=$_POST['Password'];
         $SSQ=$_POST['SSQ'];
         $Ans=$_POST['Ans'];
         
       
        
 

        $host = "localhost";
        $dbUsername = "abhi_mcd_user";
        $dbPassword = "qwertyuiop";
        $dbName = "mcd_app";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            echo"Could not connect to the database.";
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(Name,Username,Email,Password,SSQ,Ans) values(?, ?,?,?,?,?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssss",$Name,$Username,$Email, $Password,$SSQ,$Ans);
             

                if ($stmt->execute()) {
                    
                  echo '<script>alert("Registerd successfully")</script>'; 
                    
                    
                }
                else {
                    echo $stmt->error;
                }
               }
              
            }
            
            $stmt->close();
            $conn->close();
        }
    
    else {
       // echo "All field are required.";
        die();
    }


?>