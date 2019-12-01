<?php
$arr=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9));
echo "<h3>Matrix</h3>";
for($row=0;$row<3;$row++){
    echo "<br>";
    for($col=0;$col<3;$col++){
        echo " ".$arr[$row][$col];
    }
}
echo "<h3>Transpose of a Matrix</h3>";
for($row=0;$row<3;$row++){
    echo "<br>";
    for($col=0;$col<3;$col++){
        echo " ".$arr[$col][$row];
    }
}