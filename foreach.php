 <?php
 echo"<br>";
     $arr=array("Banana","Apple","Guava","Strawberry","Mango");
//using for loop
     for ($i=0; $i < count($arr) ; $i++) { 
         echo "$arr[$i]";
         echo "<br>";
     }
//using foreach loop
  echo"<br>";
foreach ($arr as $value) {
      echo"$value <br>";
  }     
 ?>