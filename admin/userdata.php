<?php 
	if(!($_SESSION['id']))
	{
		header("Location:http://localhost/uipractice/login.php");
	}

	include('../connection.php');
	$user_id = $_SESSION['id'];
	$query = mysql_query("SELECT * FROM admin_registrations WHERE id='$user_id'");
	$row = mysql_fetch_array($query);
	$user_id = $row['id'];
	$user_name = $row['username'];
?>