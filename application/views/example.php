<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php
		$this->load->view('template/head');
		?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
		<a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
		<a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
		<a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> |
		<a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |
		<a href='<?php echo site_url('examples/film_management')?>'>Films</a> |
		<a href='<?php echo site_url('examples/multigrids')?>'>Multigrid [BETA]</a>

		<?php
		$this->load->view('template/topbar');
		//$this->load->view('template/sidebar');
		?>

	</div>

	<section class="content-header">
	    <h1>
	        Dashboard
	        <small>Control panel</small>
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Dashboard</li>
	    </ol>
	</section>

	<div style='height:20px;'></div>
    <div>
		<?php echo $output; ?>
    </div>
</body>



</html>
