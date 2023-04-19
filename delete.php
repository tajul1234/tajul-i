<?php
$connect=mysqli_connect("localhost","root","","rasel");
$ID=$_GET['idno'];
$qq="delete from sanu where id=$ID";
$dd=mysqli_query($connect,$qq);
if($dd)
{
    header("location:profile.php");
}













?>

