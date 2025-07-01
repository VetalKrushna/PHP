<?php
	$p="^[a-z|A-Z]+[0-9]+.com";
	$s1="Shrirampur17.com";
	if(preg_match("/$p/",$s1))
	 echo("Valid");
	else
	 echo("Invalid")

?>