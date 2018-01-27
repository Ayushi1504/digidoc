<!DOCTYPE html>
<html>
<head>
<title>DigiDoc</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body background="1.jpg">
<div style='border:2px solid green'>
<?php
session_start();
if(isset($_SESSION['user']))
echo "<html><body><table bgcolor='green' width='100%'><tr><td><img src='icon.png' alt='icon'></td><td><img src='digidoc.png' alt='digidoc' height='115'></td>
<td align='right'><table bgcolor='green' cellspacing='5'><tr><td><a href='logout.php'><img src='logout.png'></a></td><td><a href='home.php'><img src='home.png'></a></td></tr></table></td></tr></table></body></html>";
else
echo "<html><body><table bgcolor='green' width='100%'><tr><td><img src='icon.png' alt='icon'></td><td><img src='digidoc.png' alt='digidoc' height='115'></td>
<td align='right'><table bgcolor='green' cellspacing='5'><tr><td><a href='login.html'><img src='login.png'></a></td><td><a href='register.html'><img src='register.png'></a></td><td><a href='home.php'><img src='home.png'></a></td></tr></table></td></tr></table></body></html>";
?>
<div>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">	
     <div class="item active">
       <img src="steth.jpg" alt="DigiDoc">
        <div class="carousel-caption"><b>
          <h3>DIGIDOC: GET INSTANT HELP</h3>
          <p>Get Online Medical Assistance From Experienced Doctors.</p></b>
        </div>
      </div>
      <div class="item">
        <a href="exercise.html"> <img src="exercise.jpg" alt="Exercises">
        <div class="carousel-caption">
          <font color="blue"><b>
          <h3>EVERYDAY EXERCISE</h3>
          <p>Learn How Exercise Can Keep You Fit.</p></b>
          </font>
        </div>
	</a>
      </div>
      <div class="item">
        <img src="blood.jpg" alt="Blood Donation" onclick="window.location.href='http://www.bloodconnect.org'">
        <div class="carousel-caption">
          <font color="black"><b>
          <h3>BLOOD DONATION</h3>
          <p>Donate Blood For A Good Cause.</p>
          </b></font>
        </div>
      </div>
      <div class="item">
        <a href="diet.html"><img src="dietcover.jpg" alt="Diet">
        <div class="carousel-caption">
          <font color="black"><b>
          <h3>DIET PLAN</h3>
          <p>Create A Balanced Diet Plan For A Healthy Living.</p>
          </b></font>
        </div></a>
      </div>
      <div class="item">
        <a href="Hospital_query.html"><img src="hospital.jpg" alt="Hospital">
        <div class="carousel-caption">
          <font color="red"><b>
          <h3>SEARCH NEARBY HOSPITALS</h3>
          <p>Locate Nearby Hospitals In Case Of Emergency.</p>
          </b></font>
        </div></a>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>
