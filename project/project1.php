<?php  
session_start();

$db = mysqli_connect("localhost","root","","proj1");
$select = @mysqli_select_db("proj1");
echo $select;

if(isset($_POST['LOGIN']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	
	
	$sql = 'SELECT * FROM signup WHERE name="'.$username.'" AND pass="'.$password.'"';

	$result= mysqli_query($db,$sql);
	$res = mysqli_fetch_array($result);
	$id = $res['id'];
	if($result->num_rows > 0)
	{
		
		
		$_SESSION['message']="you are succesfully logged in";
			$_SESSION['user_id']=$id;
		
		
		//echo "hello";
		header("location: https://localhost/php/project/proj111.html");
	}
	else
	{
		
	
	      $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	}
	


	
	
}
	
	
	
?>


	