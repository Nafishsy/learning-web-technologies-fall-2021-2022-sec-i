<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post" action="B.php">
		<b>Edu:<b> <br>
			<input type="checkbox" name="SSC" value="SSC"> SSc
			<input type="checkbox" name="HSC" value="HSC"> Hsc
			<input type="checkbox" name="Bsc" value="Bsc"> Bsc
			<input type="checkbox" name="Msc" value="Msc"> Msc
		<input type="submit" name="submit" value="Submit"><br><br>
		<?php if(isset($_REQUEST['SSC'])){ echo $_REQUEST['SSC'].'<br>'; }?>
		<?php if(isset($_REQUEST['HSC'])){ echo $_REQUEST['HSC'].'<br>'; }?>
		<?php if(isset($_REQUEST['Bsc'])){ echo $_REQUEST['Bsc'].'<br>'; }?>
		<?php if(isset($_REQUEST['Msc'])){ echo $_REQUEST['Msc'].'<br>'; }?>
	</form>
</body>
</html>
