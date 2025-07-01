<?php
	$p="([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})";
	$d="2025-06-09";
	if(preg_match("/$p/",$d))
	 echo("VALID");
	else
	 echo("INVALID");


?>