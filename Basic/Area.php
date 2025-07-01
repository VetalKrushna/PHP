<html>
<body style="background-color:cyan;">
 <form method="post" align="left">
Enter radius:
<input type="text" name="t1"><br>
<input type="Submit" value="Calculate" >
	

</form>
</body>
</html>

<?php
  $r=$_POST["t1"];
 

 printf("Area of Circle:%f",3.14*$r*$r);

?>