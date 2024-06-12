<?php
session_start();
include_once("dbconnect.php");


//current URL of the Page. updateCart.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Items</title>
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
	<h1>Add Product</h1>

<!--CONTENT-->

<div class="content" style="color: white;">
	<section class="container">

<!-- FORM -->
<div id="addForm">
<form name="productForm" method="post" action="add.php">
<table width="50%" align="center"> 
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
	<td>
		<label>Product Code &nbsp;&nbsp;</label>	
	</td>
	<td colspan="4">
		<input type="text" name="product_id" required>
	</td>
</tr>

<tr>
	<td>
		<label>Category &nbsp;&nbsp;</label>	
	</td>
	<td colspan="4">
		<input type="text" name="product_cat" required>
	</td>
</tr>

<tr>
	<td>
		<label>Title &nbsp;&nbsp;</label>	
	</td>
	<td colspan="4">
		<input type="text" name="product_title" required>
	</td>
</tr>

<tr>
	<td>
		<label>Price &nbsp;&nbsp;</label>	
	</td>
	<td colspan="4">
		<input type="text" name="product_price" required>
	</td>
</tr>

<tr>
	<td>
		<label>Description &nbsp;&nbsp;</label>	
	</td>
	<td colspan="4">
		<input type="text" name="product_desc" required>
	</td>
</tr>

<tr>
	<td>
		<label>Product Image &nbsp;&nbsp;</label>	
	</td>
	<td colspan="4">
		<form action="upload.php" method="post" enctype="multipart/form-data">
    		<input type="file" name="fileToUpload" id="fileToUpload">
    		<input type="submit" value="Upload Image" name="submit">
		</form>
	</td>
</tr>

<tr>
	<td>
		<label>Product Keywords &nbsp;&nbsp;</label>	
	</td>
	<td colspan="4">
		<input type="text" name="product_keywords" required>
	</td>
</tr>

<tr>
<td>&nbsp;</td>
<td>
	<br>
	<input type="submit" name="addproduct" value="Add Product" class="click" id="logoutButton" style="float: right;">
</td>
<td><br><a href="admin.php" id="logoutButton" style="float: right;">Main Page</a></td>
</tr>

</table>
</form>
</div>
</section>
</div>

</body>
</html>