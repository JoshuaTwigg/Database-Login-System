<?php
include('connect.php');

$email2 = $_POST["email2"];
$password2 = $_POST["password2"];

print('this is the email from form'. $email2);
echo "<br>";
echo "<br>";
print('this is the password from form'.$password2);


$sql = "SELECT b from w where a = '$email2'"; // select [column name] from table. check phpdbtest for clarification
$queryy = mysqli_query($conn,$sql);

echo "<br>";
echo "<br>";

// if statement is broken
// passowrd verify is broken aswell nice

// idk whats wrong i guess sql select needs to say if this email exists continue otherwise error message
// its meant to do that as is but php is a disgusting language so

if($queryy){
    print("successfully grabbed password where username");
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $roww = mysqli_fetch_array($queryy);
    $databasePassword = $roww['b']; //column name goes here   // fetch_array function accepts keyword and number selectors
    print("this is the password sitting on db");
    var_dump($databasePassword);

    if($databasePassword == null){
        print("broken!");
    }else{
        echo "<br>";
        echo "<br>";
        echo "<br>";
        print("not broken");
        echo "<br>";
        echo "<br>";
        success($databasePassword);
    }


//}else{
   // print("no value has been grabbed error or username/pass does not exist on db");
    //fail();
}


function success($queryy){
    var_dump($queryy);
 //column name goes here   // fetch_array function accepts keyword and number selectors
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $password2 = $_POST["password2"];
    var_dump($password2);
    echo "<br>";

    if (password_verify($password2, $queryy)) { 
    print("passwords match");
    echo "successfully logged in";
    header( "Location: successLogin.html" ); die;
    } else {
    // password doesn't match
    print("wrong");
    echo "<br>";
    echo "<br>";
    print("doesnt match?");
    fail();
  
    }
}

function fail(){  
    header( "Location: register.php" ); die;
    $message = " username or password incorrect!";
    echo "<script>alert('$message');</script>";

}










?>