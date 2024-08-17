<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="registrationStyle.css">
    
</head>
<body>

    <?php
        include 'database.php';
        $errorMsg="";

        if (isset($_POST['signUp'])) {
            $firstName = mysqli_real_escape_string($conn, $_POST['first_name']);
            $lastName = mysqli_real_escape_string($conn, $_POST['last_name']);
            $gender = mysqli_real_escape_string($conn, $_POST['sex']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $addressLine1 = mysqli_real_escape_string($conn, $_POST['address_line1']);
            $postalCode = mysqli_real_escape_string($conn, $_POST['postal_code']);

            // Check if email already exists
            $checkEmail = "SELECT * FROM user WHERE email='$email'";
            $result = mysqli_query($conn, $checkEmail);


            if (mysqli_num_rows($result) > 0) {
                $errorMsg = "User already exists!";
            } else {
                // Encrypt the password
                $hashedPassword = md5($password); // Use password_hash() for more secure hashing

                // Insert the user into the database
                $sql = "INSERT INTO user (first_name, last_name, gender, email, password, address_line1, postal_code,no_of_sessions) 
                        VALUES ('$firstName', '$lastName', '$gender', '$email', '$hashedPassword', '$addressLine1', '$postalCode',3)";

                if (mysqli_query($conn, $sql)) {
                    header("Location: login.php");
                    exit();
                } else {
                    echo "Data insertion unsuccessful: " . mysqli_error($conn);
                }
            }

            // Close the connection
            mysqli_close($conn);
        }
    ?>

    <div class="registration-box">
        <div class="registration-box-image-outer">
            <div class="registration-box-image">
            </div>
        </div>
        
        <div class="registration-box-form">

            <h1>Create your account!</h1>
            <p class="subtitle">Sign up to our website and start the jurney with us!</p>
            <form action="registration.php" method="post">

                <label for="firstName">First Name</label><br>
                <input type="text"  name="first_name" onblur="validateFName()" id="fname" required ><br>
                <p id="fname-err-msg"></p>
        
                <label for="secondName">Last Name</label><br>
                <input type="text"  name="last_name" onblur="validateLName()" id="lname" required><br>
                <p id="lname-err-msg"></p><br>
        
                <label for="gender" class="gender">Gender</label><br>
                <input type="radio" name="sex" value="male" required><span class="genderVal">Male</span>
                <input type="radio" name="sex" value="female" required><span class="genderval">Female</span><br>
                <br>
                <label for="email">Email</label><br>
                <input type="email"  name="email" onblur="validateEmail()" id="email" required><br>
                <p id="email-err-msg"></p>

                <label for="password">Password</label><br>
                <input type="password" name="password" onblur="validatePassword()" id="pw" required><br> 
                <p id="pw-err-msg"></p>

                <label for="reEnterPassword">Re-enter Password</label><br>
                <input type="password" name="re_password" onblur="validateCPassword()" id="cpw" required><br>
                <p id="cpw-err-msg"></p>


                <label for="addressLine1" id="address">Address</label><br>
                <input type="text" name="address_line1" ><br>

                <label for="postalCode" id="postal_code">Postal Code</label><br>
                <input type="text" name="postal_code" ><br><br>


                <input type="checkbox" name="terms" required>
                <label for="terms">Agreed to <a href="terms_and_condition.php">terms and conditions</a> </label><br><br>
                
                <label for="login?">Already a member?<a href="login.php">Log in</a></label>
                <p id="server-error-msg"><?php echo $errorMsg; ?></p>
                
                <input type="submit" name="signUp" value="Sign Up" onclick="checkError()">

            </form>
        </div>
    </div>
    
    <script src="registrationscript.js"></script>
</body>
</html>
