<?php
$id=$_GET['id'];
require('conn.php');
$q="delete from coretest where id=$id";
if(mysqli_query($con,$q))
{
    header('location:landingpage.php');
}
else
{
    echo" Record Not Delete Try Again..";
}
?>