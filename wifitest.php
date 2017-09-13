<?php
echo "Stepone";
echo "wifi";
$DB_HOST="localhost";
$DB_USER="ellipson_lovin";
$DB_PASSWORD="LOVINm2xwell";
$DB_DATABASE="ellipson_wifi";
//echo"con";
$con= mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD,$DB_DATABASE)or die( "Unable to select database");
//die(var_dump($con));
$RSSI="";
$MAC="";
$str =$_POST["S"];
	die(var_dump($str));
$RSSI="-40";
$MAC="20:80:sd:4r:7r";
$datafrom="1st Floor";

date_default_timezone_set('Asia/Kolkata');
$current_Date=date('Y-m-d H:i:s');
$query = "INSERT INTO `wifi_rissi_mac` (`RSSI`,`MAC`,`Time`,`DataFrom`) 	
		VALUES ('$RSSI','$MAC','$current_Date','$datafrom')"; 
  	
   	mysqli_query($con,$query);
   	
	mysqli_close($con);
echo "Sucess";
?>