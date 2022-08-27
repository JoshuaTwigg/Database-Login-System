<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="signInn.css">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="dbCheck.php" method="POST" id="form2">
            <img src="download.png" id="img" width="100px" height="100px">
            <label email="" id="emailLabel">Email</label>
            <input type="email" name="email2" id="email2" value="@gmail"  required>

            <label name="password" id="passwordLabel">Password</label>
            <input type="password" name="password2" id="password2" required>

            <input type="submit" id="submitButton2" value="Sign In">
        </form>
    </div>


    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="signIn.js"></script> <!-->



</body>
</html>




<?php


$email = $_POST["email"];
$password = $_POST["password"];
$hashedPass = password_hash($password,PASSWORD_DEFAULT);
$constant = "test";
echo "<br>";
echo "<br>";
echo "<br>";

$stmt = $conn->prepare("INSERT INTO w (a,b,c,d) VALUES (? , ? ,? , ?)");



// Bind these variables to the prepare statement
$stmt->bind_param("ssss", $email, $hashedPass, $constant, $constant);// bind_param function
$stmt->execute();


// Check whether insert was successful
if ($stmt) {
  //echo "New record created successfully !prep stat!";
} else {
  //echo "prep stat error";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// need a way to check on form sign in submit
// also need different email variables assigned



// improvements prepared statements needed, next time database identical emails 
// should be checked for at sign up stage if they already exist the form must not submit yet display error
// sanitise, sessions issset


// just need to find way to get sign in form ot only submit on password
// match against first form sign up
?>


