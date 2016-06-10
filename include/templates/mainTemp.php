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

function mainSidebar(){
	echo<<<EOT
		<ul class="x-navigation">
            <li class="xn-logo">
                <a href="index.html">{$GLOBALS['title']}</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-title">MAIN NAVIGATIONS</li>
            <li class="active">
                <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
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
	            <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
	        </li>
	        <!-- END SIGN OUT -->
	        <!-- MESSAGES -->
	        <li class="xn-icon-button pull-right">
	            <a href="#"><span class="fa fa-comments"></span></a>
	            <div class="informer informer-danger">4</div>
	            <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
	                <div class="panel-heading">
	                    <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
	                    <div class="pull-right">
	                        <span class="label label-danger">4 new</span>
	                    </div>
	                </div>
	                <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
	                    <a href="#" class="list-group-item">
	                        <div class="list-group-status status-online"></div>
	                        <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
	                        <span class="contacts-title">John Doe</span>
	                        <p>Praesent placerat tellus id augue condimentum</p>
	                    </a>
	                    <a href="#" class="list-group-item">
	                        <div class="list-group-status status-away"></div>
	                        <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
	                        <span class="contacts-title">Dmitry Ivaniuk</span>
	                        <p>Donec risus sapien, sagittis et magna quis</p>
	                    </a>
	                    <a href="#" class="list-group-item">
	                        <div class="list-group-status status-away"></div>
	                        <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
	                        <span class="contacts-title">Nadia Ali</span>
	                        <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
	                    </a>
	                    <a href="#" class="list-group-item">
	                        <div class="list-group-status status-offline"></div>
	                        <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
	                        <span class="contacts-title">Darth Vader</span>
	                        <p>I want my money back!</p>
	                    </a>
	                </div>
	                <div class="panel-footer text-center">
	                    <a href="pages-messages.html">Show all messages</a>
	                </div>
	            </div>
	        </li>
	        <!-- END MESSAGES -->
	        <!-- TASKS -->
	        <li class="xn-icon-button pull-right">
	            <a href="#"><span class="fa fa-tasks"></span></a>
	            <div class="informer informer-warning">3</div>
	            <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
	                <div class="panel-heading">
	                    <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
	                    <div class="pull-right">
	                        <span class="label label-warning">3 active</span>
	                    </div>
	                </div>
	                <div class="panel-body list-group scroll" style="height: 200px;">
	                    <a class="list-group-item" href="#">
	                        <strong>Phasellus augue arcu, elementum</strong>
	                        <div class="progress progress-small progress-striped active">
	                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
	                        </div>
	                        <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
	                    </a>
	                    <a class="list-group-item" href="#">
	                        <strong>Aenean ac cursus</strong>
	                        <div class="progress progress-small progress-striped active">
	                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
	                        </div>
	                        <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
	                    </a>
	                    <a class="list-group-item" href="#">
	                        <strong>Lorem ipsum dolor</strong>
	                        <div class="progress progress-small progress-striped active">
	                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
	                        </div>
	                        <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
	                    </a>
	                    <a class="list-group-item" href="#">
	                        <strong>Cras suscipit ac quam at tincidunt.</strong>
	                        <div class="progress progress-small">
	                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
	                        </div>
	                        <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
	                    </a>
	                </div>
	                <div class="panel-footer text-center">
	                    <a href="pages-tasks.html">Show all tasks</a>
	                </div>
	            </div>
	        </li>
	        <!-- END TASKS -->
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
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
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