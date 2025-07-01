<html>
<body style="background-color:cyan;">
 <form method="post" align="left" >
Enter No:
<input type="br>text" name="t1">
<input type="Submit" value="Table">
	

</form>
</body>
</html>

<?php
  $a=$_POST["t1"];
	
for($i=1;$i<=10;$i++)
{
	printf("%d<br>",$i*$a);
}
?>