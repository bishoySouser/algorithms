<?php

$handle = fopen ("php://stdin", "r");
function getRecord($s){
    // Complete this function
    $highestRecord = $s[0];
    $lowestRecord = $s[0];
    $best = 0;
    $worst = 0;
    $count = count($s);
    for($i=1;$i<$count;$i++){
       if($s[$i] > $highestRecord){
       		$highestRecord = $s[$i];
       		$best++;
       }

       if($s[$i] < $lowestRecord){
       		$lowestRecord = $s[$i];
       		$worst++;
       }
    }
    return array($best,$worst);
}

fscanf($handle,"%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
$result = getRecord($s);
echo implode(" ", $result)."\n";

?>