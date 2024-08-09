<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLab</title>
    <link rel="stylesheet" href="style.css">
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
                <li><a href="#">Home</a></li>
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
    <!-- header section ends -->
    
    <!-- content section starts -->

    <div class="cover">
        <h1 class="cover_title" id="cover_title" >
            LONGEVITY
        </h1>
        <h1 class="cover_sub_title" id="cover_sub_title" >
            FITNESS
        </h1>
        <div class="register-btn"><a href="registration.php">REGISTER</a></div>
    </div>
    <div class="intro">
        
        
                <div class="intro-video">
                    <iframe width="660" height="415" src="https://www.youtube.com/embed/tUykoP30Gb0?si=1miKuXOu1fE52iZF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                
                </div>

                <div class="intro-content">

                    <h1>FITLAB</h1><br>
                <p>
                    THE BEST OF BOTH WORLDS. A PERSONAL TRAINING EXPERIENCE IN A GROUP SETTING. IN OUR SMALL GROUP CLASS, WE ONLY ALLOW 3-6 PEOPLE PER SESSION. WE BELIEVE THIS IS THE MOST EFFECTIVE SETTING FOR YOU TO SUCCEED. YOU GET TO ENJOY THE FUN ENERGY OF A GROUP AND WE CAN OFFER TOP NOTCH COACHING WITH SUCH A SMALL NUMBER OF PEOPLE.“
                
                </p><br>
                <p>– ANDRIUS ČESNAUSKAS –</p>
                </div>
                
       
    </div>
    
    <div class="img-gallery">
        <img src="images/gallery1.webp" alt="">
        <img src="images/gallery2.webp" alt="">
        <img src="images/gallery3.webp" alt="">
        <img src="images/gallery4.webp" alt="">
    </div>

    <!-- into-semi-private-training -->

    <div class="into-semi-private-training">
        <div class="into-semi-private-training-outer-box">
            
            <div class="into-semi-private-training-outer-box-header">
                <h1>SEMI-PRIVATE TRAINING</h1><br>
                <P>"2 in 1: PERSONAL TRAINING EXPERIENCE IN A SMALL GROUP FORMAT. WORKOUTS MADE FOR GROUPS OF 3-5 PERSONS. WE GUARANTEE YOU, IT'S THE BEST WAY TO GET THE RESULTS YOU ALWAYS WANTED. ENJOY HIGH QUALITY TRAINING IN SMALL GROUP ATMOSPHERE!" </P><br>
            </div>
            <div class="into-semi-private-training-outer-box-content">
                <div class="into-semi-private-training-outer-box-section1">
                    <div class="into-semi-private-training-inner-box">
                        <i class="fa-solid fa-brain"></i>
                        <h3>Feeling</h3>
                        <p>When someone asks you "How do you feel?" You can always say - just great. Life is beautifull.</p>
                    </div>
                    <div class="into-semi-private-training-inner-box">
                        <i class="fa-solid fa-brain"></i>
                        <h3>Feeling</h3>
                        <p>When someone asks you "How do you feel?" You can always say - just great. Life is beautifull.</p>
                    </div>
                    <div class="into-semi-private-training-inner-box">
                        <i class="fa-solid fa-brain"></i>
                        <h3>Feeling</h3>
                        <p>When someone asks you "How do you feel?" You can always say - just great. Life is beautifull.</p>
                    </div>
                </div>
                <div class="into-semi-private-training-outer-box-section2">
                    <div class="into-semi-private-training-inner-box">
                        <i class="fa-solid fa-brain"></i>
                        <h3>Feeling</h3>
                        <p>When someone asks you "How do you feel?" You can always say - just great. Life is beautifull.</p>
                    </div>
                    <div class="into-semi-private-training-inner-box">
                        <i class="fa-solid fa-brain"></i>
                        <h3>Feeling</h3>
                        <p>When someone asks you "How do you feel?" You can always say - just great. Life is beautifull.</p>
                    </div>
                    <div class="into-semi-private-training-inner-box">
                        <i class="fa-solid fa-brain"></i>
                        <h3>Feeling</h3>
                        <p>When someone asks you "How do you feel?" You can always say - just great. Life is beautifull.</p>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="intro-semi-private-training-image">
            <div class="intro-semi-private-training-image-contents">
                <h3>JOIN US</h3>
                <hr>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-regular fa-envelope"></i></a>
                <a href="#"><i class="fa-solid fa-phone"></i></a>

                
                
                
                
            </div>
            
        </div>
            

    </div>
    <!-- content section ends -->

    <!-- our team section starts -->

    <div class="our-team">
        <h1 align="center">OUR TEAM</h1>
        
        <div class="image-galery">
            <img src="images/team member 1.webp" alt="">
            <img src="images/5.jpg" alt="">
            <img src="images/6.jpg" alt="">
            <img src="images/7.jpg" alt="">
        </div>
     </div>

    <!-- our team section ends -->

    <!-- review section starts -->
     <div class="review-box">
        <div class="review-container">
            <img src="images/profile1.webp" alt="">
            <h3>Ivona</h3>
            <p>Movement Lab coaches create most efficient, strong and engaging training programs. They are very knowledgeable, supportive and fun professionals to work with. It’s always lots of good laughter, combined with serious functional fitness work- work hard, play hard !
                Movements Lab is super clean studio! Has good coffee, cozy and charming dressing rooms and showers.
                The best place to exercise and recharge!</p>
            <p class="comma">"</p>
         </div>
         <div class="review-container">
            <img src="images/profile2.webp" alt="">
            <h3>Ivona</h3>
            <p>Movement Lab coaches create most efficient, strong and engaging training programs. They are very knowledgeable, supportive and fun professionals to work with. It’s always lots of good laughter, combined with serious functional fitness work- work hard, play hard !
                Movements Lab is super clean studio! Has good coffee, cozy and charming dressing rooms and showers.
                The best place to exercise and recharge!</p>
            <p class="comma">"</p>
         </div>
         <div class="review-container">
            <img src="images/profile3.webp" alt="">
            <h3>Ivona</h3>
            <p>Movement Lab coaches create most efficient, strong and engaging training programs. They are very knowledgeable, supportive and fun professionals to work with. It’s always lots of good laughter, combined with serious functional fitness work- work hard, play hard !
                Movements Lab is super clean studio! Has good coffee, cozy and charming dressing rooms and showers.
                The best place to exercise and recharge!</p>
            <p class="comma">"</p>
         </div>
         <div class="review-container">
            <img src="images/profile4.webp" alt="">
            <h3>Ivona</h3>
            <p>Movement Lab coaches create most efficient, strong and engaging training programs. They are very knowledgeable, supportive and fun professionals to work with. It’s always lots of good laughter, combined with serious functional fitness work- work hard, play hard !
                Movements Lab is super clean studio! Has good coffee, cozy and charming dressing rooms and showers.
                The best place to exercise and recharge!</p>
            <p class="comma">"</p>
         </div>

     </div>
     
        
    <!-- review section ends -->
    
    <!-- why-fitlab section starts -->
    <div class="why-fitlab-box">
        <div class="why-fitlab-section1">
            <h1>WHY FITLAB ?</h1>
            <div class="register-btn"><a href="registration.php">REGISTER</a></div>
        </div>
        <div class="why-fitlab-section2">
            <ul>
                <li>Most effective training methods.</li>
                <li>Individualised exercises for each client.</li>
                <li>Workout duration 55 min.</li>
                <li>Flexible schedule.</li>
                <li>2-5 persons per Class only.</li>
            </ul>
        </div>
        <div class="why-fitlab-section3">
            <ul>
                <li>Professional Personal Trainer.</li>
                <li>Friendly community.</li>
                <li>Private Showers & towels.</li>
                <li>Attention to interior details.</li>
                <li>Always good coffee.</li>
            </ul>
        </div>
     </div>
    <!-- why fitlab section end -->
     
     
    <!-- footer section start -->
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
    <!-- footer section ends -->
     <script src="script.js"></script>
     
</body>
</html>