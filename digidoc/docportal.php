<?php
session_start();
$doc=$_SESSION['user'];
$connection=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($connection,'digidoc');
$result10=mysqli_query($connection,"select did from doctor where username='$doc'");
while($row=mysqli_fetch_array($result10)){
$did=$row['did'];
}
echo "<html><body><div style='border:2px solid green'><table bgcolor='green' width='100%'><tr><td><img src='icon.png' alt='icon'></td><td><img src='digidoc.png' alt='digidoc' height='115'></td><td align='right'><table bgcolor='green' cellspacing='5'><tr><td><a href='home.php'><img src='home.png'></a></td><td><a href='logout.php'><img src='logout.png'></a></td></tr></table></td></tr></table><div></body></html>";
echo "<html><head><title>DOCTOR'S PORTAl</title></head><body background='1.jpg'><form action='recommendation.php' method='post'>";
echo"<input type='hidden' name='did' value='";
echo $did;
echo"'>";
echo"<br><br><br><input type='submit' value='Recommendation history'><br></form></body></html>";
echo "<html><body background='1.jpg'><center><b><h2>PATIENT QUERIES </center></h2></b>";
echo"<div style='border:2px solid green;padding-left:100px;padding-right:100px'>";
$result12=mysqli_query($connection,"select specialisation from doctor where did='$did'");
while($row2=mysqli_fetch_array($result12)){
$specialisation=$row2['specialisation'];
}

$result=mysqli_query($connection,"select * from pat_query where specialisation='$specialisation' and remarks is null");
while($row3=mysqli_fetch_array($result)){
echo "<center><table border='1' width='1000' bgcolor='white'><tr><td><form action='answerquery.php' method='post'><center>PATIENT ID:<input type='hidden' name='did' value='".$did."'><br><input type='hidden' name='pid' value='".$row3['pid']."'>".$row3['pid']."<br><br>QUERY:<br>";
echo $row3['query'];
echo "<br><br><input type='hidden' name='query' value='".$row3['query']."'><input type='hidden' name='time' value='".$row3['time']."'>";
echo "<br>TIME OF QUERY:<br>".date("Y-m-d H:i:s",strtotime($row3['time']));
echo "<br><br><input type='submit' value='RECOMMEND'></center></form></td></tr></table></center>";
}
echo "</div></body></html>";
mysqli_close($connection);
?>
