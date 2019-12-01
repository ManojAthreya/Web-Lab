<?php
$arr1=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
$arr2=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
$result=array();
for($i=0;$i<3;$i++){
    echo "<br>";
    for($j=0;$j<3;$j++){
        $result[$i][$j]=$arr1[$i][$j]+$arr2[$i][$j];
    }
}
echo "<h3>Addition of two matrices</h3>";
for($i=0;$i<3;$i++){
    echo "<br>";
    for($j=0;$j<3;$j++){
        echo " ".$result[$i][$j];
    }
}