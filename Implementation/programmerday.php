<?php

$handle = fopen ("php://stdin", "r");
function solve($year){
    // Complete this function
    /*$p = 256;
    $monthArray = array(1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);
    $leap = $year % 4;
    $days = 0;
    $month = 0;
    foreach ($monthArray as $key => $value) {
    	if($leap == 0 && $key == 2) {
          $days += 29;
    	} else {
    	   $days += $value;	
    	   if($days > $p){
             $days = $days - $value;
             $month = $key;
             break;
    	   }
        }           
    }
    $diff = $p - $days;    
    echo $diff.".".sprintf("%02d", $month).".".$year;*/
    $date;
    if(($year>1919 && ($year%400==0 || ($year%4==0&&$year%100!=0))) || ($year<1918 && $year%4==0)) {
            //echo "12.09." + $year;
    	    $date = "12."."09.".$year;
        } else if($year==1918){
           // echo "26.09.1918";
        	$date = "26."."09."."1918";
        	        } else {
            $date = "13."."09.".$year;
            
        }
return $date;

}

fscanf($handle, "%d",$year);
$result = solve($year);
echo $result . "\n";

?>