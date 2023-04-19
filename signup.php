<?php
$connect=mysqli_connect("localhost","root","","himel");
if(isset($_POST['sign']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_agin=$_POST['password_agin'];
    if(empty($fname))
     $f='Fill up the filled';
     else
     $f='';
     if(empty($lname))
     $l='Fill up the filled';
     else
     $l='';
     if(empty($phone))
     $p='Fill up the filled';
     else
     $p='';
     if(empty($email))
     $e='Fill up the filled';
     else
     $e='';
     if(empty($password))
     $ph='Fill up the filled';
     else
     $ph='';
     if(!empty($fname) && !empty($lname) && !empty($phone) && !empty($email) && !empty($password))
     {
        if($password===$password_agin){
        $query="INSERT INTO hasan(fname,lname,phone,email,password)
        VALUES('$fname','$lname','$phone','$email','$password')";
        $vv=mysqli_query($connect,$query);
        if($vv)
        {
            header("location:created.php");
        }
        }
        else
        {
        
            echo "<script>alert('Password not match')</script>";
    }
        
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
         <label for="fname">First_name:</label>
        <input type="text" name="fname" value="<?php if(isset($_POST['sign'])) echo $fname ?>">
        <?php if(isset($_POST['sign'])) echo $f  ?><br><br>
        <label for="lname">Last_name:</label>
        <input type="text" name="lname" value="<?php if(isset($_POST['sign'])) echo $lname ?>">
        <?php if(isset($_POST['sign']))  echo $l  ?><br><br>
        <label for="phone">Phone:</label>
        <input type="phone" name="phone" value="<?php if(isset($_POST['sign'])) echo $phone ?>">
        <?php if(isset($_POST['sign']))  echo $p  ?><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php if(isset($_POST['sign'])) echo $email ?>">
        <?php if(isset($_POST['sign']))  echo $e  ?><br><br>
        <label for="passsword">Password:</label>
         <input type="password" name="password" value="<?php if(isset($_POST['sign'])) echo $password ?>">
         <?php if(isset($_POST['sign']))  echo $ph  ?><br><br>
         <label for="passsword_agin">Password_agin:</label>
         <input type="password" name="password_agin"><br><br>
          <input type="submit" name="sign" value="Signup">

</form>
<h4>Have an account?<a href="login.php">Login</a></h4>
</body>
</html>