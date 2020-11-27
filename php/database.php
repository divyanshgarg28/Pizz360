<?php
$servername="localhost";
$username="root";
$password="";
$dbname="phplearning";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection failed because ".mysqli_connect_error());
}
?>