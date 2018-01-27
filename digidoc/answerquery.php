<?php
$did=$_POST['did'];
$pid=$_POST['pid'];
$query=$_POST['query'];
$time=$_POST['time'];
echo "<html><body><div style='border:2px solid green'><table bgcolor='green' width='100%'><tr><td><img src='icon.png' alt='icon'></td><td><img src='digidoc.png' alt='digidoc' height='115'></td><td align='right'><table bgcolor='green' cellspacing='5'><tr><td><a href='home.php'><img src='home.png'></a></td><td><a href='logout.php'><img src='logout.png'></a></td></tr></table></td></tr></table><div></body></html>";
echo "<html><body background='1.jpg'><br><br><form action='viewhistory.php' method='POST'>";
echo "<input type='hidden' name='pid' value='$pid'><br>";
echo "<input type='submit' value='VIEW PATIENT HISTORY'></form></body></html>";
echo "<html><body background='1.jpg'><center><div style='border:4px solid green;spacing-left:5px;spacing-right:5px; background-color:white'><form action='processing.php' method='POST'>";
echo "PATIENT ID:<br><input type='hidden' name='pid' value='";
echo $pid;
echo "'>";
echo $pid;
echo "<br><br>QUERY:<input type='hidden' name='query' value='";
echo $query;
echo "'><br>";
echo $query;
echo "<br><input type='hidden' name='did' value='";
echo $did;
echo "' >";
echo "<br>RECOMMEND:<br><textarea name='recommend' rows='5' cols='50'></textarea><br>";
echo "MEDICATIONS:<br><textarea name='medicines' rows='5' cols='50'></textarea><br>";
echo "<input type='submit' value='POST'></form></div></center></body></html>";
?>