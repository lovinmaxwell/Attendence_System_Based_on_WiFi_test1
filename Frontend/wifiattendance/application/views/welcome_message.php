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

<form action="Welcome/getData" method="post">

Date : <input type="date" id="date" name="date">
<input type="submit">

</form>

</body>
</html>