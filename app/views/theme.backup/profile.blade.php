<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Profile</title>

		<!-- Fonts -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic">
		<link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
		
		<!-- Bootstrap core CSS -->
		{{ HTML::style('bootstrap/css/bootstrap.min-50686.css') }}

		<!-- Font Awesome CSS -->
		{{ HTML::style('fonts/font-awesome/css/font-awesome.min-45579.css') }}

		<!-- Icomoon CSS -->
		{{ HTML::style('fonts/icomoon/style.css') }}

		<!-- Animate CSS -->
		{{ HTML::style('css/libs/animate.min.css') }}

		<!-- Bootstrap Switch -->
		{{ HTML::style('css/libs/bootstrap-switch.css') }}

		<!-- Bootstrap Select -->
		{{ HTML::style('css/libs/bootstrap-select.min.css') }}

		<!-- Bootstrap WYSIHTML5 -->
		{{ HTML::style('css/libs/bootstrap-wysihtml5.css') }}

		<!-- jQuery Fullcalendar -->
		{{ HTML::style('css/libs/fullcalendar.css') }}

		<!-- jVectorMap -->
		{{ HTML::style('css/libs/jquery-jvectormap-1.2.2.css') }}

		<!-- Prism -->
		{{ HTML::style('css/libs/prism.css') }}

		<!-- Custom styles for this template -->
		<link href="{{{ asset('assets/css/styler/style.css') }}}" rel="stylesheet" type="text/css">
		<link href="{{{ asset('assets/css/demo.css') }}}" rel="stylesheet" type="text/css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div id="wrapper">
