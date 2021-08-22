<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\
    , initial-scale=1.0">
    <title>Show Data </title>
</head>
<body>
    <?php
    $data=$_SESSION['email'];
    require('conn.php');
    $qr="select * from coretest";
    $data2=mysqli_query($con,$qr);
    $in=1;
    ?>
<div class="conatainer">
     <div class="row">
             <table>
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                 <?php while($row=mysqli_fetch_array($data2)) { ?>
                     <tr>
                         <td><?php echo $in;?></td>
                         <?php $id=$row['id']; ?>
                         <td><?= $row['name'];?></td>
                         <td><?= $row['email'];?></td>
                         <td><button><?="<a href='edit.php?id=$id'>Edit</a>"?></button>  &nbsp;<button><?="<a href='dele.php?id=$id'>Delete</a>"?></button></td>
                     </tr>
                     <?php $in++; } ?>
                 </tbody>
             </table>
     </div>
</div>


</body>
</html>