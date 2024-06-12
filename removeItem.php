<?php
session_start();
include_once("dbconnect.php");


//current URL of the Page. updateCart.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head style="background-color: #694343">
	<title>Remove Item</title>
	<link rel="stylesheet" type="text/css" href="assets/link/css/admin.css">
	<style type="text/css">
		body{
			margin: 0;						
		}
		#logo{
			padding-top: 0.7%;						
			width: 14%;
			height: 62px;
			float: left;			
			position: fixed;
		}
		#addForm{
			padding-top: 10px;
			padding-left: 30px;
		}
	</style>
	
</head>

<body style="background-color:black">
	<h1>Delete Product</h1>

<!--CONTENT-->

<div class="content" style="color: white;">
	<section class="container">

<!-- FORM -->
<div id="addForm">
<form name="productForm" method="post" action="delete.php">
<table width="45%"> 
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
	<td>
		<label>Product Code &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="product_id" required>
	</td>
</tr>


<tr>
	<td colspan="3">&nbsp;</td>
</tr>

<tr>
<td>&nbsp;</td>
<td>
	<input type="submit" name="removeproduct" value="Remove Product" class="click" id="logoutButton">
</td>
<td>&nbsp;<a href="admin.php" id="logoutButton" style="float: right;">Main Page</a></td>
</tr>

</table>
</form>
</div>


</section>
</div>
</body>
</html>