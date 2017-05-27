<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$types_temp = fgets($handle);
$types = explode(" ",$types_temp);
array_walk($types,'intval');
// your code goes here
$birdArray = array(1,2,3,4,5);
$typesArr = array_count_values($types);
$max = max($typesArr);
$maxs = array_keys($typesArr, max($typesArr));
$value = count($maxs) > 1? min($maxs):$maxs[0];
echo $value;
?>	