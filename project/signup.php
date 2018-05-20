<?php

session_start();

$db = mysqli_connect("localhost","root","","proj1");
$select = @mysqli_select_db("proj1");





if(isset($_GET['OK']))
{
	
	$user=$_GET['name'];
	$pass=$_GET['pass'];
	$addr=$_GET['addr'];
	$mob=$_GET['mob'];
	$mail=$_GET['mail'];
	
	$sql = 'INSERT INTO `signup`(`id`, `name`, `pass`,`addr`,`mob`,`mail`) VALUES (NULL,"'.$user.'","'.$pass.'","'.$addr.'","'.$mob.'","'.$mail.'")';
	$result= mysqli_query($db,$sql);
	

header("location:http://localhost/php/project/proj1.html");
	echo $sql;
	
	
	}
	
	

	
	
	




?>