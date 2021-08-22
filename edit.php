<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <?php 
      $id=$_GET['id'];
      require('conn.php');
      $data="select * from coretest where id=$id";
      $result=mysqli_query($con,$data);
      $row=mysqli_fetch_array($result);
    ?>
    <div class="container">
        <div class="row">
              <form method="POST" action="">
                <h1>Form For Edit data</h1>
                <span>Name:</span>  
                <input type="text" name="fname" value="<?= $row['name'];?>" placeholder="eneter name">
                <span>Email:</span>
                <input type="email" name="email" value="<?= $row['email'];?>" placeholder="Enter Email" required>
                <span>Password:</span>
                <input type="text" name="pass" value="<?= $row['pass'];?>" placeholder="Enter Password" required>
                <input type="submit" name="sub" value="Submit">
              </form>
        </div>
    </div>
    <?php 
    if(ISSET($_POST['sub']))
    {
       $name=$_POST['fname'];
       $email=$_POST['email'];
       $pass=$_POST['pass'];

       $q="update coretest set name='$name', email='$email', pass='$pass' where id=$id";
       $data=mysqli_query($con,$q);
       if($data)
       {
          header('Location:landingpage.php');
       }

    }
    ?>
</body>
</html>