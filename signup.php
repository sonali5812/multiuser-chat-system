<?php
 include 'dbh.php';
 $uname=$_POST['uname'];
 $email=$_POST['email'];
 $pass=$_POST['password'];


$sql="insert into signup(username,email,password)
 values('$uname','$email','$pass')";
 $result= mysqli_query($conn,$sql);
 echo $sql;
 date_default_timezone_set();

 header("Location:index.php");




 ?> 
