<HTML>
<BODY>
	<form method="POST">
	  Enter Large String:<input type="text" name="t1"><br>
	  Enter Small String:<input type="text" name="t2"><br>
<input type="submit" value="OK">

	</form>
</BODY>
</HTML>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$s1=$_POST["t1"];
$s2=$_POST["t2"];   
$k=strpos($s1,$s2);
	if($k===0)
        {
	 echo("<br>Small String Appear at first of large string..");
         echo("<br>Small String position in large string:".strpos($s1,$s2));
	}
      else
	 echo("<br>Not appear...");
     
     if(strcasecmp($s1,$s2)==0)
	echo("<br>Both are same...");
      else
 	echo("<br>Both are different..");
}	
?>