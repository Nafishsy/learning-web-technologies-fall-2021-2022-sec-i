<?php

	$mail = $_REQUEST['mymail'];


	if($mail != ""){
		echo $mail;
	}else{
		echo "Null value...";
	}

?>
