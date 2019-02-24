<?php 
session_start();
include 'dbh.php';

$uname=$_POST['uname'];
$pass=$_POST['pass'];



$sql="SELECT * FROM signup WHERE username='$uname' AND password='$pass' ";
$result=mysqli_query($conn,$sql);

if(!$row=$result->fetch_assoc()){
	header("Locaton:error.php");
}
else{
	$_SESSION['name']=$_POST['uname'];

	header("Location:home.php");
}