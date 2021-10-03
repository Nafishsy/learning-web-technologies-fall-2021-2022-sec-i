<?php

	$d = $_REQUEST['d'];
	$m = $_REQUEST['m'];
	$y = $_REQUEST['y'];


	if($d != "" and $d<=31 and $d>0){
		echo $d.'//';
	}else{
		echo "Invalid Date input";
	}

	if($m != "" and $m<=12 and $m>0){
		echo $m.'//';
	}else{
		echo "Invalid Month input";
	}

	if($y != "" and $y>0){
		echo $y;
	}else{
		echo "Invalid Year input";
	}

?>
