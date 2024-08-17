<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLab</title>
    <link rel="stylesheet" href="bookingStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<?php
    include 'database.php';

    $spots = array();

        for($i=1;$i<=36;$i++){
            $record = getRecord($i, $conn);
            if ($record) {
                $row = mysqli_fetch_assoc($record);
                if ($row && isset($row['no_of_spots'])) {
                    $spots[$i] = $row['no_of_spots'];
                } else {
                    $spots[$i] = "N/A";
                }
            } else {
                $spots[$i] = "N/A";
            }
        }

    function getRecord($selection,$conn){
        $sql ="select no_of_spots from training_sessions where sid='$selection'";
        $result = mysqli_query($conn,$sql);
        return $result;
    }
    $email= $_SESSION['email'];
    $sql2 = "select no_of_sessions from user where email='$email'";
    $record2 = mysqli_query($conn,$sql2);
    $available_sessions = mysqli_fetch_assoc($record2);


    ?>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update table cells based on PHP data
            <?php foreach ($spots as $id => $value): ?>
                var element = document.getElementById('<?php echo $id; ?>');
                if (element) {
                    element.innerHTML = "<?php echo $value; ?>";
                }
            <?php endforeach; ?>

        });
    </script>


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
    
    <!-- booking section starts -->

    <div class="booking">
        <h1 align="center" class="title">Book your training session !!!</h1>
        <div>
            <table align="center" >
                <tr>
                    <th>Time</th>
                    <th>Sunday</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
                <tr>
                    <th>7.00 am</th>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - John</p>
                            <p class="spots"><span id="1">2</span>spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Sarah</p>
                            <p class="spots"><span id="2">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Michael</p>
                            <p class="spots"><span id="3">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emily</p>
                            <p class="spots"><span id="4">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - David</p>
                            <p class="spots"><span id="5">2</span> spot available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emma</p>
                            <p class="spots"><span id="6">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Olivia</p>
                            <p class="spots"><span id="7">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>8.15 am</th>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - John</p>
                            <p class="spots"><span id="8">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Sarah</p>
                            <p class="spots"><span id="9">2</span> spot available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Michael</p>
                            <p class="spots"><span id="10">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emily</p>
                            <p class="spots"><span id="11">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - David</p>
                            <p class="spots"><span id="12">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emma</p>
                            <p class="spots"><span id="13">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Olivia</p>
                            <p class="spots"><span id="14">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>9.30 am</th>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - John</p>
                            <p class="spots"><span id="15">2</span> spot available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Sarah</p>
                            <p class="spots"><span id="16">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Michael</p>
                            <p class="spots"><span id="17">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emily</p>
                            <p class="spots"><span id="18">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - David</p>
                            <p class="spots"><span id="19">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emma</p>
                            <p class="spots"><span id="20">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Olivia</p>
                            <p class="spots"><span id="21">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>11.45 am</th>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - John</p>
                            <p class="spots"><span id="22">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Sarah</p>
                            <p class="spots"><span id="23">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Michael</p>
                            <p class="spots"><span id="24">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emily</p>
                            <p class="spots"><span id="25">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - David</p>
                            <p class="spots"><span id="26">2</span> spot available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emma</p>
                            <p class="spots"><span id="27">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Olivia</p>
                            <p class="spots"><span id="28">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>7.00 pm</th>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - John</p>
                            <p class="spots"><span id="29">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Sarah</p>
                            <p class="spots"><span id="30">2</span> spot available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Michael</p>
                            <p class="spots"><span id="31">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emily</p>
                            <p class="spots"><span id="32">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - David</p>
                            <p class="spots"><span id="33">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Emma</p>
                            <p class="spots"><span id="34">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                    <td>
                        <div class="table-cell">
                            <p>MOVE - Olivia</p>
                            <p class="spots"><span id="35">2</span> spots available</p>
                            <a href="#" class="available" onclick="bookSpot(this)">Book</a>
                        </div>
                    </td>
                </tr>
            </table>
    </div>
    
    <!-- footer section ends -->
    <script>
        function bookSpot(link) {
            const bookingLimit = 3;
            const cell = link.parentElement;
            const spotsParagraph = cell.querySelector('.spots');
            let spotsText = spotsParagraph.textContent;

            // Ensure the button can be clicked
            if (link.classList.contains('booked')) {
                alert('This slot is already booked.');
                return;
            }

            let spotsAvailable = parseInt(spotsText.split(' ')[0]);
            if (spotsAvailable > 0) {
                if (typeof(Storage) !== "undefined") {
                    if (!localStorage.getItem("bookingCount")) {
                        localStorage.setItem("bookingCount", "0");
                    }

                    let bookingCount = parseInt(localStorage.getItem("bookingCount"));

                    if (bookingCount >= bookingLimit) {
                        alert("Booking limit reached.");
                        return;
                    }

                    bookingCount++;
                    localStorage.setItem("bookingCount", bookingCount.toString());
                } else {
                    alert("Sorry, your browser does not support web storage.");
                    return;
                }

                spotsAvailable--;
                spotsParagraph.textContent = spotsAvailable === 0 ? 'no spots available' : `${spotsAvailable} spot${spotsAvailable > 1 ? 's' : ''} available`;
                link.textContent = 'Booked';
                link.classList.remove('available');
                link.classList.add('booked');
            } else {
                alert('No spots available to book.');
            }
        }
    </script>
     
</body>
</html>