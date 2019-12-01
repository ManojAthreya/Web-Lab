<?php  
$arr1=array(
    array(3,2,3),
    array(4,2,3),
    array(1,5,3)
);
$arr2=array(
    array(1,1,3),
    array(2,2,3),
    array(3,2,3)
);
$result=array();
for($i=0;$i<3;$i++){
    echo "<br>";
    for($j=0;$j<3;$j++){
        $result[$i][$j]=0;
        for($k=0;$k<3;$k++){
            $result[$i][$j]=$result[$i][$j]+($arr1[$i][$k]*$arr2[$k][$j]);
        }
    }
}

echo "<h3>Multiplication of 2 matrices</h3>";
for($i=0;$i<3;$i++){
    echo "<br>";
    for($j=0;$j<3;$j++){
        echo " ".$result[$i][$j];
    }
}
?>