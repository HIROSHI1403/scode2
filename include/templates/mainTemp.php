<?php
include_once dirname(__FILE__)."/../functions.php";



function mainFooter(){
	echo<<<EOT
		<footer>

			<p>
				<span style="text-align:left;float:left"><a href="http://ryukoshanw.co.jp/">RYUKOSHA NETWARE </a>Inc.</span>
			</p>

		</footer>
EOT;
}

function mainNoJS(){
	echo<<<EOT
		<noscript>
			<div class="alert alert-block span10">
				<h4 class="alert-heading">Warning!</h4>
				<p>JavascriptがOFFになっているため表示エラーが発生しています。 <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> お使いのページのJavascriptを利用できるように設定してください。</p>
			</div>
		</noscript>
EOT;
}

function mainPageStart(){
	echo<<<EOT
		<div class="page-container">
EOT;
}

function mainPageEnd(){
	echo<<<EOT
		</div>
EOT;
}




function mainSidebarStart(){
	echo<<<EOT
		<div class="page-sidebar">
EOT;
}

//mein MENU
function mainSidebar(){
	echo<<<EOT
		<ul class="x-navigation" id="main-navi">
            <li class="xn-logo">
                <a href="./index.php">{$GLOBALS['title']}</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <div class="profile">
                    <div class="profile-data">
                        <div class="profile-data-name">LOGIN USER : {$_SESSION['s_name']}</div>
                        <div class="profile-data-title">LOGIN STATUS : {$_SESSION['s_login']}</div>
                    </div>
                </div>
            </li>
            <li class="xn-title">MAIN NAVIGATIONS</li>
            <li class="">
                <a href="./index.php"><span class="fa fa-desktop fa-fw"></span> <span class="xn-text">Dashboard</span></a>
            </li>
            <li class="">
				<a href="./task.php"><span class="fa fa-tasks fa-fw"></span> <span class="xn-text">Task Control</span></a>
            </li>
			<li class="">
                <a href="#"><span class="fa fa fa-credit-card fa-fw"></span> <span class="xn-text">Temporary</span></a>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                <ul>
                    <li><a href="pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                    <li><a href="pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                    <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                        <ul>
                            <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                            <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                        <ul>
                            <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                            <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                            <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                        </ul>
                    </li>
                    <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                    <li><a href="pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                    <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                    <li><a href="pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                    <li><a href="pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                    <li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file"></span> Blog</a>

                        <ul>
                            <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                            <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                        <ul>
                            <li><a href="pages-login.html">App Login</a></li>
                            <li><a href="pages-login-website.html">Website Login</a></li>
                            <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                        <ul>
                            <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                            <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                            <li><a href="pages-error-500.html"> Error 500</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
                <ul>
                    <li><a href="layout-boxed.html">Boxed</a></li>
                    <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
                    <li><a href="layout-nav-top.html">Navigation Top</a></li>
                    <li><a href="layout-nav-right.html">Navigation Right</a></li>
                    <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
                    <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
                    <li><a href="layout-frame-left.html">Frame Left Column</a></li>
                    <li><a href="layout-frame-right.html">Frame Right Column</a></li>
                    <li><a href="layout-search-left.html">Search Left Side</a></li>
                    <li><a href="blank.html">Blank Page</a></li>
                </ul>
            </li>





            <li class="xn-title">ADMIN NAVIGATIONS</li>
            <li class="">
                <a href="#"><span class="fa fa-desktop fa-fw"></span> <span class="xn-text">Dashboard</span></a>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">User Management</span></a>
                <ul>
                    <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>
                    <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                    <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>
                    <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                    <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                    <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                    <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                    <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                    <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>
                    <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                    <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Card management</span></a>
                <ul>
                    <li>
                        <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                        <div class="informer informer-danger">New</div>
                        <ul>
                            <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                            <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                            <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                            <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                        </ul>                            </li>
                    <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                    <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                    <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                    <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                    <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                <ul>
                    <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                    <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                    <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                <ul>
                    <li><a href="charts-morris.html"><span class="xn-text">Morris</span></a></li>
                    <li><a href="charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                    <li><a href="charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                    <li><a href="charts-other.html"><span class="xn-text">Other</span></a></li>
                </ul>
            </li>
            <li>
                <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                <ul>
                    <li class="xn-openable">
                        <a href="#">Second Level</a>
                        <ul>
                            <li class="xn-openable">
                                <a href="#">Third Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Fourth Level</a>
                                        <ul>
                                            <li><a href="#">Fifth Level</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END X-NAVIGATION -->
EOT;
}

function mainSidebarEnd(){
	echo<<<EOT
		</div>
EOT;
}





function mainContentStart(){
	echo<<<EOT
		<div class="page-content">
EOT;
}

function mainContentMenu(){
	echo<<<EOT
		<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
	        <!-- TOGGLE NAVIGATION -->
	        <li class="xn-icon-button">
	            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
	        </li>
	        <!-- END TOGGLE NAVIGATION -->
	        <!-- SIGN OUT -->
	        <li class="xn-icon-button pull-right">
	            <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out text-danger"></span></a>
	        </li>
	        <!-- END SIGN OUT -->
	        <li class="xn-icon-button pull-right">
            	<a href="https://gportal.iij-group.jp/" target="_blank"><span class="fa fa-columns fa-fw"></span></a>
            </li>
            <li class="xn-icon-button pull-right">
            	<a href="https://ohana.iij-group.jp/scheduler/" target="_blank"><span class="fa fa-calendar-o fa-fw"></span></a>
            </li>
            <li class="xn-icon-button pull-right">
            	<a href="https://ohana.iij-group.jp/reception/" target="_blank"><span class="fa fa-users fa-fw"></span></a>
            </li>
            <li class="xn-icon-button pull-right">
            	<a href="http://know-who.iij-group.jp/" target="_blank"><span class="fa fa-sitemap fa-fw"></span></a>
            </li>
            <li class="xn-icon-button pull-right">
            	<a href="https://cf.iij-group.jp/" target="_blank"><span class="fa fa-rss-square fa-fw"></span></a>
            </li>
            <li class="xn-icon-button pull-right">
            	<a href="https://iijtube.iij-group.jp/" target="_blank"><span class="fa fa-youtube-play fa-fw"></span></a>
            </li>
	    </ul>
	    <!-- END X-NAVIGATION VERTICAL -->
EOT;
}

function mainPageContentStart(){
	echo<<<EOT
		<div class="page-content-wrap">
EOT;
}

function mainPageContentEnd(){
	echo<<<EOT
		</div>
EOT;
}

function mainContentEnd(){
	echo<<<EOT
		</div>
EOT;
}



function mainMsg(){
	echo<<<EOT
		<!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>ログアウトしますか？</p>
                        <p>利用ごは必ずログアウトしてください。</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
							<form action="./form_actions.php" method="POST"">
								<button type="submit" name="F_exit" class="btn btn-success btn-lg">Yes</button>
								<button class="btn btn-default btn-lg mb-control-close">No</button>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
EOT;
}



function mainBreadcrumb($str){
	if (empty($str)) {
		$str = '#none page name';
	}
	echo<<<EOT
	<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="./index.php">Home</a></li>
        <li class="active">{$str}</li>
    </ul>
    <!-- END BREADCRUMB -->
EOT;
}
