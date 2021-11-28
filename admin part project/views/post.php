<?php

	require_once('../model/usersModel.php');

?>

<html>
<head>
	<title>POST</title>
</head>
<body>
	<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>



	<form method="post" action=" ">
		<fieldset>
			<legend>POST</legend>
			<table>

				<tr>
					<td><br><textarea placeholder="What's on your mind?" cols="250" rows="50"></textarea></td>
				</tr>

			</table>
		</fieldset>
	</form>
</body>
</html>
