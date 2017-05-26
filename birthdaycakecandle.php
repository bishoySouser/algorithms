<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$height_temp = fgets($handle);
$height = explode(" ",$height_temp);
array_walk($height,'intval');

$stats = array();
$tallest = intval(max($height));
//solution1
foreach($height as $value) {
	$val = trim($value);
  $stats[$val] = array_key_exists($val,$stats) ? $stats[$val] + 1 : 1;
}
echo $stats[$tallest];


//solution 2 
$arr=array_count_values($height);
echo $arr[$tallest];
?>