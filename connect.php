<?php

session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'users');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordrepeat = $_POST['passwordrepeat'];

if ($password==$passwordrepeat)
{
 $s = "select * FROM userlist WHERE email='$email'";
 $result= mysqli_query($con, $s);
 $num = mysqli_num_rows($result);
 if($num == 1)
 {
  echo "Email already registered";
 }
 else
 {
   $reg="insert into userlist(name,email,password) values ('$name','$email','$password')";
   mysqli_query($con, $reg);
   echo"Registration succesful";

 }

                                }

  else {
    header('location:reregister.php');
  }
 ?>
