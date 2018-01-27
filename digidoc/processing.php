<?php
$did=$_POST['did'];
$pid=$_POST['pid'];
$medicines=$_POST['medicines'];
$remarks=$_POST['recommend'];
$query=$_POST['query'];
$connection=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($connection,'digidoc');
$result=mysqli_query($connection,"update pat_query set remarks='$remarks',did='$did',medicines='$medicines' where  pid='$pid' and query='$query'");
mysqli_close($connection);
header("location:docportal.php");
exit;
?>
