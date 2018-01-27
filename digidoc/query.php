<?php
session_start();
$un=$_SESSION['user'];
$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
mysqli_select_db($conn,"digidoc");
$query=$_POST['qry'];
$sp=$_POST['spl'];
$result2=mysqli_query($conn,"SELECT pid FROM patient WHERE username='$un'");
while($row=mysqli_fetch_assoc($result2)){
$pid=$row['pid'];
$result = mysqli_query($conn,"insert into pat_query (pid,did,query,specialisation,remarks,medicines,time) values ('$pid',0,'$query','$sp',NULL,NULL,CURRENT_TIMESTAMP)");
mysql_close($connection);
header("Location:Patient_query.html");
exit;
}
mysqli_close($conn);
?>