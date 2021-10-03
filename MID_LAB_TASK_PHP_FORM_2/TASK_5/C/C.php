<?php


	if(isset($_REQUEST['g'])){
		$g = $_REQUEST['g'];
	}
?>


<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post" action="C.php">
		<b>Gender:<b> <br>
			<input type="radio" name="g" value="<?php if(isset($_REQUEST['g'])){ echo $g; }?>"> Male
			<input type="radio" name="g" value="<?php if(isset($_REQUEST['g'])){ echo $g; }?>"> Female
			<input type="radio" name="g" value="<?php if(isset($_REQUEST['g'])){ echo $g; }?>"> Other <br>
		<input type="submit" name="submit" value="Submit">

	</form>
</body>
</html>
