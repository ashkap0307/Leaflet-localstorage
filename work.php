<?php

// include class file
include("Traceroute.php");

// create object instance
$tr = Net_Traceroute::factory();

if(!PEAR::isError($tr)) 
{
	 $hostname = $_GET['hostname'];
	 $flag = true;
	 $data = array();
      // trace route to host and get response
      $response = $tr->traceroute($hostname);
  
   $data = $response;
   $ip = array();

foreach($data as $v){
	if($flag)
	   foreach($v as $s){
	   $ip[]=$s['ip'];
	   }
	  $flag = false;
	   
}
 
 
 
      // print response
 echo json_encode($ip);
}
  
?>
