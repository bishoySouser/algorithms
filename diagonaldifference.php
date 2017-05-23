<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
  array_walk($a[$a_i],'intval');
}

$left=0;
$right=0;
$count= count($a);
for ($i=0; $i < $count; $i++) {
$left += $a[$i][$i];
$right += $a[$count-1-$i][$i];
}
echo abs($left - $right);

?>