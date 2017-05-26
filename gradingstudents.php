<?php

$handle = fopen ("php://stdin", "r");
function solve($grades){
    // Complete this function
    foreach($grades as $key => $value)
    {
    	$nextValue = ceil($value/5)*5;
    	$grades[$key] = $nextValue >= 40 ? ($nextValue - $value < 3 ? $nextValue : $value) : $value;
    }
    return $grades;
}

fscanf($handle, "%d",$n);
$grades = array();
for($grades_i = 0; $grades_i < $n; $grades_i++){
   fscanf($handle,"%d",$grades[]);
}
$result = solve($grades);
print_r($result);
echo implode("\n", $result)."\n";



?>