<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Eagle Tree || Property Agent App</title>
	<link rel="icon" href="<?= base_url() ?>public/images/logo/logo.png" type="image/ico" />

	<!-- Global stylesheets -->
	<link href="<?= base_url() ?>public/plugins/font-awesome/font-awesome.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/plugins/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/build/css/global/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/build/css/global/bootstrap_limitless.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/build/css/global/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/build/css/global/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/build/css/global/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<style lang="">
		form .error {
			margin-top: -10px;
			color: #ff0000;
		}
	</style>

	<!-- Core JS files -->
	<script src="<?= base_url() ?>public/build/js/global/jquery.min.js"></script>
	<script src="<?= base_url() ?>public/build/js/global/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>public/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?= base_url() ?>public/plugins/visualization/d3/d3.min.js"></script>
	<script src="<?= base_url() ?>public/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="<?= base_url() ?>public/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?= base_url() ?>public/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="<?= base_url() ?>public/plugins/ui/moment/moment.min.js"></script>
	<script src="<?= base_url() ?>public/plugins/pickers/daterangepicker.js"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->
	<script src="<?= base_url() ?>public/plugins/forms/selects/select2.min.js"></script>
	<script src="<?= base_url() ?>public/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?= base_url() ?>public/plugins/forms/validation/validate.min.js"></script>

	<script src="<?= base_url() ?>public/plugins/forms/wizards/steps.min.js"></script>
	<!-- Theme JS files -->
	<script src="<?= base_url() ?>public/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?= base_url() ?>public/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?= base_url() ?>public/plugins/forms/styling/switch.min.js"></script>
	<script src="<?= base_url() ?>public/plugins/notifications/pnotify.min.js"></script>

	<!-- Custom and Page -->
	<script src="<?= base_url() ?>public/build/js/custom/app.js"></script>
	<script src="<?= base_url() ?>public/build/js/pages/dashboard.js"></script>
	<script src="<?= base_url() ?>public/build/js/global/variable.js"></script>
	<script src="<?= base_url() ?>public/build/js/global/function.js"></script>
	<script src="<?= base_url() ?>public/build/js/global/function_pnotify.js"></script>

	<!-- /Page -->
	<script src="<?= base_url() ?>public/build/js/pages/change-photo.js"></script>
	<script src="<?= base_url() ?>public/build/js/pages/change-password.js"></script>
	<?php
	if (!empty($js_file)) {
		echo '<script type="module" src="' . base_url() . 'public/build/js/pages/' . $js_file . '.js"></script>';
	}
	if (!empty($javascript)) {
		echo '<script type="module" src="' . base_url() . 'public/build/js/pages/' . $javascript . '.js"></script>';
	}
	?>
</head>