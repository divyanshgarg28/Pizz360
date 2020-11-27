<?php
// include database and object files
include("database.php");
// include_once '../objects/user.php';
 
$email=$_POST['username'];
$pass=$_POST['password'];
$query="SELECT * FROM users WHERE username='$email' && password='$pass'";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
if($table)
{
    
    header('location:index.php');
}
else
    echo $email." check-In failed ".$pass;
?>