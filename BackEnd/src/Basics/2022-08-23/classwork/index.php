<?php
session_start();
// $message = ;
if(isset($_SESSION['error'])) {
        $message = "bad username or password";
    } else {
        $message = '';
    }

if(isset($_SESSION['user'])) {
    header('Location: location.php');
}
?>
<html>
<head>
<title> Login  </title>
</head>

<body>
<form action="login.php" method="post">
<? echo $message; ?>
    <table width="200" border="0">
  <tr>
    <td> UserName</td>
    <td> <input type="text" name="user" value="blackkoala816"> </td>
  </tr>
  <tr>
    <td> Password</td>
    <td><input type="password" name="pass" value="bigmike"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="LOGIN"></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>