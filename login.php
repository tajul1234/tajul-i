<?php
session_start();
$connect=mysqli_connect("localhost","root","","himel");
if(isset($_POST['sent']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($email))
     $e='Fill up the filled';
     else
     $e='';
     if(empty($password))
     $ph='Fill up the filled';
     else
     $ph='';
    $rr="SELECT * from hasan where email='$email' AND password='$password' ";
    $tt=mysqli_query($connect,$rr);
    if(mysqli_num_rows($tt)>0)
    {
        $data=mysqli_fetch_array($tt);
        $lname=$data['lname'];
        $email=$data['email'];
        $_SESSION['lname']=$lname;
        $_SESSION['email']=$email;

        
        header("location:profile.php");
    }
    else
    {
        echo "Please!Enter  correct information";
    }




}




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php if(isset($_POST['sent'])) echo $email ?>">
        <?php if(isset($_POST['sent']))  echo $e  ?><br><br>
        <label for="passsword">Password:</label>
         <input type="password" name="password" value="<?php if(isset($_POST['sent'])) echo $password ?>">
         <?php if(isset($_POST['sent']))  echo $ph  ?><br><br>
          <input type="submit" name="sent" value="Login">








</form>
<h4>Not any account?<a href="signup.php">Signup</a></h4>
</body>
</html>