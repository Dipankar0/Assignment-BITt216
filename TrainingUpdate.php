<html>
<head>
  <meta charset="UTF-8">
  <title>Update Training Session</title>
	
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 	
	<link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Open+Sans:600">
	<link href="training.css" rel="stylesheet" type="text/css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">    
	<link href="UserHome.css" rel="stylesheet" type="text/css">
	  
</head>

<body>
	<header>
		<nav class="navbar navbar-inverse" id="cssmenu">
			<div id="head-mobile"></div>
			<div class="button"></div>
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
					<li class="active"><a href="index.html">Home</a></li>
					<!-- <li><a href="#">TRAINING</a></li> -->
					<li class="has-sub"><span class="submenu-button"></span><a href="#">TRAINING</a>
					   <ul>
						  <li><a href="TrainingRecord.php">RECORD NEW TRAINING</a></li>
						  <li><a href="TrainingUpdate.php">UPDATE TRAINING</a></li>
					   </ul>
					</li>
				 <li class="has-sub"><span class="submenu-button"></span><a href="#">TRAINING HISTORY</a>
				   <ul>
					  <li><a href="viewTrainers.php">TRAINER</a></li>
					  <li><a href="viewMemberHistory.php">USER</a></li>
				   </ul>
				</li>
					<li><a href="IndividualTrainerReview.php">TRAINER REVIEW</a></li>
					<li><form class="form-inline" style="padding-top:10px;">
					   <input class="form-control" type="text" placeholder="Search">
					   <button class="btn btn-outline-success" type="submit">GO</button>
					 </form>
					</li>
					<li>
						<div style="padding:10px 10px;">
							<a class="btn btn-primary" type="button" href="index.html">SIGN OUT</a>
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
			</br>
			
	<form id="myForm" method="post" action="SearchTrainerRecord.php">		
		  <div class="login-wrap">
			<div class="login-html">			
				<input id="tab-1" name="tab" class="personal-training" value="P" checked="" type="radio"><label for="tab-1" class="tab">Personal Training Session</label>
				<input id="tab-2" name="tab" class="group-training" value="G" type="radio"><label for="tab-2" class="tab">Group Training Session</label>
				<div class="login-form">
					<div class="personal-training-htm">
						<div class="group">
							<label for="user" class="label">Session Id :</label>
							<input id="psessionId" name="psessionId" class="input" type="text">
						</div>
						
						<div class="group">
							<!-- <input id="find" class="button" value="Find" onclick="return createTable()" type="button"> -->
							<div class="group">
								<input type="submit" id="find" class="button" value="FIND">
							</div>
						</div>		
						<div id="tableDiv" style="text-align:center">
							
						</div>						
					</div>
					<div class="group-training-htm">
						<div class="group">
							<label for="user" class="label">Session Id :</label>
							<input id="gsessionId" name="gsessionId" class="input" type="text">
						</div>
						
						<div class="group">
							<input type="submit" id="find" class="button" value="FIND">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
  
	
</html>