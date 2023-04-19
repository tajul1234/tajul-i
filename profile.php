<?php
session_start();
if(!empty($_SESSION['lname']) && !empty($_SESSION['email']))
{

?>
<?php
$connect=mysqli_connect("localhost","root","","rasel");
if(isset($_POST['sent']))
{
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $university=$_POST['university'];
    $blood=$_POST['blood'];
    $dept=$_POST['dept'];
    $home=$_POST['home'];
    $query="INSERT INTO sanu(name,lname,email,phone,university,blood,dept,home)
    VALUES ('$name','$lname','$email','$phone','$university','$blood','$dept','$home')";
    mysqli_query($connect,$query);
    
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
<div class="aa">
    <form method="POST">
        <label for="name">First_name:</label>
        <input type="text" name="name" placeholder="Enter your first name" required><br><br>
        <label for="lname">Last_name:</label>
        <input type="text" name="lname" placeholder="Enter your last name" required><br><br>
        <label for="lname">Email:</label>
        <input type="email" name="email" placeholder="Enter your Email address"><br><br>
        <label for="lname">Phone:</label>
        <input type="phone" name="phone" placeholder="Enter your phone number"><br><br>
        <label for="lname">University:</label>
        <input type="text" name="university" placeholder="Enter your university"><br><br>
        <label for="lname">Blood_group:</label>
        <select name="blood">
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
        <select name="dept">
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

        <select name="home">
            <option>DHAKA</option>
            <option>MYMENSINGH</option>
            <option>SYLHET</option>
            <option>CHITTAGONG</option>
            <option>KHULNA</option>
            <option>RANGPUR</option>
            <option>RAJSHAHI</option>
            
</select><br><br>
<input type="submit" value="Submit" name="sent" class="ss">
</div>
</form>
<table border="2px">
    <th>id</th>
    <th>name</th>
    <th>lname</th>
    <th>email</th>
    <th>phone</th>
    <th>university</th>
    <th>blood</th>
    <th>dept</th>
    <th>home</th>
    <th>edit</th>
    <th>delete</th>


<?php
$read="select * FROM sanu";
$query=mysqli_query($connect,$read);
while($row=mysqli_fetch_array($query)) { ?>
   <tr>
    <td><?php echo $row['id'];  ?></td>
    <td><?php echo $row['name'];  ?></td>
    <td><?php echo $row['lname'];  ?></td>
    <td><?php echo $row['email'];  ?></td>
    <td><?php echo $row['phone'];  ?></td>
    <td><?php echo $row['university'];  ?></td>
    <td><?php echo $row['blood'];  ?></td>
    <td><?php echo $row['dept'];  ?></td>
    <td><?php echo $row['home'];  ?></td>
    <td><a href="edit.php?idno=<?php echo $row['id']; ?>">edit</a></td>
    <td><a onclick="return confirm('are you sure')" href="delete.php?idno=<?php echo $row['id']; ?>">delete</a></td>

    


<?php }

?>
</table>

</body>
</html>
<?php
}
else
{
   header("location:login.php");
}


?>



<h3><a href="logout.php">Logout</a></h3>