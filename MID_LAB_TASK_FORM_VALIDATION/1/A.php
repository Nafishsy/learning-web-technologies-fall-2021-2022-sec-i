<?php

$s = str_word_count($_REQUEST['myname']);

	if(isset($_REQUEST['submit']) and !empty($_REQUEST['myname']) and !is_numeric(substr($_REQUEST['myname'], 0, 1)) and $s>=2)
	{
		$name = $_REQUEST['myname'];
	}
	else
	 {
		echo 'Invalid Input\n';
	}
//echo is_numeric(substr($_REQUEST['myname'], 0, 1));
?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		Username: <input type="text" name="myname" value="<?php if(isset($name)){ echo $name; }?>"/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
