<?PHP
  $a=array(11,22,33,44,55,66,77,88,99);
 //1
   $b=array_chunk($a,4);
  foreach($b as $v)
   {
     echo("<BR>Separated:");
     print_r($v);
   }
//2

 if(in_array(10,$a))
  echo("<BR>Found");
 else
  echo("<BR>NOT Found");

//3


if(array_search(10,$a))
  echo("<BR>Found");
 else
  echo("<BR>NOT Found");

//4

$A=array("rno"=>"1","Name"=>"ABC","per"=>"70");
  echo("<BR>");
$B=array_keys($A);
print_r($B);

//5

 echo("<BR>");
$B=array_values($A);
print_r($B);

//6

$k=array(5,6,7,9,2);

echo("<BR><br>Selected Array:");
print_r(array_slice($k,1,3));


echo("<BR>Original Array:");
print_r($k);

//7

sort($k);
echo("<BR>Sorted array:");
print_r($k);

//8

$k=array(5,6,7,9,2);

echo("<BR><br>Original Array:");
print_r($k);
rsort($k);
echo("<BR>Desending array:");
print_r($k);

//9

//associative array

$A=array("rno"=>"1","Name"=>"ABC","per"=>"70");


echo("<BR><br>Original Array:");
print_r($A);

asort($A);

echo("<BR>Sorted according value:");
print_r($A);

//10

$A=array("rno"=>"1","Name"=>"ABC","per"=>"70");


echo("<BR><br>Original Array:");
print_r($A);

ksort($A);

echo("<BR>Sorted according Keys:");
print_r($A);

//11


$A=array("rno"=>"1","Name"=>"ABC","per"=>"70");


echo("<BR><br>Original Array:");
print_r($A);

arsort($A);

echo("<BR>descending order according value:");
print_r($A);


//12


$A=array("rno"=>"1","Name"=>"ABC","per"=>"70");


echo("<BR><br>Original Array:");
print_r($A);

krsort($A);

echo("<BR>descending order according key:");
print_r($A);
?>
