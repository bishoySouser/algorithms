<?php
$handle = fopen ("php://stdin", "r");
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);

$max = 0;
$min = array_sum($arr);
$count = count($arr);
$total = array_sum($arr);
//$newsum=[];
for($i=0;$i<$count;$i++)
{
	$sum = $total - $arr[$i];
    $max = $sum > $max? $sum : $max;
	$min = $sum < $min? $sum : $min; 
	//$newsum[] = $total-$sum[$i];
	 
}

//$min = min($newsum);
//$max = max($newsum);

echo $min." ".$max;

?>