<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"> 
        enter the first number:<input type="number" name="first"/><br><br>
        enter the second number:<input type="number" name="second"/><br><br>
        <input type="submit" name="add" value="ADDITION"/>
        <input type="submit" name="sub" value="SUBSTRACTION"/>
</form>
<?php
function add($x,$y)
{
    $sum=$x+$y;
    echo "Sum=$sum<br><br>";
}
function sub($x,$y)
{
    $sub=$x-$y;
    echo "Diff=$sub<br><br>";
}

if(isset($_POST['add']))
{
    add($_POST['first'],$_POST['second']);
}
if(isset($_POST['sub']))
{
    sub($_POST['first'],$_POST['second']);
}
?>

</body>
</html>
<!-- method means data circulation it has two types 
first post- It has a privacy it shows all searching
in url and using this method we can fetch some data and 
when a user input his/her data, that data can be displayed 
only in the form

get- it also a metghod by which we can fetch some data
but this method use data can displayed also in the url
which reduces the privacy of the users,by default  get 
method shows