<div id="sidebar">
	<div class="inner">

		<nav class="side-nav">
			<ul class="nav nav-pills nav-stacked user-bar">
				<li>
					<a href="#user-menu" data-toggle="collapse" class="dropdown-toggle">
						<span class="pull-left">
							<img src="img/samples/avatar-4.jpg">
						</span>
						<span>
							<span class="user-name">Rob Thomas</span>
							<span class="connection online"><i class="fa fa-circle"></i> Online</span>
						</span>

						<b class="caret"></b>
					</a>
					<ul class="panel-collapse collapse" id="user-menu">
						<li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
						<li><a href="profile"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="#"><i class="fa fa-question-circle"></i> Help</a></li>
						<li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		
		<nav class="navbar navbar-inverse user-notification">
			<div class="">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="tooltip" title="Friend Requests" data-placement="bottom" data-trigger="hover">
							<i class="fa fa-users"></i>
						</a>
					</li>
					<li class="dropdown">
						<a href="tasks" class="dropdown-toggle" data-toggle="tooltip" title="My Tasks" data-placement="bottom" data-trigger="hover">
							<i class="fa fa-th-list"></i>
							<span class="badge badge-info">1</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="messages" class="dropdown-toggle" data-toggle="tooltip" title="Messages" data-placement="bottom" data-trigger="hover">
							<i class="fa fa-envelope"></i>
							<span class="badge badge-danger">4</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<nav class="side-nav">
			<ul class="nav nav-pills nav-stacked">
				<li >
					<a href="index">
						<i class="fa fa-dashboard"></i>
						Dashboard
					</a>
				</li>

				<li>
					<a href="#tasks" data-toggle="collapse" data-parent=".side-nav" class="collapsed">
						<i class="fa fa-list-ul"></i>
						Task Lists <b class="caret"></b>
					</a>
					<ul class="panel-collapse collapse " id="tasks">
						<li ><a href="tasks"><i class="fa fa-arrow-right"></i> Task inside Panel</a></li>
						<li ><a href="tasks-alt"><i class="fa fa-arrow-right"></i> Task without Panel</a></li>
					</ul>
				</li>

				<li>
					<a href="#messages" data-toggle="collapse" data-parent=".side-nav" class="collapsed">
						<i class="fa fa-comments"></i>
						Messages <b class="caret"></b>
					</a>
					<ul class="panel-collapse collapse " id="messages">
						<li ><a href="messages"><i class="fa fa-arrow-right"></i> Messages inside Panel</a></li>
						<li ><a href="messages-alt"><i class="fa fa-arrow-right"></i> Messages without Panel</a></li>
					</ul>
				</li>

				<li >
					<a href="charts">
						<i class="fa fa-bar-chart-o"></i>
						Charts
					</a>
				</li>

				<li >
					<a href="calendar">
						<i class="fa fa-calendar"></i>
						Calendar
					</a>
				</li>

				<li>
					<a href="#ui" data-toggle="collapse" data-parent=".side-nav" class="collapsed">
						<i class="icon-wand"></i>
						UI Elements <b class="caret"></b>
					</a>
					<ul class="panel-collapse collapse " id="ui">
						<li >
							<a href="forms">
								<i class="fa fa-list-alt"></i>
								Forms
							</a>
						</li>
						<li >
							<a href="typo">
								<i class="fa fa-font"></i>
								Typography
							</a>
						</li>

						<li >
							<a href="icons">
								<i class="fa fa-picture-o"></i>
								Icons
							</a>
						</li>

						<li >
							<a href="tables">
								<i class="fa fa-table"></i>
								Tables
							</a>
						</li>

						<li >
							<a href="panels">
								<i class="fa fa-th-large"></i>
								Panels
							</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#pages" data-toggle="collapse" data-parent=".side-nav" class="collapsed">
						<i class="icon-copy"></i>
						Pages <b class="caret"></b>
					</a>
					<ul class="panel-collapse collapse in" id="pages">
						<li ><a href="signup"><i class="fa fa-arrow-right"></i> Sign up</a></li>
						<li ><a href="signin"><i class="fa fa-arrow-right"></i> Sign in</a></li>
						<li class="active"><a href="profile"><i class="fa fa-arrow-right"></i> Profile</a></li>
						<li ><a href="404"><i class="fa fa-arrow-right"></i> Error 404</a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<div class="panel panel-outline">
			<div class="panel-body">
				<ul class="list-unstyled">
					
					<li>
						CPU Usage
						<div class="progress">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								<span class="sr-only">40%</span>
							</div>
						</div>
					</li>
					<li>
						RAM Usage
						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
								<span class="sr-only">10%</span>
							</div>
						</div>
					</li>
					<li>
						Bandwidth
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60%</span>
							</div>
						</div>
					</li>
					<li>
						HDD Space
						<div class="progress">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80%</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="middle">
	
	<header id="header">
	<nav class="navbar navbar-default">
		<div class="navbar-switcher">
			<button type="button" class="navbar-toggle" data-toggle="side-menu" data-target="#sidebar">
				<span class="sr-only">Toggle Sidebar</span>
				<i class="fa fa-bars"></i>
			</button>
		</div>

		<div class="navbar-switcher navbar-switcher-right">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topnav">
				<span class="sr-only">Toggle Menu</span>
				<i class="fa fa-bars"></i>
			</button>
		</div>

		<div class="navbar-header">
			<a class="navbar-brand" id="brand" href="index">DCAF</a>
		</div>

		

		<div class="collapse navbar-collapse" id="topnav">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-gear"></i> Users Manager <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Add New User</a></li>
						<li><a href="#">Add New Group</a></li>
						<li><a href="#">Add New Access Level</a></li>
						<li class="divider"></li>
						<li><a href="#">View All Permissions</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-users"></i> Settings <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-wrench"></i> Site Settings</a></li>
						<li><a href="#"><i class="fa fa-cogs"></i> Server Settings</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

