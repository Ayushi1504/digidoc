<?php
$con=mysqli_connect('localhost','root','') or die("Failed to connect to MySQL:".mysqli_error($con));
$db=mysqli_select_db($con,'digidoc') or die("Failed to connect to MySQL:".mysqli_error($con));
$pnm=$_POST['patname'];
$page=$_POST['patage'];
$pgen=$_POST['gender'];
$presadrs=$_POST['pres_address'];
$permadrs=$_POST['perm_address'];
$zip=$_POST['zipcode'];
$pmob=$_POST['patmob'];
$pmail=$_POST['patemail'];
$pusernm=$_POST['patusername'];
$ppswrd=$_POST['patpassword'];
$pid=mt_rand(1000, 9999);

$q2="INSERT INTO login(username,password)VALUES('$pusernm','$ppswrd')";
$result=mysqli_query($con,$q2);

if($result)
{
$q1="INSERT INTO patient(pname,pid,age,gender,perm_address,pres_address,pres_zip,contact,email,username)VALUES('$pnm','$pid','$page','$pgen','$permadrs','$presadrs','$zip','$pmob','$pmail','$pusernm')";
$result2=mysqli_query($con,$q1);
if($result2)
{

header("location:home.php");
exit;
}
else
{
header("location:patregister.html");
exit;
}
}
else
{
header("location:patregister.html");
exit;
}
mysqli_close($con);
?>


