<?php
	if (isset($_REQUEST['submit']) and filter_var($_REQUEST['mymail'], FILTER_VALIDATE_EMAIL)) {
		$mail = $_REQUEST['mymail'];
}
?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		E-mail: <br><input type="email" name="mymail" value=""/>
		<input type="submit" name="submit" value="Submit">
		<br><?php if(isset($mail)){ echo "E-mail: ".$mail; }?>
	</form>
</body>
</html>