</header><!-- /#header -->
	<div id="content" class="user-profile no-gap">

		<div class="container">

			<div class="row">

				<div class="section-dark">

					<div class="col-lg-2 col-md-2 profile-info">
						<div class="thumbnail avatar">
							<img src="img/samples/avatar-4.jpg">
						</div>

						<div class="details">
							<h1 class="profile-name">Rob Thomas</h1>
							<ul class="profile-details list-unstyled">
								<li><i class="fa fa-briefcase"></i> Front-end Web Developer</li>
								<li><i class="fa fa-map-marker"></i> Silicon Valley</li>
								<li><i class="fa fa-globe"></i> <a href="#">www.bootstrapstyler.com</a></li>
							</ul>
						</div>

						<ul class="profile-stats list-unstyled">
							<li>
								<i class="fa fa-user"></i>
								Followers 
								<span class="badge badge-info">32</span>
							</li>
							<li>
								<i class="fa fa-user"></i>
								Commits 
								<span class="badge badge-info">122</span>
							</li>
							<li>
								<i class="fa fa-user"></i>
								Messages 
								<span class="badge badge-info">60</span>
							</li>
							<li>
								<i class="fa fa-user"></i>
								Followers 
								<span class="badge badge-info">77</span>
							</li>
						</ul>
					</div>

					<div class="section-light col-lg-10 col-md-10">

						<div class="row">
							<div class="col-lg-9 col-md-9 profile-stream">
								<section class="profile-stream">

									<form class="status-form" role="form">
										<div class="form-body">
											<div class="form-group">
												<textarea class="form-control" placeholder="What's on your mind?"></textarea>
											</div>
										</div>

										<div class="form-footer">
											<div class="pull-left">
												<label class="control-label">Attach file</label> 
												<a href="#" class="btn btn-default btn-sm">Select file</a>
											</div>

											<div class="pull-right actions">
												<div class="form-group">
													<label class="control-label">Pin post</label>
													<select>
														<option>For a week</option>
														<option>For a month</option>
														<option>Permanently</option>
													</select>
												</div>

												<button class="btn btn-primary btn-sm">Share</button>
											</div>
										</div>
									</form>

									<div class="panel panel-outline">
										<div class="panel-heading">
											<h3 class="panel-title">Recent Activities</h3>
										</div><!-- /.panel-heading -->
										<div class="panel-body">

											<div class="activity-stream">

				                                <div class="media">
													<a class="pull-left" href="profile">
														<img class="media-object" src="img/samples/avatar-7.jpg" alt="Jason Lee">
													</a>
													<div class="media-body">
														<h4 class="media-heading"><a href="#">Jeremy White</a></h4>
														<p>Bespoke qui master cleanse anim tousled minim.</p>

														<ul class="list-inline">
															<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
															<li><a href="#" class="small">Comment</a></li>
															<li><a href="#" class="small">Share</a></li>
															<li><span class="muted small">about an hour ago</span></li>
														</ul>

														<form class="form-inline form-comment">
															<div class="form-group">
																<input type="text" class="form-control input-sm" placeholder="Write a comment ...">
															</div>
														</form>
													</div>
												</div>

												<div class="media">
													<a class="pull-left" href="profile">
														<img class="media-object" src="img/samples/avatar-8.jpg" alt="Jason Lee">
													</a>
													<div class="media-body">
														<h4 class="media-heading"><a href="#">Samantha Hills</a></h4>
														<p>Intelligentsia mollit mustache biodiesel dolor. Pug sustainable flannel id minim, blue bottle umami tumblr keffiyeh odd future swag fixie.</p>

														<ul class="list-inline">
															<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
															<li><a href="#" class="small">Comment</a></li>
															<li><a href="#" class="small">Share</a></li>
															<li><span class="muted small">about an hour ago</span></li>
														</ul>

														<div class="media">
															<a class="pull-left" href="profile">
																<img class="media-object" src="img/samples/avatar-2.jpg" alt="Jason Lee">
															</a>
															<div class="media-body">
																<h4 class="media-heading"><a href="#">Nick Adam</a></h4>
																<p>Umami seitan fashion axe, elit veniam whatever raw denim art party mumblecore jean shorts ad delectus eiusmod. </p>

																<ul class="list-inline">
																	<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
																	<li><a href="#" class="small">Comment</a></li>
																	<li><a href="#" class="small">Share</a></li>
																	<li><span class="muted small">about an hour ago</span></li>
																</ul>
															</div>
														</div>

														<form class="form-inline form-comment">
															<div class="form-group">
																<input type="text" class="form-control input-sm" placeholder="Write a comment ...">
															</div>
														</form>
													</div>
												</div>

												<div class="media">
													<a class="pull-left" href="profile">
														<img class="media-object" src="img/samples/avatar-6.jpg" alt="A.J. Cook">
													</a>
													<div class="media-body">
														<h4 class="media-heading"><a href="#">A.J. Cook</a></h4>
														<p>Bespoke qui master cleanse anim tousled minim.</p>

														<ul class="list-inline">
															<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
															<li><a href="#" class="small">Comment</a></li>
															<li><a href="#" class="small">Share</a></li>
															<li><span class="muted small">about an hour ago</span></li>
														</ul>

														<form class="form-inline form-comment">
															<div class="form-group">
																<input type="text" class="form-control input-sm" placeholder="Write a comment ...">
															</div>
														</form>
													</div>
												</div>

												<div class="media">
													<a class="pull-left" href="profile">
														<img class="media-object" src="img/samples/avatar-4.jpg" alt="Jason Lee">
													</a>
													<div class="media-body">
														<h4 class="media-heading"><a href="#">Rob Thomas</a></h4>
														<p>Enjoying the firework</p>
														<a href="#" class="thumbnail inline-thumbnail">
															<img src="img/samples/slide-2.jpg">
														</a>

														<ul class="list-inline">
															<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
															<li><a href="#" class="small">Comment</a></li>
															<li><a href="#" class="small">Share</a></li>
															<li><span class="muted small">about an hour ago</span></li>
														</ul>

														<form class="form-inline form-comment">
															<div class="form-group">
																<input type="text" class="form-control input-sm" placeholder="Write a comment ...">
															</div>
														</form>
													</div>
												</div>

												<div class="media">
													<a class="pull-left" href="profile">
														<img class="media-object" src="img/samples/avatar-6.jpg" alt="A.J. Cook">
													</a>
													<div class="media-body">
														<h4 class="media-heading"><a href="#">A.J. Cook</a></h4>
														<iframe width="560" height="315" src="http://www.youtube.com/embed/FktsFcooIG8" frameborder="0" allowfullscreen></iframe>

														<ul class="list-inline">
															<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
															<li><a href="#" class="small">Comment</a></li>
															<li><a href="#" class="small">Share</a></li>
															<li><span class="muted small">about an hour ago</span></li>
														</ul>

														<div class="media">
															<a class="pull-left" href="profile">
																<img class="media-object" src="img/samples/avatar-2.jpg" alt="Jason Lee">
															</a>
															<div class="media-body">
																<h4 class="media-heading"><a href="#">Nick Adam</a></h4>
																<p>Umami seitan fashion axe, elit veniam whatever raw denim art party mumblecore jean shorts ad delectus eiusmod. </p>

																<ul class="list-inline">
																	<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
																	<li><a href="#" class="small">Comment</a></li>
																	<li><a href="#" class="small">Share</a></li>
																	<li><span class="muted small">about an hour ago</span></li>
																</ul>
															</div>
														</div>

														<div class="media">
															<a class="pull-left" href="profile">
																<img class="media-object" src="img/samples/avatar-9.jpg" alt="Jason Lee">
															</a>
															<div class="media-body">
																<h4 class="media-heading"><a href="#">Nick Adam</a></h4>
																<p>When you click the Share button, the HTML code used to embed a link that video is displayed directly below it, however that's not what we are after--we want to directly embed the video into the page. We do that by clicking the Embed button which is displayed directly below the Link URL, as shown below. </p>

																<ul class="list-inline">
																	<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
																	<li><a href="#" class="small">Comment</a></li>
																	<li><a href="#" class="small">Share</a></li>
																	<li><span class="muted small">about an hour ago</span></li>
																</ul>
															</div>
														</div>

														<form class="form-inline form-comment">
															<div class="form-group">
																<input type="text" class="form-control input-sm" placeholder="Write a comment ...">
															</div>
														</form>
													</div>
												</div>

											</div>

										</div>
									</div>
								</section><!-- /.profile-stram -->
							</div>

							<div class="col-lg-3 col-md-3 profile-sidebar">

								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Friends</h3>
									</div><!-- /.panel-heading -->
									<div class="panel-body">
										<ul class="list-unstyled friend-list">
											<li>
												<a href="#">
													<span class="label label-success">online</span>
													<img src="img/samples/avatar-8.jpg">Samantha Hills
												</a>
											</li>
											<li>
												<a href="#">
													<span class="label label-success">online</span>
													<img src="img/samples/avatar-2.jpg">Nick Adam
												</a>
											</li>
											<li>
												<a href="#">
													<span class="label label-success">online</span>
													<img src="img/samples/avatar-3.jpg">Samantha Brown
												</a>
											</li>
											<li>
												<a href="#">
													<span class="label label-success">online</span>
													<img src="img/samples/avatar-4.jpg">Jeremy White
												</a>
											</li>
										</ul>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Task List</h3>
									</div><!-- /.panel-heading -->
									<div class="panel-body">
										<ul class="list-unstyled">
											<li>
												Upgrade to Laravel 4.1
												<div class="progress">
													<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
														<span class="sr-only">70% Complete (success)</span>
													</div>
												</div>
											</li>
											<li>
												Create user management package
												<div class="progress">
													<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
														<span class="sr-only">50% Complete (success)</span>
													</div>
												</div>
											</li>
											<li>
												Migrate database to PostgreSQL
												<div class="progress">
													<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
														<span class="sr-only">20% Complete (success)</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.user-profile -->

