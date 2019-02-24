<?php

session_start();
include 'dbh.php';
$msg=$_POST['msg'];
$uname=$_SESSION['name'];


$sql="insert into posts(msg,name) values('$msg','$uname')";
$result=mysqli_query($conn,$sql);


header("Location:home.php");