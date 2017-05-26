<?php 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$time);


$timeArray = explode(':', $time);

if (strpos( $time, 'AM') === false && $timeArray[0] !== '12') {
    $timeArray[0] = $timeArray[0] + 12;
} else if (strpos( $time, 'PM') === false && $timeArray[0] == '12') {
    $timeArray[0] = '00';
}

$timeString =  preg_replace('/\s[A-Z]+/s', '', implode(':', $timeArray));
$removePrefix = preg_replace('/PM|AM/', '', $timeString);
echo $removePrefix;
?>