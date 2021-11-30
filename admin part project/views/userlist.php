<?php
	include('header.php');
	require_once('../model/usersModel.php');
	$result = getAllUsers();
	$count = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List</title>
	<style>
			table {
		width: 100%;
		border: 1px solid black;
		}
			th,td {
	  text-align: left;
	}
	</style>
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
</script>
</head>
<body>

	<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>

	<form method="post" action="../controller/SearchCheckForUsers.php">
		<input type="text" name="search" value="" oninput="nameValid()" id="name">
		<input type="submit" name="searchName" value="Search by name"> <br><br>
		<p id="nError" style="color:red">
	</form>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
			<th>ROLE</th>
		</tr>

	<?php while($data = mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?=$data['id']?></td>
			<td><?=$data['username']?></td>
			<td><?=$data['password']?></td>
			<td><?=$data['email']?></td>
			<td><?=$data['role']?></td>
			<td>
				<a href="edit.php?id=<?=$data['id']?>"> EDIT </a> |
				<a href="delete.php?id=<?=$data['id']?>"> DELETE </a>
			</td>
		</tr>

	<?php } ?>
	</table>
</body>
</html>
