<?php

session_start();
 
function timer(){

$start_time = time();

$duration = 0;
while ($duration < 60) {

 $end_time = time();

$duration1 = $duration; 
  
  $duration = $end_time - $start_time;

  if($duration != $duration1){
  //echo $duration.",";
  }
}
 //echo "time :".$duration;
 return $duration;
}
$time = timer();
echo "time :".$time;

?>