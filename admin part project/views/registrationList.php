<?php
	include('header.php');
	require_once('../model/usersModel.php');
	$result = getAllStudents();
	$count = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration List</title>
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

	<form method="post" action="../controller/SearchCheck.php">
		<input type="text" name="search" value="" oninput="nameValid()" id="name">
		<input type="submit" name="searchName" value="Search by name">
		<p id="nError" style="color:red">

		<br><br>
	</form>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>STATUS</th>
			<th>set STATUS</th>

		</tr>

	<?php while($data = mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?=$data['s_id']?></td>
			<td><?=$data['s_name']?></td>
			<td><?=$data['s_email']?></td>
			<td>
				<?php if($data['status']=='ACTIVE')
				echo "<h5 style=color:green;>ACTIVE ✓</h2>";
				elseif ($data['status']=='PENDING') {
					echo "<h5 style=color:yellow;>PENDING !!</h2>";
				}
				else {
					echo "<h5 style=color:red;>REJECTED X</h2>";
				}
			?></td>

			<td>

				<a href="../controller/active.php?sid=<?=$data['s_id']?>&status=<?='ACTIVE'?>"> ACTIVE </a> |
				<a href="../controller/active.php?sid=<?=$data['s_id']?>&status=<?='PENDING'?>"> PENDING </a> |
				<a href="../controller/active.php?sid=<?=$data['s_id']?>&status=<?='REJECTED'?>"> REJECTED </a>

			</td>
		</tr>

	<?php } ?>
	</table>
</body>
</html>
