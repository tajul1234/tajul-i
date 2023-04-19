<?php
$connect=mysqli_connect("localhost","root","","rasel");
$ID=$_GET['idno'];
$read="select * FROM sanu where id=$ID";
$query=mysqli_query($connect,$read);
$row=mysqli_fetch_array($query);
if(isset($_POST['edit']))
{
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $university=$_POST['university'];
    $blood=$_POST['blood'];
    $dept=$_POST['dept'];
    $home=$_POST['home'];
    $update="UPDATE sanu
    set name='$name',lname='$lname',email='$email',phone='$phone',university='$university',blood='$blood',dept='$dept',home='$home' where id=$ID";
  $up= mysqli_query($connect,$update);
  if($up)
  {
    header("location:profile.php");
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
        <label for="name">First_name:</label>
        <input type="text" name="name" placeholder="Enter your first name" value="<?php echo $row['name'];?>"><br><br>
        <label for="lname">Last_name:</label>
        <input type="text" name="lname" placeholder="Enter your last name" value="<?php echo $row['lname'];?>"><br><br>
        <label for="lname">Email:</label>
        <input type="email" name="email" placeholder="Enter your Email address"value="<?php echo $row['email'];?>"><br><br>
        <label for="lname">Phone:</label>
        <input type="phone" name="phone" placeholder="Enter your phone number" value="<?php echo $row['phone'];?>"><br><br>
        <label for="lname">University:</label>
        <input type="text" name="university" placeholder="Enter your university" value="<?php echo $row['university'];?>"><br><br>
        <label for="lname">Blood_group:</label>
        <select name="blood" value="<?php echo $row['blood'];?>">
            <option>A+</option>
            <option>B+</option>
            <option>AB+</option>
            <option>O+</option>
            <option>A-</option>
            <option>B-</option>
            <option>AB-</option>
            <option>O-</option>
</select><br><br>
<label for="lname">Dept:</label>
<select name="dept" value="<?php echo $row['dept'];?>">
            <option>CSE</option>
            <option>EEE</option>
            <option>ESE</option>
            <option>LAW</option>
            <option>ICT</option>
            <option>MATH</option>
            <option>ACCE</option>
            <option>PHYSICS</option>
</select><br><br>
<label for="lname">Home_dist:</label>

        <select name="home" value="<?php echo $row['home'];?>">
            <option>DHAKA</option>
            <option>MYMENSINGH</option>
            <option>SYLHET</option>
            <option>CHITTAGONG</option>
            <option>KHULNA</option>
            <option>RANGPUR</option>
            <option>RAJSHAHI</option>
            
</select><br><br>
<input type="submit" value="Submit" name="edit" class="ss">
</div>
</form>

</body>
</html>

















