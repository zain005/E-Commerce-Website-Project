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
	<p><br><br></p>
	<p><br><br></p>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="row">
				<div class="col-md-12" id="cart_msg"></div>
			</div>
				<div class="panel panel-primary text-center">
					<div class="panel-heading">CART CHECKOUT</div>
					<div class="panel-body"></div>
					<div class="row">
						<div class="col-md-2"><b>ACTION</b></div>
						<div class="col-md-2"><b>ITEM IMAGE</b></div>
						<div class="col-md-2"><b>ITEM NAME</b></div>
						<div class="col-md-2"><b>PRICE</b></div>
						<div class="col-md-2"><b>QUANTITY</b></div>
					<!--	<div class="col-md-2"><b>PRICE IN $</b></div>	-->
					</div>
					<br><br>
					<div id='cartdetail'>
					<!--<div class="row">
						<div class="col-md-2"><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span></a>
						</div>
						<div class="col-md-2"><img src="assets/prod_images/tshirt.JPG" width="60px" height="60px"></div>
						<div class="col-md-2">Tshirt</div>
						<div class="col-md-2">$700</div>
						<div class="col-md-2"><input class="form-control" type="text" size="10px" value='1'></div>
						<div class="col-md-2"><input class="form-control" type="text" size="10px" value='700'></div>
					</div>-->
					</div>
					<!--<div class="row">
						<div class="col-md-8"></div>
						<div class="col-md-4">
							<b>Total: $500000</b>
						</div>
					</div>-->
					<div class="panel-footer">

					</div>
				</div>
				<button class='btn btn-success btn-lg pull-right' id='checkout_btn' data-toggle="modal" data-target="#myModal">CHECKOUT</button>
			</div>

			<div class="col-md-2"></div>
		</div>
	</div>

	<script src="assets/link/js/gimmick.js"></script>
	<script type="text/javascript" src="assets/link/js/gimmick3.js"></script>
	<script src="assets/link/js/deux.js"></script>
	<script src="main.js"></script>
</body>
<div class="foot"><footer>
<p><img src="assets/images/logo.png" width="607" height="284"></p>
</footer></div>
<style> .foot{text-align: center;}
</style>
</html>
