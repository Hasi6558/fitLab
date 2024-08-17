<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
 <?php
    include 'database.php';
    $errorMsg="";

    if(isset($_POST['signIn'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        $hashedPassword = md5($password);
        $sql = "select * from user where email='$email' AND password='$hashedPassword'";
        
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_assoc($result);
            $firstName = $row['first_name'];

            $_SESSION['email']=$email;
            $_SESSION['first_name']= $firstName;
            header("location: index.php");
            exit();
        }else{

            $errorMsg=  "invalid email or password";
        }
        mysqli_close($conn);
        

    }

?> 

<div class="registration-box" >

        <div class="registration-box-image-outer">
            <div class="registration-box-image">
            </div>
        </div>
        <div class="registration-box-form-container">
            <div class="registration-box-form" align="center">
            <h1>Lets Login!</h1><br>
            <form action="login.php" method="post">
                 
                <label for="email">Email</label><br>
                <input type="email"  name="email" required><br>
                <p class="email-err-msg"></p>

                <label for="password">Password</label><br>
                <input type="password" name="password"  required><br>
                <p id="pw-err-msg" class="pw-err-msg"><?php echo $errorMsg ?></p>

                <p>Don't you have an account? <a href="registration.php">Register</a></p>

                <input type="submit" name="signIn" value="Sign In" onclick="checkErr()">
            </form>
        </div>
        </div>
        
    </div>
    <script>
        localStorage.setItem("bookingCount", "0");
    function checkErr(){
    if(<?php $errorMsg ?>!=""){
        document.getElementById("pw-err-msg").innerHTML=<?php $errorMsg ?>;
    }
    }
    </script>
</body>
</html>