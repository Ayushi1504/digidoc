<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$connection=mysqli_connect('localhost','root','') or die(mysqli_error($connection));
mysqli_select_db($connection,"digidoc");
$sql="select username from login where username='$username' and password='$password'";
$result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
while($row=mysqli_fetch_assoc($result))
$_SESSION['user']=$_POST['username'];
$result2=mysqli_query($connection,"select did from doctor where username='$username'");
$result3=mysqli_query($connection,"select pid from patient where username='$username'");
while($row=mysqli_fetch_assoc($result2)){
header("Location:docportal.php");
exit;
}
while($row=mysqli_fetch_assoc($result3)){
header("Location:Patient_query.html");
exit;
}
mysqli_close($connection);
?>