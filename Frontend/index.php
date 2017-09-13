<!DOCTYPE html>
<html>
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



<form action="data.php" method="post">

Date : <input type="date" id="date" name="date" onChange="selectDAteDatewise()">
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
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/rowgroup/1.0.0/js/dataTables.rowGroup.min.js"></script>

 <script>
        function selectDAteDatewise() {
            $('#tableWithSearch').DataTable().ajax.reload();
        }
 </script>

<script>
$('#example').DataTable( {
        ajax: 'data.php',
        columns: [
            {data:'employee_ID'},
            {data:'employee_name'},
            {data:'check_in'},
            {data:'check_out'},
			{data:'hours_present'},
			{data:'Attendence_Status'},
        ]
    } );

</script>
 
</table>
</body>
</html>