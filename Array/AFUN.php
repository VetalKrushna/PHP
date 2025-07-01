<?PHP
//1

  $a=array(1,2,3,4,5);
  $s=array_sum($a);
  echo("<BR>Sum of array:$s");

//2
  $a=array(1,2,3,4,5);
  $b=array(6,7,8,9,10);  
  $c=array_merge($a,$b);
  echo("<BR>Maerge Array:");
  print_r($c);
?>