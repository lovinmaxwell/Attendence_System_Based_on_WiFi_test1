
<?php
$DB_HOST="localhost";
$DB_USER="ellipson_lovin";
$DB_PASSWORD="LOVINm2xwell";
$DB_DATABASE="ellipson_wifi";
$conn= mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD,$DB_DATABASE)or die( "Unable to select database");
$selected_date = "2017-05-18";
//$result = $conn->query("SELECT * FROM wifi_rissi_mac ORDER BY ID DESC");

//$result = $conn->query("SELECT t1.employee_ID,t1.employee_name,t1.employee_device_macID,t2.MAC,min(t2.time) as check_in,max(t2.Time) as check_out
//          FROM employee_registration t1,wifi_rissi_mac t2
//		  where t1.employee_device_macID=t2.MAC and date(t2.time)=CURDATE() group by t1.employee_ID;");
//$result = $conn->query("SELECT t1.employee_ID,t1.employee_name,t1.employee_device_macID,t2.MAC,min(t2.time) as check_in,max(t2.Time) as check_out
//          FROM employee_registration t1,wifi_rissi_mac t2
//		  where t1.employee_device_macID=t2.MAC and date(t2.time)='$selected_date' group by t1.employee_ID;");
		  
//		  $result = $conn->query("SELECT t1.employee_ID,t1.employee_name,t1.employee_device_macID,t2.MAC,min(t2.time) as check_in,max(t2.Time) as check_out,TIMEDIFF(max(t2.Time),min(t2.time)) as hours_present, IF(TIMEDIFF(max(t2.Time),min(t2.time))>=8,'Present','Absent') as Attendence_Status
//          FROM employee_registration t1,wifi_rissi_mac t2
//		  where t1.employee_device_macID=t2.MAC and date(t2.time)='$selected_date' group by t1.employee_ID;");
		  
		  $result = $conn->query("SELECT t1.employee_ID,t1.employee_name,t1.employee_device_macID,t2.MAC,min(t2.time) as check_in,max(t2.Time) as check_out,TIMEDIFF(max(t2.Time),min(t2.time)) as hours_present, IF(TIME_TO_SEC(TIMEDIFF(max(t2.Time),min(t2.time)))>=28800,'Present','Absent') as Attendence_Status
          FROM employee_registration t1,wifi_rissi_mac t2
		  where t1.employee_device_macID=t2.MAC and date(t2.time)='$selected_date' group by t1.employee_ID;");		  

//var_dump($result);
$data=array();

if ($result->num_rows > 0) {
	//print_r($row = $result->fetch_assoc($result));
	while($row = mysqli_fetch_assoc($result)) {
		/*echo $row['MAC'] . '<br>';
		$row1 = array();
		$row1['MAC'] = $row['MAC'];
		$row1['RSSI'] = $row['RSSI'];*/
		$data[]= $row;
		
	}
}
//echo json_encode($data);

$arr = array('data' => $data);
echo json_encode($arr);
	
	mysqli_close($conn);
?>