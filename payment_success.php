<?php
	session_start();
	include('dbconnect.php');
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
	$uid=$_SESSION['uid'];
	$sql="SELECT * FROM customer_order WHERE uid='$uid'";
	$run_query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($run_query);
	$trid=$row['tr_id'];
	$pri=$row['p_price'];
	$p_name=$row['p_name'];
	$qty=$row['p_qty'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lotus</title>
	<link rel="stylesheet" type="text/css" href="assets/link/css/un.css">
	<style type="text/css">
		.content{
			display: none;
		}
	</style>
</head>
<body>
	<div class='content'>
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
  				<div class="panel-heading"><h1>Thank you!</h1></div>
  				<div class="panel-body">
    				Hello <?php echo $_SESSION['uname']; ?>, your payment is successful.
    				<br>Your Transaction ID is <?php echo $trid; ?> 
    				<br>You can continue with your shopping.
    				<p></p>
    				<a href="profile.php" class='btn btn-success btn-lg'>Back to store</a>
  				</div>
			</div>
		<div class='col-md-2'></div>
	</div>

	</div>

	</div>
	</div>
	<div>
	<?php
	    $email = $_SESSION['email'];
	    
	    ini_set( 'display_errors', 1);
	    error_reporting( E_ALL );
	    
		$to = "$email";
		$from = "LotusOnlineShop@example.com";
		$subject = "Payment Invoice";

		$message = 
		"Dear  ".$_SESSION['uname'].",
		
		Product Name :  ".$p_name."
		Amount : ".$qty."
		Total price : $ ".$pri."
		Transaction ID :  ".$trid."
		
	
      	Thank you for make us as your choice.
		Any enquiries kindly email our customer support at LutosCustomerSupport@example.com 
		
		Life more easier online. Enjoy!";
        
        $headers = "From:" . $from;
		
		mail($to,$subject,$message,$headers);
		echo "The email message was sent.";
	?>
	</div>
	<!--Pre-loader -->
	<div class="preload"><img src="assets/images/loading.gif" style="width:400px;
    height: 400px;
    position: relative;
    top: 0px;
    left: 469px;"></div>

	<script src="assets/link/js/gimmick.js"></script>
	<script src="assets/link/js/deux.js"></script>
	
	<script type="text/javascript">
		
    	
    	$(".preload").fadeOut(5000, function(){
        $(".content").fadeIn(500);        	
		}); 

	</script>
</body>
</html>