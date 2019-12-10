<?php
function double($arg){
    return $arg*2;
}
echo double(24);
echo "\n";

function f($a,$b){
    return $a+$b;
}
echo f(3,5);
echo "\n";

$result = 1;
$arr = array(1, 3, 5 ,7, 9);
for($i = 0; $i < count($arr);$i++){
    $result = $result*$arr[$i];
    //echo $result;
    //echo "\n";
}
echo $result;
echo "\n";
    
$arr = array(2,6,3,10,4);
$max = $arr[0];
foreach ($arr as $a){
    if($max<$a){
        $max=$a;
    }
}
echo $max;
?>