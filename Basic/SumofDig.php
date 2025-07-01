<html>
<body style="background-color:cyan;">
 <form method="post" align="left">
Enter No:

<input type="text" name="t1">	
<input type="Submit" value="Sum">
	

</form>
</body>
</html>

<?php
  $n=$_POST["t1"];
$s=0;
	 while($n>0)
	{
	  $d=$n%10;
	  $s+=$d;
	  $n=$n/10;
	}
printf("Sum Of Digit::%d",$s);
?>