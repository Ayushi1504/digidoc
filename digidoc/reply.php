<?php
session_start();
$un=$_SESSION['user'];
$conn=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($conn,'digidoc');
$result=mysqli_query($conn,"SELECT pid FROM patient WHERE username='$un'");
while ($row=mysqli_fetch_array($result))
$pid=$row['pid'];
$result=mysqli_query($conn,"SELECT time,query,remarks,medicines FROM pat_query WHERE pid='$pid' ORDER BY time DESC");
echo "<html><body><div style='border:2px solid green'><table bgcolor='green' width='100%'><tr><td><img src='icon.png' alt='icon'></td><td><img src='digidoc.png' alt='digidoc' height='115'></td><td align='right'><table bgcolor='green' cellspacing='5'><tr><td><a href='home.php'><img src='home.png'></a></td><td><a href='logout.php'><img src='logout.png'></a></td></tr></table></td></tr></table><div></body></html>";
echo "<html><body background='1.jpg'><center><div style='border:2px solid green;padding-left:100px;padding-right:100px'><br><br><table border='1' cellspacing='2' cellpadding='2' bgcolor='white'><tr><td width='150'>Time</td><td width='250'>Query</td><td width='350'>Remarks</td><td width='250'>Medicines</td></tr></table></div></center></body></html>";
while ($row=mysqli_fetch_array($result))
{
 echo "<html><body background='1.jpg'><center><div style='border:2px solid green;padding-left:100px;padding-right:100px'><table border='1' cellspacing='2' cellpadding='2' bgcolor='white'><tr><td width='150'>".date("Y-m-d H:i:s",strtotime($row['time']))."</td><td width='250'>".$row['query']."</td><td width='350'>".$row['remarks']."</td><td width='250'>".$row['medicines']."</td></tr></table></div></center></body></html>";
}
?>