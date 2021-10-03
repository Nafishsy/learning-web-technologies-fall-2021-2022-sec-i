<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post" action="c.php">
		<b>Edu:<b> <br>
			<input type="checkbox" name="SSC" value="<?php if(isset($_REQUEST['SSC'])){ echo $_REQUEST['SSC'].'<br>'; }?>"> SSc
			<input type="checkbox" name="HSC" value="<?php if(isset($_REQUEST['HSC'])){ echo $_REQUEST['HSC'].'<br>'; }?>"> Hsc
			<input type="checkbox" name="Bsc" value="<?php if(isset($_REQUEST['Bsc'])){ echo $_REQUEST['Bsc'].'<br>'; }?>"> Bsc
			<input type="checkbox" name="Msc" value="<?php if(isset($_REQUEST['Msc'])){ echo $_REQUEST['Msc'].'<br>'; }?>"> Msc
		<input type="submit" name="submit" value="Submit"><br><br>

	</form>
</body>
</html>
