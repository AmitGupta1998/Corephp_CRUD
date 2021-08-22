<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form method="POST" action="#">
        <h1>Form For data Manupulation</h1>
      <span>Name:</span>  
     <input type="text" name="fname" placeholder="eneter name">
     <span>Email:</span>
      <input type="email" name="email" placeholder="Enter Email" required>
      <span>Password:</span>
      <input type="password" name="pass" placeholder="Enter Password" required>
      <input type="submit" name="sub" value="Submit">
    </form>

    <?php
if(ISSET($_POST['sub']))
{
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    require 'conn.php';
  
    $qr="insert into coretest(name,email,pass) values ('$name','$email','$pass')";
    if(mysqli_query($con,$qr))
    {
        $_SESSION['email']=$email;  
      header('location:landingpage.php');
    }
    else
    {
        echo "Not Inserted";
    }

}
?>
</body>
</html>