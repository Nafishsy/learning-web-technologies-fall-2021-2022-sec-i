<?php

	if(isset($_REQUEST['submit'])){
		$mail = $_REQUEST['mymail'];
	}

?>


<html>
<head>
	<title>E-mail</title>
</head>
<body>
	<form method="post" >
		E-mail:<br> <input type="email" name="mymail" value="<?php if(isset($mail)){ echo $mail; }?>"/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
