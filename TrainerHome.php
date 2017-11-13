<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap-social.css" rel="stylesheet">
  <link href="UserHome.css" rel="stylesheet" type="text/css">

<title>HOME</title>

<!-- <script type="text/javascript" language="javascript">   
	var strData = window.location.search.substring(6); //localStorage.getItem('data')
	alert(strData);	
	document.getElementById('sName').innerHTML = 'your tip has been submitted!';	
</script> -->

</head>

<body style="background-color:#082D54;
      color:#2C3E50;">
 
	<header>
		<nav class="navbar navbar-inverse" id="cssmenu">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a href="index.html"><img src="a1.png" alt="GET-FIT LOGO"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right" style="display:block">
				<li class="active"><a href="TrainerHome.php">Home</a></li>
				<li class="has-sub"><span class="submenu-button"></span><a href="#">TRAINING</a>
				   <ul>
					  <li><a href="TrainingRecord.php">RECORD NEW TRAINING</a></li>
					  <li><a href="TrainingUpdate.php">UPDATE TRAINING</a></li>
				   </ul>
				</li>
				 <li class="has-sub"><span class="submenu-button"></span><a href="#">TRAINING HISTORY</a>
				   <ul>
					  <li><a href="viewTrainers.php">TRAINER</a></li>
				   </ul>
				</li>
				<li><a href="IndividualTrainerReview.php">TRAINER REVIEW</a></li>
				<li><a href="#">CONTACT US</a></li>
				<li><form class="form-inline" style="padding-top:10px;">
				   <input class="form-control" type="text" placeholder="Search">
				   <button class="btn btn-outline-success" type="submit">GO</button>
				 </form></li>
					<li>
					 <div style="padding:10px 10px;">
						<a class="btn btn-primary" type="button" onclick="SignUp.html" href="index.html">SIGN OUT</a>
					 </div>
					</li>
					<li>
					 <div style="padding:10px 10px;">
						<a class="btn btn-primary" type="button" onclick="UserEdit.html" href="UserEdit.html"><img src="user.jpg" height="30px" width="30px"></br><label id="sName"><?php session_start(); $uType =$_SESSION['loginUserType'];$uId =$_SESSION['loginUser']; echo "$uType-$uId"; ?></label> </br></br><b>UPDATE</b></a>
					 </div>
					</li>
			  </ul>
			</div>
		</div>
		</nav>
	</header>
  <div id="myCarousel" >

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="a3.jpg">
        <div class="carousel-caption">
          <h1 style="color:#F4F6F6"><?php $uId =$_SESSION['loginUser']; echo "WELCOME TO $uId"; ?></h1><br>
    </div>
  </div>
</div>

</div>
<div class="container text-center">
  <h2 style="color:#CACFD2; margin:5px 0px 15px;">WHAT'S NEW  FOR YOU</h2>
  <div class="row" id="middleimg">
    <div class="col-sm-4">
    <a href="#"><img src="a13.jpg" id="icon"></a>
    <a href="#"><h4>AUGUST MEMBER PARTY</h4></a>
  </div>
  <div class="col-sm-4">
    <a href="#"><img src="a11.jpg" id="icon"></a>
    <a href="#"><h4>NEW SEPTEMBER SEASON: TEAMTRAINING</h4></a>
</div>
<div class="col-sm-4">
  <a href="#"><img src="a12.jpg" id="icon"></a>
  <a hef="#"><h4>AUGUST THEMED GROUP FITNESS CLASSES</h4></a>
</div>
</div>
<div class="col-sm-12 btn">
  <a href="#"><button class="btn-outline-success" type="submit"
     style="font-size:1.8em; margin:15px; text:center; ">SEE ALL NEW</button></a>
   </div>
   <section class="features" style="color:#F0F3F4;">
   <h3 class="text-center"> Be healthy Get Fit @ HELPfit  </h3>
       <p class="copy">
   There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
       </p>
       <div class="container">
       <div class="row">
       <div class="col-md-3">
           <i class="fa fa-camera"></i>
       <h4>  Stay Fit </h4>
       <p class="arranging">
   Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem
       </p>
       </div>
       <div class="col-md-3">
       <i class="fa fa-certificate"></i>
       <h4>Stay Connected </h4>
       <p class="arranging">
   Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
       </p>
       </div>
       <div class="col-md-3">
       <i class="fa fa-envelope"></i>
       <h4> Take Healthy Diet </h4>
       <p class="arranging">
   Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
       </p>
       </div>
       <div class="col-md-3">
       <i class="fa fa-cog"></i>
       <h4>Start Training </h4>
       <p class="arranging">
   Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
       </p>
       </div>
       </div>
       </div>

   </section>
 </div>
<footer class="container-fluid">
  <div class="row">
    <div class="col-sm-5">
      <h3>Our Address<h3>
        <h5>07-15, Block E, Pasific Place, Selangor, Malaysia.</h5>
  </div>
  <div class="col-sm-3" style=" padding-top:12px;">
    <img src="a1.png" style="height:100px; width:110px;" alt="GET-FIT LOGO">
  </div>
  <div class="col-sm-4">
    <h3>Contact</h3>
    <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><span class="fa fa-google-plus"></span></a>
      <a class="btn btn-social-icon btn-facebook" href="http://facebook.com/"><span class="fa fa-facebook"></span></a>
        <a class="btn btn-social-icon btn-linkedin" href="http://linkedin.com/"><span class="fa fa-linkedin"></span></a>
          <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><span class="fa fa-twitter"></span></a>
            <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><span class="fa fa-youtube"></span></a>

  </div>
  <div class="col-xs-12">
    <p style="padding:10px;"></p>
    <p align="center">© Copyright 2017 GET-FIT Fitness / All Rights Reserved</p>
  </div>
</div>

</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</body>
</html>
