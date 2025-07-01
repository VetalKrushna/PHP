<html>
<body style="background-color:cyan;">
 <form method="post" align="left" >
Enter No:
<input type="br>text" name="t1">
<input type="Submit" value="Check">
	

</form>
</body>
</html>

<?php
  $n=$_POST["t1"];
  $s=0;
$num=$n;
   while($n>0)
	{
	  $d=$n%10;
	  $s+=($d*$d*$d);
	  $n=$n/10;
	}
  if($s==$num)
	printf("Number is Armstrong..");
  else
	printf("Number is Not Armstrong..");
?>