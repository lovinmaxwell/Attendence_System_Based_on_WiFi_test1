<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from eonasdan.github.io/bootstrap-datetimepicker/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:36:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        


<link rel="apple-touch-icon" sizes="57x57" href="../apple-touch-icon-57x57.html">
		<link rel="apple-touch-icon" sizes="114x114" href="../apple-touch-icon-114x114.html">
		<link rel="apple-touch-icon" sizes="72x72" href="../apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="144x144" href="../apple-touch-icon-144x144.html">
		<link rel="apple-touch-icon" sizes="60x60" href="../apple-touch-icon-60x60.html">
		<link rel="apple-touch-icon" sizes="120x120" href="../apple-touch-icon-120x120.html">
		<link rel="apple-touch-icon" sizes="76x76" href="../apple-touch-icon-76x76.html">
		<link rel="apple-touch-icon" sizes="152x152" href="../apple-touch-icon-152x152.html">
		<link rel="icon" type="image/png" href="../favicon-196x196.html" sizes="196x196">
		<link rel="icon" type="image/png" href="../favicon-160x160.html" sizes="160x160">
		<link rel="icon" type="image/png" href="../favicon-96x96.html" sizes="96x96">
		<link rel="icon" type="image/png" href="../favicon-16x16.html" sizes="16x16">
		<link rel="icon" type="image/png" href="../favicon-32x32.html" sizes="32x32">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-TileImage" content="../mstile-144x144.html">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
	
	<link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.0.0/css/rowGroup.dataTables.min.css">
        <title>Attendence</title>

        <link rel="stylesheet" type="text/css" media="screen" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="css/prettify-1.0.css" rel="stylesheet">
        <link href="css/base.css" rel="stylesheet">
        <link href="../../cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<script type="text/javascript" src="../../code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
			<script src="../../cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
			<script src="../../cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    </head>

    <body>

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">


<hr />
<h3 id="min-view-mode">SELECT DATE</h3>
<div class="container">
    <div class="col-sm-2" style="height:50px;">
        <div class="form-group">
            <div class='input-group date' id='datetimepicker10'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'DD/MM/YYYY'
            });
        });
		</script>
	</div>
	</div>
</div>

<table style="width:100%" id="wifiAttendence">
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
</table>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/rowgroup/1.0.0/js/dataTables.rowGroup.min.js"></script>
<script>
$('#wifiAttendence').DataTable( {
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
	
        <script src="js/prettify-1.0.min.js"></script>
        <script src="js/base.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>

	

    </body>

<!-- Mirrored from eonasdan.github.io/bootstrap-datetimepicker/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:37:15 GMT -->
</html>