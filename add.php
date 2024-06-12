<?php
session_start();
include_once("dbconnect.php");


		$id = ($_POST['product_id']);
		$cat = ($_POST['product_cat']);
		$title = ($_POST['product_title']);
		$price = ($_POST['product_price']);
		$desc = ($_POST['product_desc']);
		$image = ($_POST['product_image']);
		$keywords = ($_POST['product_keywords']);
        


$sql = "INSERT INTO products(product_id,product_cat,product_title,product_price,product_desc,product_image,product_keywords) VALUES ('$id','$cat','$title','$price','$desc','$image','$keywords')";

if (mysqli_query($conn,$sql)){
	header("Location: admin.php");
	echo '<script type="text/javascript">alert("New product added. Add more!");</script>';
} 
else 
{
	header("Location: admin.php");
	echo '<script type="text/javascript">alert("Error Occured");</script>';
}



?>