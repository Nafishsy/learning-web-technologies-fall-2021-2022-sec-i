<?php
	require_once('../model/usersModel.php');
	$id = $_REQUEST['id'];
	$status = deleteUser($id);

	if($status){
		header('location: ../views/userlist.php');
	}else{
		header('location: ../views/userlist.php');
	}

?>
