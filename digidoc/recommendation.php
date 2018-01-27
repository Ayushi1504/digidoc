<?php
$did=$_POST['did'];
$connection=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($connection,'digidoc');
#the data is accesssed from table for answered queries
$result=mysqli_query($connection,"select pid,time,query,remarks,medicines from pat_query where did='$did' and remarks is  not null");
echo "<html><body><div style='border:2px solid green'><table bgcolor='green' width='100%'><tr><td><img src='icon.png' alt='icon'></td><td><img src='digidoc.png' alt='digidoc' height='115'></td><td align='right'><table bgcolor='green' cellspacing='5'><tr><td><a href='home.php'><img src='home.png'></a></td><td><a href='logout.php'><img src='logout.png'></a></td></tr></table></td></tr></table><div></body></html>";
while ($row=mysqli_fetch_array($result))
{
 echo "<html><body background='1.jpg'><center><div style='border:2px solid green;padding-left:100px;padding-right:100px'><br><br><table border='1' cellspacing='2' cellpadding='2' bgcolor='white'>";
 echo "<tr><td><b>Patient Id</b></td><td>";
 echo  $row['pid'];
 echo  "</td></tr><tr><td><b>Time</b></td><td>";
 echo  $row['time'];
 echo  "</td></tr><tr><td><b>Query</b></td><td>";
 echo  $row['query'];
 echo "</td></tr><tr><td><b>Remark</b></td><td>";
 echo  $row['remarks'];
 echo  "</td></tr><tr><td><b>Medicines</b></td><td>";
 echo  $row['medicines'];
 echo  "</td></tr></table></div><br></center></body></html>";
}
mysqli_close($connection);

?>
