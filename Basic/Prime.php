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

   for($i=2;$i<$n;$i++)
{
	if($n%$i==0)
	 {
	   printf("Number is Not Prime..");
	   break;
	 }

}
  if($i==$n)
	printf("Number is Prime..");
?>