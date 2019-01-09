php_value display_errors on
display_errors = On
<?php


session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'users');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

 $s = "select * FROM userlist WHERE email='$email' && password - 'password'";
 $result= mysqli_query($con, $s);
 $num = mysqli_num_rows($result);
 if($num == 1)
 {
     header('location:welcome.php');
 }
 else
 {
   header('location:login.php');
   $errorMsg ="invalid username and password";

}

 ?>
