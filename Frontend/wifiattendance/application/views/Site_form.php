<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Attendence</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- datepicker style css -->
	<link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
	
	<link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.0.0/css/rowGroup.dataTables.min.css">

</head>
<body>

<form action="Site/getData" method="post">

Date : <input type="date" id="date" name="date">
<input type="submit">

</form>
<table style="width:100%" id="example">
<thead>
  <tr>
    <th>Employee ID</th>
    <th>Employee Name</th> 
    <th>Check In</th>
	 <th>Check Out</th>
	  <th>Hours Present</th>
	 	 <th>Status</th>
  </tr>
 </thead>
 <tbody>
<?php if(isset($records)): foreach($records as $row): ?>
<tr>
<td> <?php echo $row->employee_ID; ?> </td>
<td> <?php echo $row->employee_name; ?> </td>
<td> <?php echo $row->check_in; ?> </td>
<td> <?php echo $row->check_out; ?> </td>
<td> <?php echo $row->hours_present; ?> </td>
<td> <?php echo $row->Attendence_Status; ?> </td>

</tr>

<?php endforeach; ?>

<?php endif; ?>
</tbody>

</body>
</html>