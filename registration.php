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
                echo "User already exists!";
            } else {
                // Encrypt the password
                $hashedPassword = md5($password); // Use password_hash() for more secure hashing

                // Insert the user into the database
                $sql = "INSERT INTO user (first_name, last_name, gender, email, password, address_line1, postal_code) 
                        VALUES ('$firstName', '$lastName', '$gender', '$email', '$hashedPassword', '$addressLine1', '$postalCode')";

                if (mysqli_query($conn, $sql)) {
                    "console.log('Data insertion success')";
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
                <input type="text"  name="first_name" required><br>
                <p class="fname-err-msg"></p>
        
                <label for="secondName">Second Name</label><br>
                <input type="text"  name="last_name" required><br>
                <p class="lname-err-msg"></p><br>
        
                <label for="gender">Gender</label><br>
                <input type="radio" name="sex" value="male" required>Male
                <input type="radio" name="sex" value="female" required>Female<br>
                <br>
                <label for="email">Email</label><br>
                <input type="email"  name="email" required><br>
                <p class="email-err-msg"></p>

                <label for="password">Password</label><br>
                <input type="password" name="password"  required><br>
                <p class="pw-err-msg"></p>

                <label for="reEnterPassword">Re-enter Password</label><br>
                <input type="password" name="re_password"  required><br>
                <p class="cpw-err-msg"></p>


                <label for="addressLine1">Address</label><br>
                <input type="text" name="address_line1" ><br>

                <label for="postalCode">Postal Code</label><br>
                <input type="text" name="postal_code" ><br><br>


                <input type="checkbox" name="terms" required>
                <label for="terms">Agreed to <a href="terms_and_condition.php">terms and conditions</a> </label><br><br>
                
                <label for="login?">Already a member?<a href="login.php">Log in</a></label>
                
                <input type="submit" name="signUp" value="Sign Up">
            </form>
        </div>
    </div>
    
    <script src="registrationscript.js"></script>
</body>
</html>
