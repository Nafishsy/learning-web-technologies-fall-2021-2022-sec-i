<?php

	require_once('db.php');

	function validate($username, $password){
		$con = getConnection();
		$sql = "select * from accounts where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);

		if($data != null){
			return true;
		}else{
			return false;
		}
	}

	function addUser($user){
		$con = getConnection();
		$sql = "insert into accounts values('{$user['username']}', '{$user['password']}', '{$user['email']}','{$user['phone']}', '{$user['role']}','')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from accounts";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function getAllStudents(){
		$con = getConnection();
		$sql = "select * from students";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUserById($id){
		$con = getConnection();
		$sql = "select * from accounts where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}

	function getRolebyuName($user){
		$con = getConnection();
		$sql = "select * from accounts where username='{$user}'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}

	function SearchByName($name){
		$con = getConnection();
		$sql = "select * from accounts where username like '%{$name}%'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function editUser($user){
		$con = getConnection();
		$sql = "update accounts set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function setStatus($id,$status){
		$con = getConnection();
		echo $status;
		$sql = "update students set status='{$status}' where sid={$id}";


		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql = "delete from accounts where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>
