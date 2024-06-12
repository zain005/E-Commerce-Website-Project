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
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">UPDATE PROFILE FORM</div>
					<div class="panel-body">
				<form method="post" action="">
					<div class="row">
						<div class="col-md-6">
							<label for="f_name">FIRST NAME</label>
							<input type="text" id="f_name" name="f_name" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="f_name">LAST NAME</label>
							<input type="text" id="l_name" name="l_name" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="email">NEW EMAIL</label>
							<input type="text" id="email" name="email" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="password">NEW PASSWORD</label>
							<input type="password" id="password" name="password" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="mobile">NEW CONTACT NO</label>
							<input type="text" id="mobile" name="mobile" class="form-control">
						</div>
						<div class="col-md-6"></div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="address1">NEW ADDRESS</label>
							<input type="textarea" id="address1" name="address1" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="address2">NEW MAILING ADDRESS</label>
							<input type="textarea" id="address2" name="address2" class="form-control">
						</div>
					</div>

					<br><br>
					<div class="col-md-12">
						<input type="button" class="btn btn-primary" value="UPDATE" name="signup" id="signup_btn">
					</div>

					</div>
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
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