</div>

		</div><!-- /#wrapper -->
		
		<footer id="footer">
			<div class="row">
				<div class="col-xs-6">
					<ul class="list-inline">
						<li>&copy; <a href="#">Admin</a></li>
					</ul>
				</div>
				<div class="col-xs-6">
					<ul class="list-inline social-network">
						<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						<li><a href="#"><i class="fa fa-github-square"></i></a></li>
					</ul>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		{{ HTML::script('js/libs/jquery-1.10.2.min.js') }}

		<!-- jQuery UI -->
		{{ HTML::script('js/libs/jquery-ui.min.js') }}

		<!-- Bootstrap core JavaScript -->
		{{ HTML::script('bootstrap/js/bootstrap.min.js?v=3.0.2') }}

		<!-- jQuery Transit -->
		{{ HTML::script('js/libs/jquery.transit.min.js?v=0.9.9') }}

		<!-- Bootstrap Switch -->
		{{ HTML::script('js/libs/bootstrap-switch.js') }}

		<!-- Bootstrap Select -->
		{{ HTML::script('js/libs/bootstrap-select.min.js') }}

		<!-- Bootstrap File -->
		{{ HTML::script('js/libs/bootstrap-filestyle.js') }}

		{{ HTML::script('js/libs/wysihtml5-0.3.0.min.js') }}

		<!-- Bootstrap WYSIHTML5 -->
		{{ HTML::script('js/libs/bootstrap-wysihtml5.js') }}

		<!-- jQuery FullCalendar -->
		{{ HTML::script('js/libs/fullcalendar.min.js') }}
		{{ HTML::script('js/libs/gcal.js') }}

		<!-- Prism -->
		{{ HTML::script('js/libs/prism.js') }}

		<!-- jVectorMap -->
		{{ HTML::script('js/libs/jquery-jvectormap-1.2.2.min.js') }}
		{{ HTML::script('js/libs/jquery-jvectormap-world-mill-en.js') }}

		<!-- Flot -->
		{{ HTML::script('js/libs/jquery.flot.min.js') }}
		{{ HTML::script('js/libs/jquery.flot.time.min.js') }}
		{{ HTML::script('js/libs/jquery.flot.pie.min.js') }}
		{{ HTML::script('js/libs/jquery.flot.resize.min.js') }}
		{{ HTML::script('js/libs/jquery.flot.stack.min.js') }}
		{{ HTML::script('js/libs/jquery.flot.tooltip.min.js') }}

		<!-- Sparkline -->
		{{ HTML::script('js/libs/jquery.sparkline.min.js') }}

		<!-- Prism -->
		{{ HTML::script('js/libs/jquery.sparkline.min.js') }}

		<!-- jQuery EqualHeights -->
		{{ HTML::script('js/libs/jquery.equalheights.min.js') }}

		<!-- jQuery Nicescroll -->
		{{ HTML::script('js/libs/jquery.nicescroll.min.js') }}

		<!-- Theme script -->
		{{ HTML::script('js/styler/script.js') }}
		{{ HTML::script('js/styler/sample_graphs.js') }}
	</body>
</html>
<!-- Localized -->