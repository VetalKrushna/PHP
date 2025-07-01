<html>
<body style="background-color:cyan;">
 <form method="post" align="left">
Enter No1:
<input type="text" name="t1"><br>
Enter no 2:
<input type="text" name="t2">
<br>
<input type="Submit" name="Addition" id="Additon" value="Addition">
	
<input type="Submit" name="Substraction" id="Substraction" value="Substraction">
	
<input type="Submit" name="Multiplication" id="Multiplication" value="Multiplication">
	
<input type="Submit" name="Division" id="Division" value="Division">
	

</form>
</body>
</html>

<?php
  $a=$_POST["t1"];
  $b=$_POST["t2"];

 if($_POST['Addition'])
 {
  printf("Addition=%d",$a+$b);
 }

if($_POST['Substraction'])
 {
  
  printf("Substraction=%d",$a-$b);
 }

if($_POST['Multiplication'])
 {
  
  printf("Multiplication=%d",$a*$b);
 }

if($_POST['Division'])
 {
  
  printf("Division=%f",$a/$b);
 }
?>