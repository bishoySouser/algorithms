<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);

$positive = 0;
$negative = 0;
$zero = 0;
$n = count($arr);
foreach ($arr as $key => $val)
{
	if($val > 0)
		$positive++;
	elseif($val < 0)
		$negative++;
	else 
		$zero++;
}
echo number_format($positive/$n,6)."\n";
echo number_format($negative/$n,6)."\n";
echo number_format($zero/$n,6);
?>