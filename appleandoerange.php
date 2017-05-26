<?php  
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$s,$t);
fscanf($handle,"%d %d",$a,$b);
fscanf($handle,"%d %d",$m,$n);
$apple_temp = fgets($handle);
$apple = explode(" ",$apple_temp);
array_walk($apple,'intval');
$orange_temp = fgets($handle);
$orange = explode(" ",$orange_temp);
array_walk($orange,'intval');
/*
$s = 7; //house starting point
$t = 11;//house end point
$a = 5; // apple tree
$b = 15; // orange tree
$m = 3; //apples
$n = 2; //oranges
$apple = array(-2,2,1);
$orange = array(5,-6); */
//method1 : failed some test cases maybe due to tenary operator
$totalApple = 0;
$totalOrange = 0;
//apple
for($i=0;$i<$m;$i++)
{
  $range = $a+$apple[$i];
  $totalApple = $s <= $range? ($t >= $range)? $totalApple+1 : $totalApple: $totalApple;
}
//orange
for($r=0;$r<$n;$r++)
{
  $range = $a+$apple[$r];
  $totalOrange = $s <= $range? ($t >= $range)? $totalOrange+1 : $totalOrange: $totalOrange;
}
echo $totalApple."\n".$totalOrange;

//method 2
$res1=0;
$res2=0;
for ($i=0; $i < $m; $i++) {
$temp = $a + $apple[$i];
if ($s <= $temp && $t >= $temp ) {
$res1 ++;
}
}
for ($i=0; $i < $n; $i++) {
$temp = $b + $orange[$i];
if ($s <= $temp && $t >= $temp ) {
$res2 ++;
}
}
echo $res1."\n".$res2;
?>