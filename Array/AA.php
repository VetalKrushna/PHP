<?PHP

// 1D Associative Array
	$a=array("rno"=>"1","Name"=>"ABC","per"=>"70");;

print_r($a);

echo("<br>");

foreach($a as $v)
{
  echo(" ");
   print_r($v);
}

echo("<br>");
echo("<br>");

echo("<BR> Key along Values:");
foreach($a as $k=>$v)
{
  echo("<br>$k=$v");
   
}
//**********************************
// 2D Associative Array

echo("<BR><BR>");
$b=array("FY"=>array("C","DBMS"),
	 "SY"=>array("CPP","DSA"),
	 "TY"=>array("JAVA","PHP"));
print_r($b);



echo("<BR><BR>");
foreach($b as $v)
{
  echo(" ");
   print_r($v);
}

echo("<BR><BR> Key along Values:");
foreach($b as $k=>$v)
{
  echo("<br>$k=");
  print_r($v);
}
?>