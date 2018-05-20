<?php  
	session_start();
	

$db = mysqli_connect("localhost","root","","proj1");
$select = @mysqli_select_db("proj1");



if(isset($_GET['MAKE_COMPLAINT']))
{
	
	$title=$_GET['complaint_title'];
	$des=$_GET['description'];
	
	$sql = 'INSERT INTO `complaint`(`complaint_id`, `complaint_title`, `description`,`user_id`) VALUES (NULL,"'.$title.'","'.$des.'","'.$_SESSION['user_id'].'")';
	$result= mysqli_query($db,$sql);
	 $message = "COMPLAINT SUCCESSFULLY REGISTERED";
  echo "<script type='text/javascript'>alert('$message');</script>";

  header("location:http://localhost/php/project/proj1.html");
  }
?>