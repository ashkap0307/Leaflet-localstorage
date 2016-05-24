<?php
echo "Working..";
// include class file

include("Traceroute.php");

// create object instance
/*
$tr = Net_Traceroute::factory();
if(!PEAR::isError($tr)) 
{
	 $hostname = isset($_GET['hostname'])? $_GET['hostname']:null;
	 if(!$hostname){
	 	echo "Please hostname value in string query..";
	 }
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
 */
?>
