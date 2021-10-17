<?php

	if(isset($_POST['submit']) ){

		$id 	= $_POST['id'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$cpassword 	= $_POST['cpassword'];
		$role 	= $_POST['role'];

		if($username != ""){
			if($password != "" and $id!=""){
				if($_POST['password']==$_POST['cpassword']){

					$myfile = fopen('user.txt', 'a');
					$myuser = $id."|".$username."|".$password."|".$role."\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);

					header('location: login.html');
				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>
