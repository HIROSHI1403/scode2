<?php

include_once dirname(__FILE__)."/../constant.php";

function mainHtmlHead(){
	echo<<<EOT
		<!-- META SECTION -->
		<title>{$GLOBALS['title']}</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
		<!-- END META SECTION -->

		<!-- CSS INCLUDE -->
		<link rel="stylesheet" type="text/css" id="theme" href="../css/theme-default.css"/>
		<!-- EOF CSS INCLUDE -->
EOT;
}

function mainHtmlFooter(){
	echo <<<EOT
		<!-- START PRELOADS -->
        <audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    	<!-- START SCRIPTS -->
	        <!-- START PLUGINS -->
	        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
	        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
	        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
	        <!-- END PLUGINS -->

	        <!-- START THIS PAGE PLUGINS-->
	        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
	        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	        <script type="text/javascript" src="../js/plugins/scrolltotop/scrolltopcontrol.js"></script>

	        <script type="text/javascript" src="../js/plugins/morris/raphael-min.js"></script>
	        <script type="text/javascript" src="../js/plugins/morris/morris.min.js"></script>
	        <script type="text/javascript" src="../js/plugins/rickshaw/d3.v3.js"></script>
	        <script type="text/javascript" src="../js/plugins/rickshaw/rickshaw.min.js"></script>
	        <script type='text/javascript' src='../js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
	        <script type='text/javascript' src='../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
	        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-datepicker.js'></script>
	        <script type="text/javascript" src="../js/plugins/owl/owl.carousel.min.js"></script>

	        <script type="text/javascript" src="../js/plugins/moment.min.js"></script>
	        <script type="text/javascript" src="../js/plugins/daterangepicker/daterangepicker.js"></script>
	        <!-- END THIS PAGE PLUGINS-->

	        <!-- START TEMPLATE -->
	        <script type="text/javascript" src="../js/settings.js"></script>

	        <script type="text/javascript" src="../js/plugins.js"></script>
	        <script type="text/javascript" src="../js/actions.js"></script>
	        <script type="text/javascript" src="../js/demo_dashboard.js"></script>
        	<!-- END TEMPLATE -->
        <!-- END SCRIPTS -->
EOT;
}