<?php

  require_once('header.php');
	require_once('../model/usersModel.php');

	$done = false;
	if(isset($_POST['submit'])){

		$post= $_POST['Post'];
		$data = getRolebyuName($_COOKIE['username']);
		if(Post($data,$post))
		{
			$done = true;
		}
		else {
			$done = false;
		}
	}
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



	<form method="post" action="">
		<fieldset>
			<legend>POST</legend>
			<table>

				<tr>
					<td>
						<br><textarea placeholder="What's on your mind?" name="Post" cols="200" rows="25"></textarea>
					</td>
				</tr>
				<tr>

					<td>
						<input type="submit" name="submit" value="POST" >
					</td>
				</tr>
				<tr>

					<td>
						<?php
						if($done==true)
						{
							echo "<p style=color:green>Posted</p>";
						}
						else {
							echo "<p style=color:red>Posted</p>";
						}
						?>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
