<?php
	session_start();
	include_once("dbconnect.php");

	//current URL of the Page. updateCart.php redirects back to this URL
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Record</title>
	<link rel="stylesheet" type="text/css" href="assets/link/css/admin.css">
	<style type="text/css">
		
		#logo{
			padding-top: 0.7%;						
			width: 14%;
			height: 62px;
			float: left;	
			position: fixed;		
		}
		td{
			padding: 5px;
		}

		th{
			padding: 5px;
			font-size: 20px;
			text-align: center;
		}
	</style>	
</head>

<body style="background-color:black">
	<h1>Customer Purchase Record</h1>

<!--CONTENT-->

<div class="content">
	<section class="container">

<?php
$results = $conn->query("SELECT id, uid, pid, p_name, p_price, p_qty, p_status, tr_id FROM customer_order  ORDER BY id ASC");
if($results){ 
$products_item = '<br><br><table border="1" bordercolor="white" style="color:white;" align="center"><th>Order ID</th><th>User ID</th><th>Product Code</th><th>Product Name</th><th>Price</th><th>Quantity</th><th>Status</th><th>Transaction Code</th>
';//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<tr>
	<td><p align="center">{$obj->id}</p></td>
    <td><p align="center">{$obj->uid}</p></td>
    <td><p align="center">{$obj->pid}</p></td>
    <td><p align="center">{$obj->p_name}</p></td>
	<td><p align="center">$ {$obj->p_price}</p></td>
    <td><p align="center">{$obj->p_qty}</p></td>
	<td><p align="center">{$obj->p_status}</p></td>
	<td><p align="center">{$obj->tr_id}</p></td>
	</tr>
		
EOT;
}
$products_item .= '</table>';
echo $products_item;
}
?>   
<br><br><a href="admin.php"><span id="logoutButton" style="float: right;">Main Page</span></a><br><br> 
</div>
</section>
</div>
</body>
</html>