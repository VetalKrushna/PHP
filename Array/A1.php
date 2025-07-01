<?PHP
  // 1D Indexed Array

$a=array(1,2,3,4,5,6);
print_r($a);
echo("<br>");

for($i=0;$i<count($a);$i++)
  echo(" ".$i);

echo("<br>");

foreach($a as $v)
{
   echo($v);
}

//******************************

//2D Indexed Array

$b=array(array(1,"ABC",23.25),
	 array(2,"PQR",87.2),
	 array(3,"MNO",68.2));
echo("<BR>");
print_r($b);

echo("<br><BR>");

foreach($b as $v)
{

   print_r($v);
  echo("<br>");
}
?>