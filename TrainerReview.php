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
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">    
	<link href="UserHome.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		// Check Radio-box
		$(".rating input:radio").attr("checked", false);

		$('.rating input').click(function () {
			$(".rating span").removeClass('checked');
			$(this).parent().addClass('checked');
		});

		$('input:radio').change(
		  function(){
			var userRating = this.value;
			//alert(userRating);
		}); 
	});
	</script>
	
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
							<li><a href="SessionEnroll.php">SESSION ENROLL</a></li>
						   <li><a href="IndividualEnrollHistory.php">ENROLL HISTORY</a></li>	
						</ul>
					</li>
				 <li class="has-sub"><span class="submenu-button"></span><a href="#">TRAINING HISTORY</a>
				   <ul>
					  <li><a href="viewTrainingHistory.php">TRAINER</a></li>					 
				   </ul>
				</li>
					<li><a href="#">TRAINER REVIEW</a></li>
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
							<a class="btn btn-primary" type="button" onclick="MemberEdit.html" href="MemberEdit.html"><img src="user.jpg" height="30px" width="30px"></br><label id="sName"><?php session_start(); $uType =$_SESSION['loginUserType'];$uId =$_SESSION['loginUser']; echo "$uType-$uId"; ?></label> </br></br><b>UPDATE</b></a>
						</div>					  
					  </li>
				  </ul>
				</div>
			</div>
		</nav>
	</header>
			</br>
			
	<form id="myForm" method="post" action="SaveReview.php">		
		<!-- <div class="col-sm-offset-2"> -->
		<div>
			<Center><label id="lblGreetings" style="color:#0DBEF9; font-size:2.5em;">TRAINER REVIEW</label></center>
		</div>
		<BR/>
		<div class="container-fluid" style="color:#D7DBDD;">  
			<!-- <div class="row">
				<div class="col-sm-4">
				</div>
			</div>
			-->
			<?php 
			
			$char = '-';
			$strID = $_POST['review'];			
			$strsize = strlen($strID);
			
			$pos = strpos($strID, $char);
			
			$strType = substr($strID,0,strpos($strID, $char));
			$strSessionId = substr($strID,strpos($strID, $char)+1,strlen($strID));
			
			
			
			//$result = mysqli_query($connect,"Select * from tbtrainerinfo where SessionId = '$strSessionId' and TrainerType ='$strType'");
			
			//$result = mysqli_query($connect,"SELECT ti.*,l.User_id as 'TrainerName' FROM tbtrainerinfo ti inner join tblogin l on ti.TrainerId = l.id where ti.SessionId = '$strSessionId' and ti.TrainerType ='$strType'");
			
			$result = mysqli_query($connect,"SELECT ti.*,l.User_id as 'TrainerName',(Select count(User_Id) from tbEnrollInfo where Session_Id='$strSessionId' and Trainer_Type = '$strType') as 'PCount' FROM tbtrainerinfo 
			ti inner join tblogin l on ti.TrainerId = l.id where ti.SessionId = '$strSessionId' and ti.TrainerType = '$strType'");
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
					$strTrainerName =$row['TrainerName'];
					$strTrainerId =$row['TrainerId'];
					$strPCount =$row['PCount'];					
					$td='';
					
					/* echo "<script>
						alert('$strTitle, $strDate, $strTime, $strFee, $strNotes, $strStatus');			
					</script>"; */	 			
										
					
					$strTableData = "$strTableData <input type='text' name='fSessionId' value='$strSessionId' hidden>
					<input type='text' name='fType' value='$strTrainerType' hidden> 
					<input type='text' name='fTrainerId' value='$strTrainerId' hidden>
					<table border='0'><tr><td style=\"WIDTH: 130px;color:#D7DBDD;font-style:bold\">Session Id</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strSessionId</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Title</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTitle</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Date</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strDate</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Time</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTime</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Type</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTrainerType</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Fee</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strFee</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>					
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Status</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strStatus</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>					
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Max Participents</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">50</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>					
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Current Participents</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strPCount</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>					
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Trainer</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strTrainerName</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>					
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Speciality</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">$strNotes</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>					
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Rate Trainer</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;color:#D7DBDD;font-style:bold\">
					<span><input type='radio' name='rating' id='str5' value='5'><label for='str5'>*</label></span>
					<span><input type='radio' name='rating' id='str4' value='4'><label for='str4'>**</label></span>
					<span><input type='radio' name='rating' id='str3' value='3'><label for='str3'>***</label></span>
					<span><input type='radio' name='rating' id='str2' value='2'><label for='str2'>****</label></span>
					<span><input type='radio' name='rating' id='str1' value='1'><label for='str1'>*****</label></span>
					</td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>					
					<tr><td style=\"WIDTH: 130;color:#D7DBDD;font-style:bold\">Comments</td>
					<td style=\"WIDTH: 20px;color:#D7DBDD;font-style:bold\"> : </td>
					<td style=\"WIDTH: 200px;font-style:bold\"><textarea name='txtComment' cols='40' rows='3' placeholder='Type your comment.'></textarea></td></tr>
					<tr><td colspan='3' style=\"text-align:center\">&nbsp;</td></tr>
					<tr><td colspan='3'><button name='review' type='submit' value='$strSessionId'>Review</button></td></tr></table></br>"; 		
					
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