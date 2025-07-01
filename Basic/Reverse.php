<html>
<body style="background-color:cyan;">
 <form method="post" align="left" >
Enter No:
<input type="text" name="t1">
<input type="Submit" value="Reverse">
	

</form>
</body>
</html>

<?php
  $n=$_POST["t1"];
  $r=0;                                  
	while($n>1)
	 {
            
 	   $d=$n%10;
	   $r=$r*10+$d;	
	   $n=(int)$n/10;
  
	 }
	
printf("Reverse number:%d",$r);

?>