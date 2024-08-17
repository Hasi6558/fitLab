
<html>
<head>
<title>Personal Trainers</title>
<link rel="stylesheet" href="personalTrainerStyle.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

<div class="header">
        <div class="logo"><h1>FitLab</h1></div>
        
    <!-- header start -->
        <div class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="price.php">Pricing</a></li>
                <li><a href="#">Personal Trainee</a></li>
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
    <!-- header close -->
     
<h1 class="headinga" align="center">PERSONAL TRAINERS</h1><br>


<table border="0" width="850px">
<tr>
<td>
<div class="trainer-profile">
    <img src="Asset/images1.jpg" alt="Trainer Name">
</div>
</td>
<td>
    <div class="trainer-info">
        <h1> Randy Senevirathne</h1>
        <p>HEAD COACH | FITNESS | NUTRITION | S&C | LIFE STYLE</p>
        <p class="contact-info">+94 77 102 4444 | senevirathne@movementlab.lk</p>
<div class="social-links">
            <a href="#"><img src="Asset/1.png"></a>
            <a href="#"><img src="Asset/2.png"></a>
            <a href="#"><img src="Asset/3.png"></a>
            <a href="#"><img src="Asset/4.png"></a>
            <a href="#"><img src="Asset/5.png"></a>
        </div>
	<br>
        <button>More</button>
    </div>

</td>
</tr>
</table><br>


<table border="0" width="850px">
<tr>
<td>
<div class="trainer-profile">
    <img src="Asset/dulanga-hettiarachchi-1.webp" alt="Trainer Name">
</div>
</td>
<td>
    <div class="trainer-info">
        <h1>Dulanga Hettiarachchi</h1>
        <p>MOVEMENT COACH | FITNESS | S&C | PARKOUR</p>
        <p class="contact-info">+94 77 121 3624 | hettiarachchi@movementlab.lk</p>
<div class="social-links">
            <a href="#"><img src="Asset/1.png"></a>
            <a href="#"><img src="Asset/2.png"></a>
            <a href="#"><img src="Asset/3.png"></a>
            <a href="#"><img src="Asset/4.png"></a>
            <a href="#"><img src="Asset/5.png"></a>
        </div>
	<br>
        <button>More</button>
    </div>
</td>
</tr>
</table><br>


<table border="0" width="850px">
<tr>
<td>
<div class="trainer-profile">
    <img src="Asset/images3.jpg" alt="Trainer Name">
</div>
</td>
<td>
    <div class="trainer-info">
        <h1> Hasitha Perera</h1>
        <p>MOVEMENT COACH | FITNESS | S&C | GYMNASTICS</p>
        <p class="contact-info">+94 77 678 2244 | Hasitha@movementlab.lk</p>
<div class="social-links">
            <a href="#"><img src="Asset/1.png"></a>
            <a href="#"><img src="Asset/2.png"></a>
            <a href="#"><img src="Asset/3.png"></a>
            <a href="#"><img src="Asset/4.png"></a>
            <a href="#"><img src="Asset/5.png"></a>
        </div>
	<br>
        <button>More</button>
    </div>
</td>
</tr>
</table><br>


<table border="0" width="850px">
<tr>
<td>
<div class="trainer-profile">
    <img src="Asset/images4.jpg" alt="Trainer Name">
</div>
</td>
<td>
    <div class="trainer-info">
        <h1>Afsal Afu</h1>
        <p>MOVEMENT COACH | FITNESS | S&C | BICYCLES PERFORMANCE</p>
        <p class="contact-info">+94 77 554 8585 | afsalafu@movementlab.lk</p>
<div class="social-links">
            <a href="#"><img src="Asset/1.png"></a>
            <a href="#"><img src="Asset/2.png"></a>
            <a href="#"><img src="Asset/3.png"></a>
            <a href="#"><img src="Asset/4.png"></a>
            <a href="#"><img src="Asset/5.png"></a>
        </div>
	<br>
        <button>More</button>
    </div>
</td>
</tr>
</table><br>

<div class="footer">
    <table>
        <tr>
            <td><iframe src="https://www.google.com/maps/embed?pb=!1m1 8!1m12!1m3!1d3960.356484217346!2d79.90449307475744!3d6.967204893033362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25810a2b036bd%3A0x5702369a7f7e8cf9!2s45c%201st%20Ln!5e0!3m2!1sen!2slk!4v1721654715652!5m2!1sen!2slk" width="260" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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


</body>
</html>
