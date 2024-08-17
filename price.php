<?php 
session_start();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLab</title>
    <link rel="stylesheet" href="pricestyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

    <!-- header section start -->
    <div class="header">
        <div class="logo"><h1>FitLab</h1></div>
        <div class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="price.php">Pricing</a></li>
                <li><a href="personal_trainer.php">Personal Trainee</a></li>
				<li><a href="booking.php">Book</a></li>

				<?php if (isset($_SESSION['email'])): ?>
                    <li><a href="#" class=""><i class="fas fa-user"></i> <?php echo $_SESSION['first_name']; ?></a></li>
                    <li><a href="logout.php" class="login_btn">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="login_btn">Login</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
    <!-- header section ends -->
    
    <!-- content section starts -->

    <div>
	    <br><br>
        <h1 align="center">Memberships</h1>
		<br><br>
		
		<div>
		     <div class="container">
			 
			      
				      <div>
				      <br><br>
				      <h2 class="session" align="center">1 SESSION</h2>
				      <br>
				      <h2 class="dolar">$ 40</h2>
				      <br>
				      <p>SEMI-PRIVATE TRANING</p>
				      <br>
				      
				      <p class="valid">Valid for 4 weeks</p>
					  
					  <br>
					  
					  <input class ="button1" type="submit" value="Select">
				      <br><br><br>
					  
					  <h3 ><br> 1 SESSION <br><br>
					  40 PER SESSION <br><br>
					  4 WEEKS AVAILABLE<br></h3>
					  <br>
					 
					  
					  </div>
					  
				  <div>
				  <br><br>
				      <h2 class="session" align="center">4 SESSIONS</h2>
				      <br>
				      <h2 class="dolar">$ 150</h2>
				      <br>
				      <p>SEMI-PRIVATE TRANING</p>
				      <br>
				      
				      <p class="valid">Valid for one month</p>
					  
					  <br>
					  
					  <input class ="button1" type="submit" value="Select">
				      <br><br><br>
					  
					  <h3 ><br> 1 X PER WEEK<br><br>
					  37 $ PER SESSION <br><br>
					  4 WEEKS <br></h3>
					  <br>
				  </div>
				  
				  <div>
				  <br><br>
				      <h2 class="session" align="center">8 SESSIONS</h2>
				      <br>
				      <h2 class="dolar">$ 250</h2>
				      <br>
				      <p>SEMI-PRIVATE TRANING</p>
				      <br>
				      
				      <p class="valid">Valid for one month</p>
					  
					  <br>
					  
					  <input class ="button1" type="submit" value="Select">
				      <br><br><br>
					  
					  <h3 ><br>2 X PER WEEK <br><br>
					  31 $ PER SESSION <br><br>
					  4 WEEKS <br></h3>
					  <br>
				  </div>
				  <br>
					  
					  
			 </div>
			 
			 <div class="container">
			      <div>
				  <br><br>
				      <h2 class="session" align="center">10 SESSIONS</h2>
				      <br>
				      <h2 class="dolar">$ 280</h2>
				      <br>
				      <p>SEMI-PRIVATE TRANING</p>
				      <br>
				      
				      <p class="valid">Valid for one month</p>
					  
					  <br>
					  
					  <input class ="button1" type="submit" value="Select">
				      <br><br><br>
					  
					  <h3 ><br> 2-3 X PER WEEK <br><br>
					  28 $ PER SESSION <br><br>
					  4 WEEKS <br></h3>
					  <br>
				  </div>
				  
				  <div>
				  <br><br>
				      <h2 class="session" align="center">12 SESSIONS</h2>
				      <br>
				      <h2 class="dolar">$ 310</h2>
				      <br>
				      <p>SEMI-PRIVATE TRANING</p>
				      <br>
				      
				      <p class="valid">Valid for one month</p>
					  
					  <br>
					  
					  <input class ="button1" type="submit" value="Select">
				      <br><br><br>
					  
					  <h3 ><br> 3 X PER WEEK<br><br>
					  26 $ PER SESSION <br><br>
					  4 WEEKS <br></h3>
					  <br>
				  </div>
				  
				  <div>
				  <br><br>
				      <h2 class="session" align="center">96 SESSIONS</h2>
				      <br>
				      <h2 class="dolar">$ 2,300</h2>
				      <br>
				      <p>SEMI-PRIVATE TRANING</p>
				      <br>
				      
				      <p class="valid">Valid for one year</p>
					  
					  <br>
					  
					  <input class ="button1" type="submit" value="Select">
				      <br><br><br>
					  
					  <h3 ><br>2 X PER WEEK<br><br>
					  24 $ PER SESSION <br><br>
					  1 YEAR<br></h3>
					  <br>
				  </div>
			 </div>
		</div>
		<div align="center">
			<input align="center" class ="button2" type="submit" value="BACK" onclick="window.location.href='index.php';">
			<br><br><br>

</div>
		</div>
		
    <!-- content section ends -->

    <!-- footer section start -->
    <div class="footer">
        <table>
            <tr>
                <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.356484217346!2d79.90449307475744!3d6.967204893033362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25810a2b036bd%3A0x5702369a7f7e8cf9!2s45c%201st%20Ln!5e0!3m2!1sen!2slk!4v1721654715652!5m2!1sen!2slk" width="260" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </td>
             <td class="padded-cell">
                <h3>Contact Us</h3><br>
                <p>
                    285/2,<br>
                    Kollupitiya,<br>
                    Colombo 05.
                    <br>
                    <ul class="social-media-list">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>

                   
                    </ul>
                    
                </p>
             </td>
            </tr>
            
        </table>
    </div>
    <!-- footer section ends -->
</body>
</html>