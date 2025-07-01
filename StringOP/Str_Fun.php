<?php
	$s1="  RBNB College  ";
	echo("String Length:".strlen($s1));
	$s1=trim($s1);
	 echo("<br>String Length:".strlen($s1));
$s1="  RBNB College  ";
	$s1=ltrim($s1);
	 echo("<br>String Length:".strlen($s1));
$s1="  RBNB College  ";
	$s1=rtrim($s1);
	 echo("<br>String Length:".strlen($s1));

$s1="rbnb college";	
echo("<br>Upper case String:".strtoupper($s1));
echo("<br>Lower case String:".strtolower($s1));
echo("<br>String:".ucfirst($s1));
echo("<br>String:".ucwords($s1));


	$a="college";
	$b="collage";
	 $k=strcmp($a,$b);
	 if($k==0)
	  echo("<br>Same");
	 if($k==1)
	  echo("<br>First is greater<br>");
	 if($k==-1)
	  echo("<br>Second is string greater<br>");	

	$str="shrirampur";
	$str=substr($str,4,3);
	echo("<br>".$str);

	$str="RBNB College";
	echo("<br>".$str);
	$str=substr_replace($str,"CDJ",0,4);
	echo("<br>".$str);

	$k=substr_compare($str,"RBNB",0,4);
	
	if($k==0)
	  echo("<br>Sub string found");	
	else
	  echo("<br>Sub String not found");


	$str="RBNB Collage CDJ College TCC College";
	$k=substr_count($str,"College");
	echo("<br>Sub string count:".$k);
	
	echo("<br>Reverse String:".strrev($str));


	$s1="College";
	$s1=str_pad("$s1",10,"*");
	echo("<br>".$s1);

	$a=array("Php","Python","Java");
	$s=implode(" ",$a);
	echo("<br> Array to string:".$s);

	$a="Php,Python,Java";
	$s=explode(",",$a);
	echo("<br>String to array:");
	print_r($s);

	$s1="Shrirampur";
	$s2="ram";
	$k=strpos($s1,$s2);
	if($k==false)
 	 echo("<br>SubString not found...");
	else
	 echo("<br>SubString Found...");

	$f=13.25;
	echo("<br>");
	var_dump($f);	
?>