<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle,"%d %d",$n,$k);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
// write your code here
$count = 0;
for($i=0;$i<$n;$i++) {
   for($x=$i+1;$x<$n;$x++){
   	  if (($a[$i] + $a[$x]) % $k == 0){
   	  	$count++;
   	  }
   }
}

echo $count;

?>