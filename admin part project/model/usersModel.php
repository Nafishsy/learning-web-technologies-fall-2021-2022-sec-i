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

	function getIDByname($id){
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
		$sql = "select * from students where s_name like '%{$name}%'";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function SearchByNameForAccounts($name){
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
		$sql = "update students set status='{$status}' where s_id={$id}";


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

	function GetBio($username){
		$con = getConnection();
		$sql = "select post from posts where username='{$username}'";
		$s=mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($s);
		return $data;
	}

	function Post($user,$userpost){
		$con = getConnection();
		$sql = "insert into posts values('', '{$user['id']}', '{$userpost}', '{$user['username']}') ";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>
