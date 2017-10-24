<?php include 'database.php' ?>
 
<?php
 
// create a variable
$full_name=$_POST['fullName'];
if($_POST['utype'] == "V1")
{
	$user_type="Member";
}
else
{
	$user_type="Trainer";
}
$user_id=$_POST['userName'];
$password=$_POST['password'];
$confirm_password=$_POST['confirmPass'];
$email=$_POST['email'];
$entry_level=$_POST['item'];
 
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO tbLogin (full_name,user_type,user_id,password,confirm_password,email,entry_level)
		        VALUES ('$full_name','$user_type','$user_id','$password','$confirm_password','$email','$entry_level')");
				
	if(mysqli_affected_rows($connect) > 0)
	{
		echo "<script>
			alert('User Entry Save Successfully.');
			window.location.href='login.html';
			</script>";	
		//echo "<a href="index.html">Go Back</a>";
	} 
	else 
	{
		echo "<script>
			alert('User Entry Not Save.');
			window.location.href='Signup.html';
			</script>";	
		echo mysqli_error ($connect);
	}
	
	mysqli_close($connect);
?>