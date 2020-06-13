<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ACES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" />

</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a href="<?php echo base_url(); ?>" class="navbar-brand">PayUMoney Gateway</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">

		<ul class="navbar-nav ml-auto">

			<li class="nav-item ">
				<a href="<?php echo base_url('studentsection/dashboard') ?>" class="nav-link">Student Dasboard</a>
			</li>

		</ul>

	</div>

</nav>
<!-- End Bootstrap 4 Navbar -->



<div class="container mt-5">
	<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        	<div class="card">
        		<h4 class="card-header">Transaction <label for="Success" class="badge badge-success">Success</label></h4>
        		<div class="card-body">
        			<?php
		                echo "<p>Thank You. Your order status is ". $status .".</br>";
		                echo "Your Transaction ID for this transaction is ".$txnid."</br>";
		                echo "We have received a payment of Rs. " . $amount . "</p>";
		            ?>
        		</div>
        	</div>

         </div>
        <div class="col-md-2"></div>
    </div>
		<h5 class="text-primary" style="margin-top:20px"><b>Please take screenshot of this Page. It is Required while filling the actual form(ATKT Form/Revaluation Form/Exam Form).</b></h5>
	<!-- Footer -->

	<!-- <footer style="position: absolute;bottom:0; width: 90%;">
		<hr>
		<p>Copyright &copy; <?php //echo date('Y'); ?>
			<span class="float-right">Coded with Love &hearts;	: <a href="https://facebook.com/anburocky3" target="_blank">Anbuselvan Rocky</a></span></p>
	</footer> -->
</div>

</body>
</html>
