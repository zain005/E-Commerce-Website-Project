<?php
	session_start();
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lotus</title>
	<link rel="stylesheet" type="text/css" href="assets/link/css/un.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">LOTUS</a>
			</div>


		</div>
	</div>
	<br><br><br><br><br>
	<div class='container-fluid'>
		<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-8'>
			<div class="panel panel-default">
  				<div class="panel-heading">ORDER DETAILS</div>
  				<div class="panel-body">
    				<div class='col-md-6'><img src='assets/prod_images/iPad.jpg' style='float: right;'></div>
    				<div class='col-md-6'>
    					<table class='table table-hover'>
    					<p></p><p></p><br>
    						<tr><td><b>ITEM NAME:</b></td><td>iPad</td></tr>
    						<tr><td><b>PRICE:</b></td><td>$25000</td></tr>
    						<tr><td><b>QUANTITY:</b></td><td>1</td></tr>
    						<tr><td><b>PAYMENT:</b></td><td>SUCCESS!</td></tr>
    						<tr><td><b>TRANSACTION ID:</b></td><td>02259xxxxxx</td></tr>
    					</table>
    				</div>
  				</div>
			</div>
		<div class='col-md-2'></div>
	</div>

	</div>


	<script src="assets/link/js/gimmick.js"></script>
	<script src="assets/link/js/deux.js"></script>
	<script src="main.js"></script>
</body>
<div class="foot"><footer>
<p><img src="assets/images/logo.png" width="607" height="284"></p>
</footer></div>
<style> .foot{text-align: center;}
</style>
</html>
