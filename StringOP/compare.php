<?php
  $s1=10;
  $s2="10";
	if($s1==$s2)//double equal to
	 echo("Same<br>");
	else
	 echo("Not Same<br>");
	
	if($s1===$s2)//equality operator
	 echo("Same<br>");
	else
	 echo("Not Same<br>");
   
$s3="see";
$s4="sea";	
	if(soundex($s3)==soundex($s4))  //Approximate equality "Soundex"
	 echo("Same<br>");
	else
	 echo("Not Same<br>");

	if(metaphone($s3)==metaphone($s4))  //Approximate equality "metaphone"
	 echo("Same<br>");
	else
	 echo("Not Same<br>");

$s5="RBNB College";
$s6="CDJ College";

	similar_text($s5,$s6,$p);
	 echo("Similarity=".$p);
?>