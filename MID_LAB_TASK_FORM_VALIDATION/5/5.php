<?php
$c = 0;
$a=array();
if(isset($_REQUEST['SSC']) )
{
  $c = $c + 1;
  array_push($a,$_REQUEST['SSC']);
}
if(isset($_REQUEST['HSC']))
{
  $c = $c + 1;
  array_push($a,$_REQUEST['HSC']);
}
if(isset($_REQUEST['Bsc']) )
{
  $c = $c + 1;
  array_push($a,$_REQUEST['Bsc']);
}
if(isset($_REQUEST['Msc']))
{
  $c = $c + 1;
  array_push($a,$_REQUEST['Msc']);
}
 if($c>=2)
 {
   print_r($a);
 }
 else {
   echo 'Please select any two\n';
 }

 ?>

<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post" action="5.php">
		<b>Edu:<b> <br>
			<input type="checkbox" name="SSC" value="SSC"> SSc
			<input type="checkbox" name="HSC" value="HSC"> Hsc
			<input type="checkbox" name="Bsc" value="Bsc"> Bsc
			<input type="checkbox" name="Msc" value="Msc"> Msc
		<input type="submit" name="submit" value="Submit"><br><br>

	</form>
</body>
</html>
