<?php
 
 $a=10;
#Single quote
 echo('value=$a<br>');
 echo('value\'s<br>');

#Double Quote
 echo("value=$a<br>");
 echo("Hiiii \"hellow\"<br>");

#HereDoc String
 $s=<<<abc
       PHP is a 'scripting' $a "Language"<br>
abc;
echo($s);

//NowDoc String
$s1=<<<'abc'
       PHP is a 'scripting' $a "Language"
abc;
echo($s1);
?>