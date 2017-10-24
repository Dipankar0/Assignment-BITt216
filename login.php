<?php include 'database.php' ?>
 
<?php
 
// create a variable
$user_id=$_POST['user'];
$password=$_POST['password'];

//Execute the query
 
//$query ="Select id,user_id,password,user_type from tbLogin where user_id ='"$user_id"' and password ='"$password"'";
$query ="Select id,user_id,password,user_type from tbLogin where user_id='$user_id' and  password = '$password' order by id asc";

			
$result = mysqli_query($connect,$query) 
			or die('<script>alert("Error in query.");	window.location.href="login.html";	</script>');
			
//$row = mysqli_fetch_array($result);

$stractive="0";

while ($row = mysqli_fetch_array($result)) 
{	
	//echo $row['first_name'] . ' ' . $row['last_name'] . ': ' . $row['email'] . ' ' . $row['city'] .'<br />';

	$struser =$row['user_id'];
	$strpass =$row['password'];
	$strID =$row['id'];		
			
	if($struser == $user_id && $strpass == $password)
	{
		$stractive="1";	
		$strUType =$row['user_type'];			
	}	

	//echo "<script>alert('$stractive');</script>";		
}	

if($stractive == "1")
{
	if($strUType == "Trainer")
	{
		session_start();
		$_SESSION['loginUser'] = $struser; //$_POST["putIntoSession"]
		$_SESSION['loginPass'] = $strpass;
		$_SESSION['loginUserType'] = $strUType;
		$_SESSION['loginid'] = $strID;		
		
		echo "<script>			
		//window.location.href='TrainerHome.html?data=$strUType&$user_id';
		window.location.href='TrainerHome.php';
		</script>";
	}
	else
	{	
		session_start();
		$_SESSION['loginUser'] = $user_id;
		$_SESSION['loginPass'] = $password;
		$_SESSION['loginUserType'] = $strUType;
		$_SESSION['loginid'] = $strID;
				
		echo "<script>			
		//window.location.href='Userhome.html?data=$strUType&$user_id';
		window.location.href='Userhome.php';
		</script>";
	}
}
else
{
	echo "<script>
		alert('User id or password wrong.');
		window.location.href='login.html';
		</script>";	
}

mysqli_close($connect);
?>
