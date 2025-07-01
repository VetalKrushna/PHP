<html>
<body style="background-color:cyan;">
 <form method="post" align="left">
Enter no1:
<input type="text" name="t1"><br>
Enter no 2:
<input type="text" name="t2">
<br>
<input type="Submit" value="Swap" name="Swap">
	

</form>
</body>
</html>

<?php
  $a=$_POST["t1"];
  $b=$_POST["t2"];

if($_POST['Swap'])
{
 printf("Before Swap A=%d<br>",$a);
 printf("Before Swap B=%d<br><br>",$b);
  

$c=$a;
$a=$b;
$b=$c;  
 printf("After Swap A=%d<br>",$a);
 printf("After Swap B=%d",$b);
}
?>