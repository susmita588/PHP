 <?php
 $name="susmita is a girl";
 echo"The length of my string".strlen($name);
 echo("<br>");
 echo str_word_count($name);
 echo("<br>");
 echo strrev($name);
 echo("<br>");
 echo strpos($name,"is");
 echo("<br>");
 echo str_ireplace("susmita","mam",$name);
 echo("<br>");
 echo str_repeat($name,12);
 echo("<br>");
 echo rtrim("<pre>      This is a girl         </pre>");
 // pre is used for only show the text as it is 
 echo ltrim("I am a girl");

 ?>