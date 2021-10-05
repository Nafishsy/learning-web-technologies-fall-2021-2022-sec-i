<?php

	if(isset($_REQUEST['submit'])){

    if($_REQUEST['d']>0 and $_REQUEST['d'] < 32)
    {
      $d = $_REQUEST['d'];
    }
    else {
      echo '\nDay input invalid\n';
    }
	}

	if(isset($_REQUEST['submit'])){
    if($_REQUEST['m']>0 and $_REQUEST['m'] < 13)
    {
      $m = $_REQUEST['m'];
    }
    else {
      echo '\n Month input invalid\n';
    }
	}

	if(isset($_REQUEST['submit'])){
    if($_REQUEST['y']>=1953  and $_REQUEST['y'] <= 1988)
    {
      $y = $_REQUEST['y'];
    }
    else {
      echo '\n Year input invalid\n';
    }
	}

?>


<html>
<head>
	<title>Date of Birth</title>
</head>
<body>
	<form method="post" >
		Date: <br><input type="text" name="d" value=""/><br>
		Month: <br><input type="text" name="m" value=""/><br>
		E-Year: <br><input type="text" name="y" value=""/><br>
		<input type="submit" name="submit" value="Submit">
		<br><?php if(isset($d) and isset($m) and isset($y) ){ echo "DOB: ".$d.'//'.$m.'//'.$y; }?>
	</form>
</body>
</html>
