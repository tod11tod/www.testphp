<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>Registration - Enter details </h2>

<form  action="connect.php" method="post">

<table>

   <tr>
      <td>Name</td> <td><input type="text" name="name" required></td>
   </tr>
   <tr>
      <td>E-mail</td> <td><input type="email" name="email" required></td>
   </tr>
   <tr>
      <td>Password</td> <td><input type="password" name="password" required></td>
   </tr>
   <tr>
      <td>Repeat Password</td> <td><input type="password" name="passwordrepeat" required></td>
   </tr>

</table><br>

<input type="submit" name="" value="Submit">

</form>
<br>Already have an account?&nbsp&nbsp&nbsp<a href="login.php">Login now! </a>
<br><br><br>
<li><a href="home.php">Back to the home page </a></li>
  </body>
</html>
