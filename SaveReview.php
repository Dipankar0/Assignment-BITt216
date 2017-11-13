<?php include 'database.php' ?>
 
<?php
 
// create a variable

session_start();
		
$strID = $_SESSION['loginid'] ;	
$strSessionId = $_POST['fSessionId'];
$strType = $_POST['fType'];
$strRating= $_POST['rating'];
$strComment = $_POST['txtComment'];
$strTrainerId = $_POST['fTrainerId'];


 
	/* echo "<script>
		alert('$Trainer_type, $P_Title, $P_Date, $P_Fee , $P_Notes, $P_Status');			
		</script>";	 */
 
 
//Execute the query

		
		mysqli_query($connect,"INSERT INTO tbTrainerReview (SessionId, TrainerId, Rate,Comments,Type,Review_User_by)
					VALUES ('$strSessionId','$strTrainerId','$strRating','$strComment','$strType','$strID')");
					
		if(mysqli_affected_rows($connect) > 0)
		{
			echo "<script>
				alert('Review Entry Save Successfully.');
				window.location.href='viewTrainingHistory.php';
				</script>";	
			//echo "<a href="index.html">Go Back</a>";
		} 
		else 
		{
			echo "<script>
				alert('Review Entry Not Save.');
				window.location.href='viewTrainingHistory.php';
				</script>";	
			echo mysqli_error ($connect);
		}	
		
	mysqli_close($connect); 
?>