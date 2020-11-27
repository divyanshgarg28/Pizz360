<?php
include("database.php");
$name=$_POST['username'];
$pass=$_POST['password'];
// $cpassword=$_POST['cpwd'];
// $contact=$_POST['cno'];
// $date=$_POST['dob'];
$query="INSERT INTO users (username,password) VALUES ('$name','$pass')";
$data=mysqli_query($conn,$query);
if($data)
{
    header('location:index.php');
}
else
{
    die("Connection Failed:".mysqli_error($conn));
}
?>