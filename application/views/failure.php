<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to CodeIgniter</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" />

</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a href="#" class="navbar-brand">PayUMoney Gateway</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">

		<ul class="navbar-nav ml-auto">

			<li class="nav-item ">
				<a href="<?php echo base_url('studentsection/dashboard') ?>" class="nav-link" >Student Dashboard</a>
			</li>


		</ul>

	</div>

</nav>
<!-- End Bootstrap 4 Navbar -->



<div class="container mt-5">
<div class="row">
    <div class="col-md-2"></div>
     <div class="col-md-8 text-center">
     	<div class="card">
    		<h4 class="card-header">Transaction <label for="failure" class="badge badge-danger">Failed</label></h4>
    		<div class="card-body">
    			<?php
	                echo "<p>Your order status is ". $status ."..</br>";
	                echo "Your transaction id for this transaction is ".$txnid.". <br>Contact our customer support.</p>";
	                echo "<a href='".base_url()."' class='btn btn-sm float-left btn-info'> < - Go Back</a>";
	            ?>
    		</div>
    	</div>
     </div>
    <div class="col-md-2"></div>
</div>
</div>

</body>
</html>
