<?php

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];
	}
?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		Username: <br><input type="text" name="myname" value=""/>
		<input type="submit" name="submit" value="Submit">
		<?php if(isset($name)){ echo "Name: ".$name; }?>
	</form>
</body>
</html>
