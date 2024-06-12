<?php
	session_start();
    include_once("dbconnect.php");

			$code = ($_POST['product_id']);
	
	
$sql = "DELETE FROM products WHERE product_id='".$code."'"; 

if (mysqli_query($conn, $sql)) 
{
	header("Location: admin.php");
	echo '<script type="text/javascript">alert("Product Deleted");</script>';
} 
else 
{
	header("Location: admin.php");
	echo '<script type="text/javascript">alert("No such Product Exists");</script>';

}

?>
		