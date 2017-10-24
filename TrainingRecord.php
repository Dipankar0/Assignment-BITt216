
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Record New Training Session</title>
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
	
	<link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Open+Sans:600">
	<link href="training.css" rel="stylesheet" type="text/css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    
	<link href="UserHome.css" rel="stylesheet" type="text/css">
  
	
	
	  <script>
		  	$(document).ready(function() {
			$('#pdate').datepicker({
			  dateFormat: "dd-mm-yy",
			  weekStart: 6,
			  daysOfWeekHighlighted: "6",
			  autoclose: true,
			  todayHighlight: true,
			  changeMonth: true,
			  changeYear: true          
			  });
			  
			  $('#gdate').datepicker({
			  dateFormat: "dd-mm-yy",
			  weekStart: 6,
			  daysOfWeekHighlighted: "6",
			  autoclose: true,
			  todayHighlight: true,
			  changeMonth: true,
			  changeYear: true          
			  });	 	  
		  });
	  </script>
  

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
				  <li><!-- <div style="padding:10px 10px;"><a class="btn btn-primary" type="button" onclick="SignUp.html" href="UserEdit.html">UPDATE</a> </div> -->
					<div style="padding:10px 10px;">
						<a class="btn btn-primary" type="button" onclick="UserEdit.html" href="UserEdit.html"><img src="user.jpg" height="30px" width="30px"><br><label id="sName"><?php session_start(); $uType =$_SESSION['loginUserType'];$uId =$_SESSION['loginUser']; echo "$uType-$uId"; ?></label> <br><br><b>UPDATE</b></a>
					</div>
				 </li>
			  </ul>
			</div>
		</div>
	</nav>
	</header>
			<br>
<form id="myForm" method="post" action="SaveTrainer.php">
  <div class="login-wrap">
	<div class="login-html">		
		<input id="tab-1" type="radio" name="tab" class="personal-training" value="P" checked><label for="tab-1" class="tab">Personal Training Session</label>
		<input id="tab-2" type="radio" name="tab" class="group-training" value = "G" ><label for="tab-2" class="tab">Group Training Session</label>
		
			<div class="login-form">	
				
			<input id="ttype" NAME="ttype" type="text" value="Personal" hidden>			
				<div class="personal-training-htm">
					<div class="group">
						<label for="user" class="label">Title</label>
						<input id="title" NAME="title" type="text" class="input">
					</div>
					<div class="group">
						<label for="user" class="label">Date</label>
						<input id="pdate" name="pdate" type="text" class="input">
					</div>
					<div class="group">
						<label for="user" class="label">Time</label>
						<input id="ptime" name="ptime" type="text" class="input">
					</div>
					<div class="group">
						<label for="user" class="label">Fee</label>
						<input id="fee" name="fee" type="number" class="input" >
					</div>
					<div class="group">
						<label for="user" class="label">Notes</label>
						<input id="notes" name ="notes" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">Status</label>
						 <select id="status" name="status" class="form-control">
						  <option>Available</option><option>Complete</option>
						  <option>Cancelled</option>
						</select>
					</div>
					<div class="group">					
						<input type="submit" id="submit" class="button" value="SAVE">
					</div>

				</div>			
				<div class="group-training-htm">				
					<div class="group">
						<label for="user" class="label">Title</label>
						<input id="gtitle" name="gtitle" type="text" class="input">
					</div>
					<div class="group">
						<label for="user" class="label">Date</label>
						<input id="gdate" name="gdate" type="text" class="input">
					</div>
					<div class="group">
						<label for="user" class="label">Time</label>
						<input id="gtime" name ="gtime" type="text" class="input">
					</div>
					<div class="group">
						<label for="user" class="label">No of Perticipants</label>
						<input id="gfee" name="gfee" type="number" class="input">
					</div>
					<div class="group">
						<label for="user" class="label">Course</label>
						<select id="gnotes" name="gnotes" class="form-control">
						  <option>Sports</option>
						</select>
					</div>
					<div class="group">
						<label for="pass" class="label">Status</label>
						 <select id="gstatus" name="gstatus" class="form-control">
						  <option>Available</option><option>Complete</option>
						  <option>Cancelled</option>
						</select>
					</div>
					<div class="group">					
						<input type="submit" id="submit" class="button" value="SAVE">
					</div>					
				</div>	
							
			</div>	
	</div>
</div>  
</form>			
</body>
</html>
