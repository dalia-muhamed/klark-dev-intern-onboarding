<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="" />
		<title>Home page</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="styles/uikit/plugins/global/plugins.bundle.css?v=<?php echo filemtime('styles/uikit/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="styles/uikit/css/style.bundle.css?v=<?php echo filemtime('styles/uikit/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!-- our custom styles -->
		<link href="styles/main.css?v=<?php echo filemtime("styles/main.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="styles/raw-main.css?v=<?php echo filemtime("styles/raw-main.css"); ?>" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
         integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- our custom styles end-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div id="app_container">
	    <nav class="navbar">
			<h5>Zuntia</h5>
			<ul>
				<li>Dashboard</li>
				<li>Content Library</li>

			</ul>
		</nav>

		<div class="text-center mt-4 pt-5">
			This page Works
		</div>

		<!-- End::your code -->
		</div>

		<!--begin::Javascript-->
		<script>var hostUrl = "scripts/lib/uikit/";</script>
		<script src="scripts/lib/uikit/plugins/global/plugins.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/scripts.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/scripts.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/widgets.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/widgets.bundle.js') ?>"></script>

		<script src="scripts/lib/custom.js?v=<?php echo filemtime('scripts/lib/custom.js') ?>"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
