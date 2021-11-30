<?php

	require_once('../model/usersModel.php');

	$id = $_REQUEST['id'];
	//echo $id;
	$user = getUserById($id);
	//print_r($user);
?>

<html>
<head>
	<title>Edit user</title>

	<script>
function nameValid() {

	let x = document.getElementById("name").value;

	let e=document.getElementById("nError");

	let text

	if(x=='')
	{
		text="Please fill the input field";
	}
	else if (!isNaN(x))
	{
		text="Username cannot be just a number";
	}
	else {
		text= '';
	}
	e.innerHTML = text;
}

function passValid() {

	let x = document.getElementById("pass").value;

	let e=document.getElementById("nPass");

	let text

	if(x=='')
	{
		text="Please fill the input field";
	}
	else if (!isNaN(x))
	{
		text="Password cannot be just a number";
	}
	else {
		text= '';
	}
	e.innerHTML = text;
}

function emailValid() {

	let x = document.getElementById("mail").value;

	let e=document.getElementById("nMail");

	let text

	if(x=='')
	{
		text="Please fill the input field";
	}
	else if (!isNaN(x))
	{
		text="Email cannot be just a number";
	}
	else {
		text= '';
	}
	e.innerHTML = text;
}

function phoneValid() {

	let x = document.getElementById("phone").value;

	let e=document.getElementById("nPhone");

	let text;

	if(x=='')
	{
		text="Please fill the input field";
	}
	else if (isNaN(x))
	{
		text="Phone number must be just a number";
	}
	else {
		text= '';
	}
	e.innerHTML = text;
}


</script>
</head>
<body>
	<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>



	<form method="post" action="../controller/updateUser.php">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="<?=$user['username']?>" oninput="nameValid()" id="name">
					<p id="nError" style="color:red"> </p></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="<?=$user['password']?>" oninput="passValid()" id="pass">
						<p id="nPass" style="color:red"> </p> </td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value="<?=$user['email']?>"oninput="emailValid()" id="mail">
					<p id="nMail" style="color:red"> </p> </td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
