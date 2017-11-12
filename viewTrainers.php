<?php include 'database.php' ?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Trainer History</title>
	
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 	
	<link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Open+Sans:600">
	<link href="training.css" rel="stylesheet" type="text/css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">    
	<link href="UserHome.css" rel="stylesheet" type="text/css">
	  
</head>

<body style="background-color:#273746;">
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
			
	<form id="myForm" method="post">		
		<!-- <div class="col-sm-offset-2"> -->
		<div>
			<Center><label id="lblGreetings" style="color:#0DBEF9; font-size:2em;">TRAINER'S HISTORY</label></center>
		</div>
		<div class="container-fluid" style="color:#D7DBDD;">  
			<!-- <div class="row">
				<div class="col-sm-4">
				</div>
			</div>
			-->
			<?php 
	
			//$result = mysqli_query($connect,"Select * from tbtrainerinfo where TrainerType = 'Personal'");
			$result = mysqli_query($connect,"Select * from tbtrainerinfo order by TrainerType asc");
			//or die('<script>alert("Error in query.");	window.location.href="TrainingUpdate.php";	</script>');																			
			
			if (mysqli_num_rows($result) > 0) 
			{									
				$rowCount =0;
				$strTableData ='';
				$strTableData1 ='';
				$strTableData2 ='';
				
				
				$col = 4;
				$tr='';
				
				while($row = mysqli_fetch_assoc($result)) 
				{	
					$strSessionId	=$row['SessionId'];		
					$strTitle =$row['Title'];
					$strDate =$row['Date'];
					$strTime =$row['Time'];
					$strFee =$row['Fee'];
					$strNotes =$row['Notes'];
					$strStatus =$row['Status'];
					$strTrainerType =$row['TrainerType'];		
					$td='';
					
					/* echo "<script>
						alert('$strTitle, $strDate, $strTime, $strFee, $strNotes, $strStatus');			
					</script>"; */	 			
										
					if($strTrainerType == 'Personal')
					{
						$strTableData = "$strTableData <table border='0'><tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Session Id</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strSessionId</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Title</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTitle</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Date</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strDate</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Time</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTime</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Fee</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strFee</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Notes</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strNotes</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Status</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strStatus</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Type</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTrainerType</td></tr></table></br>"; 		
					}
					else						
					{
						$strTableData = "$strTableData <table border='0'><tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Session Id</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strSessionId</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Title</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTitle</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Date</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strDate</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Time</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTime</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">No Of Perticipents</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strFee</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Course</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strNotes</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Status</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strStatus</td></tr>
						<tr><td style=\"WIDTH: 90px;color:#D7DBDD;font-style:bold\">Type</td>
						<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
						<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTrainerType</td></tr></table></br>"; 		

					}
					$rowCount =$rowCount+1;
					
					
				}
				
				echo  $otp ="<center>".$strTableData."</center>";
				//echo $otp = "<table border='0'>".$tr."</table>";
					
					 /*  echo "<script>
						alert('$strTableData,$strClose');
						//document.getElementById('fStatus').value = '$strStatus';											
					</script>"; */  
			}
			mysqli_close($connect);
				
			?>
		</div>
	</form>
</body>
  
	
</html>