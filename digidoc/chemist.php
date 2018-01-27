<?php
$zip=$_POST['zip'];
$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
mysqli_select_db($conn,"digidoc");
$sql="SELECT name,address,zip FROM chemist WHERE zip='$zip'";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
echo "<html><body><div style='border:2px solid green'><table bgcolor='green' width='100%'><tr><td><img src='icon.png' alt='icon'></td><td><img src='digidoc.png' alt='digidoc' height='115'></td><td align='right'><table bgcolor='green' cellspacing='5'><tr><td><a href='home.php'><img src='home.png'></a></td><td><a href='logout.php'><img src='logout.png'></a></td></tr></table></td></tr></table><div></body></html>";
echo"<html><body background='1.jpg'><center><div style='border:2px solid green;margin-top:150px;padding-left:100px;padding-right:100px'><table border='1' cellspacing='3' cellpadding='4'  bgcolor='white'><tr><td width='150'>Chemist Name</td><td width='200'>Address</td><td width='100'>Zipcode</td></tr></table></div></center></body></html>";
while($row=mysqli_fetch_assoc($result))
	echo "<html><body background='1.jpg'><center><div style='border:2px solid green;padding-left:100px;padding-right:100px'><table border='1' cellspacing='3' cellpadding='4'  bgcolor='white'><tr><td width='150'>".$row['name']."</td><td width='200'>".$row['address']."</td><td width='100'>".$row['zip']."</td></tr></table></div></center></body></html>";
echo "<br><br><br><html><body background='1.jpg'><center><form action='Patient_query.html' method='POST'><button type='submit'>OK</button></form></center></body></html>";
?>