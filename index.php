<?php 
require("config/config.php");
?>
<!DOCTYPE HTML>
<!--
	Cristina by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title> <?php echo $_BLOG_TITLE; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
                            <?php
								require_once("inc/header.php");
                            ?>
							<!-- Banner -->
							<?php
                               require_once("inc/banner.php");
                            ?>
							<!-- Destaques -->
							<?php
                               require_once("inc/destaques.php");
                            ?>

							<!-- Posts -->
							<?php
                               require_once("inc/posts.php");
                            ?>
						</div>
					</div>

				<!-- Sidebar -->
                           <?php
                               require_once("inc/sidebar.php");
                            ?>
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>