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
</head>
<body>

	<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>

	<form method="post" action="../controller/SearchCheck.php">
		<input type="text" name="search" value="" />
		<input type="submit" name="searchName" value="Search by name"> <br><br>
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
			<td><?=$data['sid']?></td>
			<td><?=$data['sName']?></td>
			<td><?=$data['sEmail']?></td>
			<td><?=$data['status']?></td>

			<td>

				<a href="../controller/active.php?sid=<?=$data['sid']?>&status=<?='ACTIVE'?>"> ACTIVE </a> |
				<a href="../controller/active.php?sid=<?=$data['sid']?>&status=<?='PENDING'?>"> PENDING </a> |
				<a href="../controller/active.php?sid=<?=$data['sid']?>&status=<?='REJECTED'?>"> REJECTED </a>

			</td>
		</tr>

	<?php } ?>
	</table>
</body>
</html>
