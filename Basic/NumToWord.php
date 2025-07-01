<html>
<body style="background-color:cyan;">
 <form method="post" align="left" >
Enter No:
<input type="text" name="t1">
<input type="Submit" value="Convert">
	

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
	
                                
	while($n>1)
	 {
            
 	   $d=$n%10;
	   $n=(int)$n/10;
  $ch="NULL";
  switch($d)
    {
	case 0:$ch="ZERO";
		break;
	case 1:$ch="ONE";
		break;
	case 2:$ch="TWO";
		break;
	case 3:$ch="THREE";
		break;
	case 4:$ch="FOUR";
		break;
	case 5:$ch="FIVE";
		break;
	case 6:$ch="SIX";
		break;
	case 7:$ch="SEVEN";
		break;
	case 8:$ch="EIGHT";
		break;
	case 9:$ch="NINE";
		break;

    }
 	printf(" to word %s ",$ch);
	 }

?>