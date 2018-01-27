<?php
$con=mysqli_connect('localhost','root','') or die("Failed to connect to MySQL:".mysqli_error($con));
$db=mysqli_select_db($con,'digidoc') or die("Failed to connect to MySQL:".mysqli_error($con));
$dnm=$_POST['docname'];
$dmob=$_POST['docmob'];
$dmail=$_POST['docemail'];
$spl=$_POST['special'];
$dusernm=$_POST['docusername'];
$dpswrd=$_POST['docpassword'];
$did=mt_rand(1000, 9999);
$q2="INSERT INTO login(username,password)VALUES('$dusernm','$dpswrd')";
$result=mysqli_query($con,$q2);

if($result)
{
$q1="INSERT INTO doctor(did,dname,contact,email,specialisation,username)VALUES('$did','$dnm','$dmob','$dmail','$spl','$dusernm')";
$result2=mysqli_query($con,$q1);
if($result2)
{

header("location:home.php");
exit;
}
else
{
header("location:docregister.html");
exit;
}
}
else
{
header("location:docregister.html");
exit;
}
mysqli_close($con);
?>