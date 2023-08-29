<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name=[1,"susmita",2.1,"mam"];
    echo var_dump($name);
    echo("<br>");
    echo $name[1];//index array
    echo("<br>");
    $a=["name"=>"susmita","age"=>18];//index array
    $a=["name"=>"susmita","age"=>17];
    echo $a["age"];
    echo("<br>");
    echo $a["name"];
    echo("<br>");
    $cars=array(array("ram",22),array("shaym",15),array("rani",5),array("priya",17));//multidimentional array
    echo $cars [2][0];
    echo("<br>");
    $php=array(array("joba",1,"BBA"),array("megha",2,"BCA"),array("roshni",3,"BBA"),array("armin",4,"MBA"),array("arfin",5,"MCA"),array("rima",6,"BCA"),array("kakali",7,"BBA"),array("puja",8,"MCA"),array("papiya",9,"BCA"),array("tanwi",10,"BBA"));
    echo $php [9][0];
    ?>
</body>
</html>