<?php
function avgmarks($arr)
{   
    $sum=0;
    $i=1;
    foreach ($arr as $value) {
        $sum+=$value;
        $i++;
    }
    return $sum/$i;
}
$mam=array(93,98,76,87);
$totalmarks=avgmarks($mam);
echo "The total marks out of 400 is $totalmarks";
?>
