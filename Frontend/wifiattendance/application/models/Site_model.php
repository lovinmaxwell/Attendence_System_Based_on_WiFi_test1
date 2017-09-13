<?php

class Site_model extends CI_Model{
	function getRecords($selected_date){
		
		$query = $this->db->query("SELECT t1.employee_ID,t1.employee_name,t1.employee_device_macID,t2.MAC,min(t2.time) as check_in,max(t2.Time) as check_out,TIMEDIFF(max(t2.Time),min(t2.time)) as hours_present, IF(TIME_TO_SEC(TIMEDIFF(max(t2.Time),min(t2.time)))>=28800,'Present','Absent') as Attendence_Status
          FROM employee_registration t1,wifi_rissi_mac t2
		  where t1.employee_device_macID=t2.MAC and date(t2.time)='$selected_date' group by t1.employee_ID;");		  
	
	      return $query->result();
	
	}
}