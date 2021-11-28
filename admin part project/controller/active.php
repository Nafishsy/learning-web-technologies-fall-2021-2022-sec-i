<?php

	require_once('../model/usersModel.php');

	$sid = $_REQUEST['sid'];
	$status = $_REQUEST['status'];

	$user = getUserById($sid);

  if(setStatus($sid,$status))
	{
		header('location: ../views/registrationList.php');
	}
	else {
		echo "ERROR While Changing";
	}


?>
