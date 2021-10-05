<?php


	if(isset($_POST['g'])){
		$g = $_POST['g'];
	}

?>


<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post" action="4.php">
		<b>Gender:<b> <br>
			<input type="radio" name="g" value="male"> Male
			<input type="radio" name="g" value="female"> Female
			<input type="radio" name="g" value="other"> Other <br>
		<input type="submit" name="submit" value="Submit">
		<br><br><?php if(isset($_REQUEST['g'])){ echo "Gender : ".$g; } else {echo 'Select someone';}?>
	</form>
</body>
</html>
