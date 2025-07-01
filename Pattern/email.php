<?php
	$p="^[a-z0-9_]+@[a-z]+\.[a-z]{3}$";//3 is a limit of ending
	$s1="krushna24@gmail.com";
	if(preg_match("/$p/",$s1))
	 echo("VALID");
	else
	 echo("INVALID");
?>