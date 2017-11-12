<?php include 'database.php' ?>
 
<?php
 
// create a variable

//$strTab = $_POST['ttype'];
$strType = $_POST['fType'];
$strSessionId = $_POST['fSessionId'];

if($strType == "Personal")
{
	$Trainer_type="Personal";	
}
else
{
	$Trainer_type="Group";	
}

	$P_Title=$_POST['fTitle'];
	$P_Date=$_POST['fDate'];
	$P_Time=$_POST['fTime'];
	$P_Fee=$_POST['fFee'];
	$P_Notes=$_POST['fNotes'];
	$P_Status=$_POST['fStatus'];		
 
	/* echo "<script>
		alert('$Trainer_type, $P_Title, $P_Date, $P_Fee , $P_Notes, $P_Status');			
		</script>"; */	
 
 
//Execute the query
	
	mysqli_query($connect,"Update tbtrainerinfo set Title ='$P_Title' , Date ='$P_Date' , Time ='$P_Time', Fee ='$P_Fee' , Notes='$P_Notes' , Status ='$P_Status' where TrainerType = '$Trainer_type' and SessionId = '$strSessionId'");

	if(mysqli_affected_rows($connect) > 0)
	{		
		echo "<script>
		alert('Trainer Record Update Successfully.');
		window.location.href='TrainingUpdate.php';
		</script>";			
	} 
	else 
	{
		echo "<script>
			alert('Trainer Record Not Updated.');
			window.location.href='TrainingUpdate.php';
			</script>";	
		echo mysqli_error ($connect);
	}
	
	mysqli_close($connect);
?>