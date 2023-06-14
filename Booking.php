<?php
include 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Booking</title>
    <style>
  form{
            padding: 30px;
            border: 2px solid #fefecb;
            background: #fefecb;
            font-family: Courier;
           
        }
        h1{
            padding: 20px;
            background: #520000;
            margin-top: 30px;
            margin-left: 30px;
            font-family:Courier;
            color: white;
        }
        h2{
            padding: 20px;
            color: #520000;
            margin-top: 10px;
            margin-left: 30px;
            font-family:Courier;
            

        }
    </style>
</head>
<body>
    <h1 class="font">Book Now</h1>
    <h2>Enter Your Details..</h2>
    <div class="my-5 form-group">
        <form class="form-horizontal" action="Booking.php" method="post">
            <label for="fname">First Name</label>
            <input type="text" name="fname" placeholder="First name" reqiired><br><br>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required><br><br>
            <label for="">Car ID</label>
            <input type="text" name="car" placeholder="Car ID" required><br><br>
            <label for="">Contact Number</label>
            <input type="text" name="number" placeholder="Contact No." required><br><br>
            <input class="btn btn-warning" type="submit" name="submit" value="Book Car" id="">
        </form>
        <?php

        function function_alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";}
            if(isset($_POST['submit'])){
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $car=$_POST['car'];
                $contact=$_POST['number'];
                $sql="INSERT INTO passenger(fname,lname,CarID,Contact) VALUES ('$fname','$lname','$car','$contact')";
                $update="UPDATE `cars` SET `Status` = '1' WHERE `cars`.`ID` = '$car'";
                mysqli_query($conn,$update);
                if(mysqli_query($conn,$sql)){
                    function_alert("Thank you for choosing RentARide..We will contact you within 30 minutes for Booking Confirmation");
                }
                else{
                    function_alert("error");
                }
            }
        ?>
        


    </div>
    
</body>
</html>
