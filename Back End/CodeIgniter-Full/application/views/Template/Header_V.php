<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Able Pro</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<!-- Favicon icon -->
		<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">

		<!-- Google font-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

		<!-- iconfont -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/icofont/css/icofont.css'); ?>">

		<!-- simple line icon -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/simple-line-icons/css/simple-line-icons.css'); ?>">

		<!-- Required Fremwork -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">

		<!-- Weather css -->
		<link href="<?php echo base_url('assets/css/svg-weather.css'); ?>" rel="stylesheet">

		<!-- Echart js -->
		<script src="<?php echo base_url('assets/plugins/charts/echarts/js/echarts-all.js'); ?>"></script>

		<!-- Style.css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">

		<!-- Responsive.css-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css'); ?>">

		<!--color css-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/color/color-1.min.css'); ?>" id="color"/>

    </head>
    <body class="sidebar-mini fixed">

		<!-- body start -->
		<div class="loader-bg">
			<div class="loader-bar">
			</div>
		</div>
			
		<div class="wrapper">
			<!-- Navbar header start-->
			<header class="main-header-top hidden-print">
				<a href="index.html" class="logo">
					<img class="img-fluid able-logo" src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Theme-logo">
				</a>
				<nav class="navbar navbar-static-top">
					<!-- Sidebar toggle button-->
					<a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
					<!-- Navbar Right Menu-->
					<div class="navbar-custom-menu f-right">
						<ul class="top-nav">
							<!--Notification Menu-->
							<li class="dropdown pc-rheader-submenu message-notification search-toggle">
								<a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
									<i class="icofont icofont-search-alt-1"></i>
								</a>
							</li>
							<li class="dropdown notification-menu">
								<a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
									<i class="icon-bell"></i>
									<span class="badge badge-danger header-badge">9</span>
								</a>
								<ul class="dropdown-menu">
									<li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
									<li class="bell-notification">
										<a href="javascript:;" class="media">
											<span class="media-left media-icon">
												<img class="img-circle" src="assets/images/avatar-1.png" alt="User Image">
											</span>
											<div class="media-body">
												<span class="block">Lisa sent you a mail</span>
												<span class="text-muted block-time">2min ago</span>
											</div>
										</a>
									</li>
									<li class="bell-notification">
										<a href="javascript:;" class="media">
											<span class="media-left media-icon">
												<img class="img-circle" src="assets/images/avatar-2.png" alt="User Image">
											</span>
											<div class="media-body">
												<span class="block">Server Not Working</span>
												<span class="text-muted block-time">20min ago</span>
											</div>
										</a>
									</li>
									<li class="bell-notification">
										<a href="javascript:;" class="media">
											<span class="media-left media-icon">
												<img class="img-circle" src="assets/images/avatar-3.png" alt="User Image">
											</span>
											<div class="media-body">
												<span class="block">Transaction xyz complete</span>
												<span class="text-muted block-time">3 hours ago</span>
											</div>
										</a>
									</li>
									<li class="not-footer">
										<a href="#!">See all notifications.</a>
									</li>
								</ul>
							</li>
							<!-- chat dropdown -->
							<li class="pc-rheader-submenu ">
								<a href="#!" class="drop icon-circle displayChatbox">
									<i class="icon-bubbles"></i>
									<span class="badge badge-danger header-badge blink">5</span>
								</a>

							</li>
							<!-- window screen -->
							<li class="pc-rheader-submenu">
								<a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
									<i class="icon-size-fullscreen"></i>
								</a>

							</li>
							<!-- User Menu-->
							<li class="dropdown">
								<a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
									<span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
									<span><?php echo $first_name; ?> <b><?php echo $last_name; ?></b> <i class=" icofont icofont-simple-down"></i></span>
								</a>
								<ul class="dropdown-menu settings-menu">
									<li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
									<li><a href="profile.html"><i class="icon-user"></i> Profile</a></li>
									<li><a href="message.html"><i class="icon-envelope-open"></i> My Messages</a></li>
									<li class="p-0">
										<div class="dropdown-divider m-0"></div>
									</li>
									<li><a href="lock-screen.html"><i class="icon-lock"></i> Lock Screen</a></li>
									<li><a href="#!"><i class="icon-logout"></i> Logout</a></li>

								</ul>
							</li>
						</ul>

						<!-- search -->
						<div id="morphsearch" class="morphsearch">
							<form class="morphsearch-form">

								<input class="morphsearch-input" type="search" placeholder="Search..."/>

								<button class="morphsearch-submit" type="submit">Search</button>

							</form>
							<div class="morphsearch-content">
								<div class="dummy-column">
									<h2>People</h2>
									<a class="dummy-media-object" href="#!">
										<img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
										<h3>Sara Soueidan</h3>
									</a>

									<a class="dummy-media-object" href="#!">
										<img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
										<h3>Shaun Dona</h3>
									</a>
								</div>
								<div class="dummy-column">
									<h2>Popular</h2>
									<a class="dummy-media-object" href="#!">
										<img src="assets/images/avatar-1.png" alt="PagePreloadingEffect"/>
										<h3>Page Preloading Effect</h3>
									</a>

									<a class="dummy-media-object" href="#!">
										<img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow"/>
										<h3>Draggable Dual-View Slideshow</h3>
									</a>
								</div>
								<div class="dummy-column">
									<h2>Recent</h2>
									<a class="dummy-media-object" href="#!">
										<img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration"/>
										<h3>Tooltip Styles Inspiration</h3>
									</a>
									<a class="dummy-media-object" href="#!">
										<img src="assets/images/avatar-1.png" alt="NotificationStyles"/>
										<h3>Notification Styles Inspiration</h3>
									</a>
								</div>
							</div><!-- /morphsearch-content -->
							<span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
						</div>
						<!-- search end -->
					</div>
				</nav>     
			</header>
			<!-- Navbar header end-->

			<!-- Side-Nav start-->
			<aside class="main-sidebar hidden-print " >
				<section class="sidebar" id="sidebar-scroll">
					<div class="user-panel">
						<div class="f-left image"><img src="assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
						<div class="f-left info">
							<p><?php echo $first_name; ?> <?php echo $last_name; ?></p>
							<p class="designation"><?php echo $status; ?> <i class="icofont icofont-caret-down m-l-5"></i></p>
						</div>
					</div>
					<!-- sidebar profile Menu-->
					<ul class="nav sidebar-menu extra-profile-list">
						<li>
							<a class="waves-effect waves-dark" href="profile.html">
								<i class="icon-user"></i>
								<span class="menu-text">View Profile</span>
								<span class="selected"></span>
							</a>
						</li>
						<li>
							<a class="waves-effect waves-dark" href="javascript:void(0)">
								<i class="icon-settings"></i>
								<span class="menu-text">Settings</span>
								<span class="selected"></span>
							</a>
						</li>
						<li>
							<a class="waves-effect waves-dark" href="javascript:void(0)">
								<i class="icon-logout"></i>
								<span class="menu-text">Logout</span>
								<span class="selected"></span>
							</a>
						</li>
					</ul>
					<!-- Sidebar Menu-->
					<ul class="sidebar-menu">
						<li class="nav-level">Navigation</li>
						<li class="active treeview">
							<a class="waves-effect waves-dark" href="index.html">
								<i class="icon-speedometer"></i><span> Dashboard</span>
							</a>                
						</li>
						<li class="nav-level">Components</li>
						<li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> UI Elements</span><i class="icon-arrow-down"></i></a>
							<ul class="treeview-menu">
								<li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Accordion</a></li>
								<li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> Button</a></li>
								<li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Label Badge</a></li>
								<li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i> Grid system</a></li>
								<li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i> Box Shadow</a></li>
								<li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i> Color</a></li>
								<li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i> Light Box</a></li>
								<li><a class="waves-effect waves-dark" href="notification.html"><i class="icon-arrow-right"></i> Notification</a></li>
								<li><a class="waves-effect waves-dark" href="panels-wells.html"><i class="icon-arrow-right"></i> Panels-Wells</a></li>
								<li><a class="waves-effect waves-dark" href="tabs.html"><i class="icon-arrow-right"></i> Tabs</a></li>
								<li><a class="waves-effect waves-dark" href="tooltips.html"><i class="icon-arrow-right"></i> Tooltips</a></li>
								<li><a class="waves-effect waves-dark" href="typography.html"><i class="icon-arrow-right"></i> Typography</a></li>
							</ul>
						</li>

						<li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-chart"></i><span> Charts &amp; Maps</span><span class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
							<ul class="treeview-menu">
								<li><a class="waves-effect waves-dark" href="float-chart.html"><i class="icon-arrow-right"></i> Float Charts</a></li>
								<li><a class="waves-effect waves-dark" href="morris-chart.html"><i class="icon-arrow-right"></i> Morris Charts</a></li>
							</ul>
						</li>

						<li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Forms</span><i class="icon-arrow-down"></i></a>
							<ul class="treeview-menu">
								<li><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>
								<li><a class="waves-effect waves-dark" href="form-elements-materialize.html"><i class="icon-arrow-right"></i> Form Elements Material</a></li>
								<li><a class="waves-effect waves-dark" href="form-elements-advance.html"><i class="icon-arrow-right"></i> Form Elements Advance</a></li>
							</ul>
						</li>
						
						<li class="treeview">
							<a class="waves-effect waves-dark" href="basic-table.html">
								<i class="icon-list"></i><span> Table</span>
							</a>                
						</li>


						<li class="nav-level">More</li>

						<li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
							<ul class="treeview-menu">
								<li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
									<ul class="treeview-menu">
										<li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
										
										<li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
										<li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
										<li><a class="waves-effect waves-dark" href="profile.html"><i class="icon-arrow-right"></i> Profile</a></li>
									</ul>
								</li>
								<li><a class="waves-effect waves-dark" href="lock-screen.html" target="_blank"><i class="icon-arrow-right"></i> Lock Screen</a></li>
								<li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
								<li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
								<li><a class="waves-effect waves-dark" href="search-result.html"><i class="icon-arrow-right"></i> Search Result</a></li>
							</ul>
						</li>


						<li class="nav-level">Menu Level</li>

						<li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>Menu Level 1</span><i class="icon-arrow-down"></i></a>
							<ul class="treeview-menu">
								<li>
									<a class="waves-effect waves-dark" href="#!">
										<i class="icon-arrow-right"></i>
										Level Two
									</a>
								</li>
								<li class="treeview">
									<a class="waves-effect waves-dark" href="#!">
										<i class="icon-arrow-right"></i>
										<span>Level Two</span>
										<i class="icon-arrow-down"></i>
									</a>
									<ul class="treeview-menu">
										<li>
											<a class="waves-effect waves-dark" href="#!">
												<i class="icon-arrow-right"></i>
												Level Three
											</a>
										</li>
										<li>
											<a class="waves-effect waves-dark" href="#!">
												<i class="icon-arrow-right"></i>
												<span>Level Three</span>
												<i class="icon-arrow-down"></i>
											</a>
											<ul class="treeview-menu">
												<li>
													<a class="waves-effect waves-dark" href="#!">
														<i class="icon-arrow-right"></i>
														Level Four
													</a>
												</li>
												<li>
													<a class="waves-effect waves-dark" href="#!">
														<i class="icon-arrow-right"></i>
														Level Four
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</section>
			</aside>
			<!-- Side-Nav end-->

			<!-- Sidebar chat start -->
			<div id="sidebar" class="p-fixed header-users showChat">
				<div class="had-container">
					<div class="card card_main header-users-main">
						<div class="card-content user-box">
							<div class="md-group-add-on p-20">
								<span class="md-add-on">
									<i class="icofont icofont-search-alt-2 chat-search"></i>
								</span>
								<div class="md-input-wrapper">
									<input type="text" class="md-form-control"  name="username" id="search-friends">
									<label>Search</label>
								</div>
							</div>
							<div class="media friendlist-main">
								<h6>Friend List</h6>
							</div>
							<div class="main-friend-list">
								<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Josephin Doe</div>
										<span>20min ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Alice</div>
										<span>1 hour ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
										<div class="live-status bg-danger"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Michael Scofield</div>
										<span>3 hours ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Irina Shayk</div>
										<span>1 day ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
										<div class="live-status bg-danger"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Sara Tancredi</div>
										<span>2 days ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Josephin Doe</div>
										<span>20min ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Alice</div>
										<span>1 hour ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Josephin Doe</div>
										<span>20min ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Alice</div>
										<span>1 hour ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip"  data-placement="left" title="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Josephin Doe</div>
										<span>20min ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Alice</div>
										<span>1 hour ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Josephin Doe</div>
										<span>20min ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Josephin Doe</div>
										<span>20min ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Josephin Doe</div>
										<span>20min ago</span>
									</div>
								</div>
								<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="friend-header">Josephin Doe</div>
										<span>20min ago</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="showChat_inner">
				<div class="media chat-inner-header">
					<a class="back_chatBox">
						<i class="icofont icofont-rounded-left"></i> Josephin Doe
					</a>
				</div>
				<div class="media chat-messages">
					<a class="media-left photo-table" href="#!">
						<img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
						<div class="live-status bg-success"></div>
					</a>
					<div class="media-body chat-menu-content">
						<div class="">
							<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
				</div>
				<div class="media chat-messages">
					<div class="media-body chat-menu-reply">
						<div class="">
							<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
					<div class="media-right photo-table">
						<a href="#!">
							<img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
							<div class="live-status bg-success"></div>
						</a>
					</div>
				</div>
				<div class="media chat-reply-box">
					<div class="md-input-wrapper">
						<input type="text" class="md-form-control" id="inputEmail" name="inputEmail" >
						<label>Share your thoughts</label>
						<span class="highlight"></span>
						<span class="bar"></span>  
						<button type="button" class="chat-send waves-effect waves-light">
							<i class="icofont icofont-location-arrow f-20 "></i>
						</button>
						<button type="button" class="chat-send waves-effect waves-light">
							<i class="icofont icofont-location-arrow f-20 "></i>
						</button>
					</div>
				</div>
			</div>
			<!-- Sidebar chat end-->