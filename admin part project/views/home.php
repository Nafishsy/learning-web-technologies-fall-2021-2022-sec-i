<?php
	require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page </title>
</head>
<body>
	<center>
		<h1>Welcome home!<?php echo " ".$_COOKIE['username']?></h1>
	<a href="profile.php">View Profile</a> <br>
	<a href="registrationList.php">Registration List</a> <br>
	<a href="userlist.php">User List </a> <br>
	<a href="post.php">POST </a> <br>
	<a href="../controller/logout.php">logout </a>
</center>
</body>
</html>
