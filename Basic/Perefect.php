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
   for($i=1;$i<$n;$i++)
{
	if($n%$i==0)
	 {
	   $s+=$i;
	 }

}
  if($s==$n)
	printf("Number is Perfect..");
  else
	printf("Number is Not Perfect..");
?>