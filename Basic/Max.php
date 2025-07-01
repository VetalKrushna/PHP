<html>
<body style="background-color:cyan;">
 <form method="post" align="left">
Enter no1:
<input type="text" name="t1"><br>
Enter no 2:
<input type="text" name="t2">
<br>
<input type="Submit" value="Maximum">
	

</form>
</body>
</html>

<?php
  $a=$_POST["t1"];
  $b=$_POST["t2"];
  
  ($a>$b)? printf("%d is Maximum ",$a):printf("%d is Maximum ",$b);
?>