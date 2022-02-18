<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view('template/head_v') ?>
<!-- Head -->

<body>

	<!-- Main navbar -->
	<?php $this->load->view('template/outlet_navbar_v') ?>
	<!-- /main navbar -->


	<!-- Page header -->
	<div class="page-header">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<?php
						if(!empty($breadcrumb)){
							echo $breadcrumb;
						}
					?>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none">
				<div class="breadcrumb justify-content-center">
					<a href="#" class="breadcrumb-elements-item text-secondary">
						<b>Welcome Back Again <?= $this->session->userdata(SHORT_APP_NAME.'_'.'username') ?></b>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main sidebar -->
		
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<?php
					if(!empty($content)){
						$this->load->view($content);
					}
				?>

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Footer -->
	<div class="navbar navbar-expand-lg navbar-light">
		<div class="text-center w-100 p-2">
				&copy; 2021. CK-MRP. All rights reserved by <a href="https://www.linkedin.com/in/dedi-prasetio-518735175/" target="_blank">Prasetio</a>
		</div>
	</div>
	<!-- /footer -->

</body>

</html>