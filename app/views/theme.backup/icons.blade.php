<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Icons</title>

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
					<ul class="panel-collapse collapse in" id="ui">
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

						<li class="active">
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
					<ul class="panel-collapse collapse " id="pages">
						<li ><a href="signup"><i class="fa fa-arrow-right"></i> Sign up</a></li>
						<li ><a href="signin"><i class="fa fa-arrow-right"></i> Sign in</a></li>
						<li ><a href="profile"><i class="fa fa-arrow-right"></i> Profile</a></li>
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
	<div class="page-header">
		<h1>Font Awesome 4.0.3</h1>
	</div>

	<div id="content">
		<div class="container">

			<section id="new">
				<h2 class="page-header">11 New Icons in 4.0</h2>
				
				<div class="row fontawesome-icon-list">
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rub"></i> fa-rub</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-pagelines"></i> fa-pagelines</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-wheelchair"></i> fa-wheelchair</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-try"></i> fa-try</a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></a></div>
									
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a></div>
				</div>
			</section>

			<section id="web-application">
				<h2 class="page-header">Web Application Icons</h2>

				<div class="row fontawesome-icon-list">
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-adjust"></i> fa-adjust</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-anchor"></i> fa-anchor</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-archive"></i> fa-archive</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrows"></i> fa-arrows</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrows-h"></i> fa-arrows-h</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrows-v"></i> fa-arrows-v</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-asterisk"></i> fa-asterisk</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-ban"></i> fa-ban</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-barcode"></i> fa-barcode</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bars"></i> fa-bars</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-beer"></i> fa-beer</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bell"></i> fa-bell</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bell-o"></i> fa-bell-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bolt"></i> fa-bolt</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-book"></i> fa-book</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bookmark"></i> fa-bookmark</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-briefcase"></i> fa-briefcase</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bug"></i> fa-bug</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-building-o"></i> fa-building-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bullhorn"></i> fa-bullhorn</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bullseye"></i> fa-bullseye</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-calendar"></i> fa-calendar</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-calendar-o"></i> fa-calendar-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-camera"></i> fa-camera</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-camera-retro"></i> fa-camera-retro</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-certificate"></i> fa-certificate</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-check"></i> fa-check</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-check-circle"></i> fa-check-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-check-square"></i> fa-check-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-check-square-o"></i> fa-check-square-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-circle"></i> fa-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-circle-o"></i> fa-circle-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-clock-o"></i> fa-clock-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-cloud"></i> fa-cloud</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-cloud-download"></i> fa-cloud-download</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-code"></i> fa-code</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-code-fork"></i> fa-code-fork</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-coffee"></i> fa-coffee</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-cog"></i> fa-cog</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-cogs"></i> fa-cogs</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-comment"></i> fa-comment</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-comment-o"></i> fa-comment-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-comments"></i> fa-comments</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-comments-o"></i> fa-comments-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-compass"></i> fa-compass</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-credit-card"></i> fa-credit-card</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-crop"></i> fa-crop</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-crosshairs"></i> fa-crosshairs</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-cutlery"></i> fa-cutlery</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-desktop"></i> fa-desktop</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-download"></i> fa-download</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-envelope"></i> fa-envelope</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-envelope-o"></i> fa-envelope-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-eraser"></i> fa-eraser</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-exchange"></i> fa-exchange</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-exclamation"></i> fa-exclamation</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-external-link"></i> fa-external-link</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-external-link-square"></i> fa-external-link-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-eye"></i> fa-eye</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-eye-slash"></i> fa-eye-slash</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-female"></i> fa-female</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-film"></i> fa-film</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-filter"></i> fa-filter</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-fire"></i> fa-fire</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-flag"></i> fa-flag</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-flag-o"></i> fa-flag-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-flask"></i> fa-flask</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-folder"></i> fa-folder</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-folder-o"></i> fa-folder-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-folder-open"></i> fa-folder-open</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-frown-o"></i> fa-frown-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-gamepad"></i> fa-gamepad</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-gavel"></i> fa-gavel</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-gift"></i> fa-gift</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-glass"></i> fa-glass</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-globe"></i> fa-globe</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-hdd-o"></i> fa-hdd-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-headphones"></i> fa-headphones</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-heart"></i> fa-heart</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-heart-o"></i> fa-heart-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-home"></i> fa-home</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-inbox"></i> fa-inbox</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-info"></i> fa-info</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-info-circle"></i> fa-info-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-key"></i> fa-key</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-laptop"></i> fa-laptop</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-leaf"></i> fa-leaf</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-lemon-o"></i> fa-lemon-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-level-down"></i> fa-level-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-level-up"></i> fa-level-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-location-arrow"></i> fa-location-arrow</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-lock"></i> fa-lock</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-magic"></i> fa-magic</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-magnet"></i> fa-magnet</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-male"></i> fa-male</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-map-marker"></i> fa-map-marker</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-meh-o"></i> fa-meh-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-microphone"></i> fa-microphone</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-minus"></i> fa-minus</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-minus-circle"></i> fa-minus-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-minus-square"></i> fa-minus-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-mobile"></i> fa-mobile</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-money"></i> fa-money</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-moon-o"></i> fa-moon-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-music"></i> fa-music</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-pencil"></i> fa-pencil</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-pencil-square"></i> fa-pencil-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-phone"></i> fa-phone</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-phone-square"></i> fa-phone-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-picture-o"></i> fa-picture-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-plane"></i> fa-plane</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-plus"></i> fa-plus</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-plus-circle"></i> fa-plus-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-plus-square"></i> fa-plus-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-power-off"></i> fa-power-off</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-print"></i> fa-print</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-qrcode"></i> fa-qrcode</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-question"></i> fa-question</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-question-circle"></i> fa-question-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-quote-left"></i> fa-quote-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-quote-right"></i> fa-quote-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-random"></i> fa-random</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-refresh"></i> fa-refresh</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-reply"></i> fa-reply</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-reply-all"></i> fa-reply-all</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-retweet"></i> fa-retweet</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-road"></i> fa-road</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rocket"></i> fa-rocket</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rss"></i> fa-rss</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rss-square"></i> fa-rss-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-search"></i> fa-search</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-search-minus"></i> fa-search-minus</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-search-plus"></i> fa-search-plus</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-share"></i> fa-share</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-share-square"></i> fa-share-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-share-square-o"></i> fa-share-square-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-shield"></i> fa-shield</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sign-in"></i> fa-sign-in</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sign-out"></i> fa-sign-out</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-signal"></i> fa-signal</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sitemap"></i> fa-sitemap</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-smile-o"></i> fa-smile-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort"></i> fa-sort</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-asc"></i> fa-sort-asc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-desc"></i> fa-sort-desc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-spinner"></i> fa-spinner</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-square"></i> fa-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-square-o"></i> fa-square-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-star"></i> fa-star</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-star-half"></i> fa-star-half</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-star-half-o"></i> fa-star-half-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-star-o"></i> fa-star-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-subscript"></i> fa-subscript</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-suitcase"></i> fa-suitcase</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-sun-o"></i> fa-sun-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-superscript"></i> fa-superscript</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-tablet"></i> fa-tablet</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-tachometer"></i> fa-tachometer</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-tag"></i> fa-tag</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-tags"></i> fa-tags</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-tasks"></i> fa-tasks</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-terminal"></i> fa-terminal</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-ticket"></i> fa-ticket</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-times"></i> fa-times</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-times-circle"></i> fa-times-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-tint"></i> fa-tint</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-trash-o"></i> fa-trash-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-trophy"></i> fa-trophy</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-truck"></i> fa-truck</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-umbrella"></i> fa-umbrella</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-unlock"></i> fa-unlock</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-upload"></i> fa-upload</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-user"></i> fa-user</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-users"></i> fa-users</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-video-camera"></i> fa-video-camera</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-volume-down"></i> fa-volume-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-volume-off"></i> fa-volume-off</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-volume-up"></i> fa-volume-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-wheelchair"></i> fa-wheelchair</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-wrench"></i> fa-wrench</a></div>
				</div>
			</section><!-- /#web-application -->

			<section id="form-control">
				<h2 class="page-header">Form Control Icons</h2>

				<div class="row fontawesome-icon-list">
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-check-square"></i> fa-check-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-check-square-o"></i> fa-check-square-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-circle"></i> fa-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-circle-o"></i> fa-circle-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-minus-square"></i> fa-minus-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-plus-square"></i> fa-plus-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-square"></i> fa-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-square-o"></i> fa-square-o</a></div>
				</div>
			</section><!-- /#form-control -->

			<section id="currency">
				<h2 class="page-header">Currency Icons</h2>
				<div class="row fontawesome-icon-list">
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-btc"></i> fa-btc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-eur"></i> fa-eur</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-gbp"></i> fa-gbp</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-inr"></i> fa-inr</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-jpy"></i> fa-jpy</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-krw"></i> fa-krw</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-money"></i> fa-money</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rub"></i> fa-rub</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-try"></i> fa-try</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-usd"></i> fa-usd</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></a></div>

				</div>
			</section><!-- /#currency -->

			<section id="text-editor">
				<h2 class="page-header">Text Editor Icons</h2>

				<div class="row fontawesome-icon-list">
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-align-center"></i> fa-align-center</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-align-justify"></i> fa-align-justify</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-align-left"></i> fa-align-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-align-right"></i> fa-align-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bold"></i> fa-bold</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chain-broken"></i> fa-chain-broken</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-clipboard"></i> fa-clipboard</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-columns"></i> fa-columns</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-eraser"></i> fa-eraser</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-file"></i> fa-file</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-file-o"></i> fa-file-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-file-text"></i> fa-file-text</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-file-text-o"></i> fa-file-text-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-files-o"></i> fa-files-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-floppy-o"></i> fa-floppy-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-font"></i> fa-font</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-indent"></i> fa-indent</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-italic"></i> fa-italic</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-link"></i> fa-link</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-list"></i> fa-list</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-list-alt"></i> fa-list-alt</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-list-ol"></i> fa-list-ol</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-list-ul"></i> fa-list-ul</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-outdent"></i> fa-outdent</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-paperclip"></i> fa-paperclip</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-repeat"></i> fa-repeat</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-scissors"></i> fa-scissors</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-strikethrough"></i> fa-strikethrough</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-table"></i> fa-table</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-text-height"></i> fa-text-height</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-text-width"></i> fa-text-width</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-th"></i> fa-th</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-th-large"></i> fa-th-large</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-th-list"></i> fa-th-list</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-underline"></i> fa-underline</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-undo"></i> fa-undo</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></a></div>

				</div>

			</section><!-- /#text-editor -->

			<section id="directional">
				<h2 class="page-header">Directional Icons</h2>

				<div class="row fontawesome-icon-list">
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-angle-down"></i> fa-angle-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-angle-left"></i> fa-angle-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-angle-right"></i> fa-angle-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-angle-up"></i> fa-angle-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-down"></i> fa-arrow-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-left"></i> fa-arrow-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-right"></i> fa-arrow-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrow-up"></i> fa-arrow-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrows"></i> fa-arrows</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrows-h"></i> fa-arrows-h</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrows-v"></i> fa-arrows-v</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-down"></i> fa-caret-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-left"></i> fa-caret-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-right"></i> fa-caret-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-caret-up"></i> fa-caret-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chevron-down"></i> fa-chevron-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chevron-left"></i> fa-chevron-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chevron-right"></i> fa-chevron-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-chevron-up"></i> fa-chevron-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></a></div>

				</div>

			</section><!-- /#directional -->

			<section id="video-player">
				<h2 class="page-header">Video Player Icons</h2>

				<div class="row fontawesome-icon-list">
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-backward"></i> fa-backward</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-compress"></i> fa-compress</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-eject"></i> fa-eject</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-expand"></i> fa-expand</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-fast-backward"></i> fa-fast-backward</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-fast-forward"></i> fa-fast-forward</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-forward"></i> fa-forward</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-pause"></i> fa-pause</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-play"></i> fa-play</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-play-circle"></i> fa-play-circle</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-step-backward"></i> fa-step-backward</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-step-forward"></i> fa-step-forward</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-stop"></i> fa-stop</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-youtube-play"></i> fa-youtube-play</a></div>
				</div>
			</section><!-- /#video-player -->

			<section id="brand">
				<h2 class="page-header">Brand Icons</h2>

				<div class="alert alert-success">
					<ul class="margin-bottom-none padding-left-lg">
						<li>All brand icons are trademarks of their respective owners.</li>
						<li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
					</ul>
				</div>

				<div class="row fontawesome-icon-list">
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-adn"></i> fa-adn</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-android"></i> fa-android</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-apple"></i> fa-apple</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bitbucket"></i> fa-bitbucket</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-btc"></i> fa-btc</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-css3"></i> fa-css3</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-dribbble"></i> fa-dribbble</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-dropbox"></i> fa-dropbox</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-facebook"></i> fa-facebook</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-facebook-square"></i> fa-facebook-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-flickr"></i> fa-flickr</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-foursquare"></i> fa-foursquare</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-github"></i> fa-github</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-github-alt"></i> fa-github-alt</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-github-square"></i> fa-github-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-gittip"></i> fa-gittip</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-google-plus"></i> fa-google-plus</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-html5"></i> fa-html5</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-instagram"></i> fa-instagram</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-linkedin"></i> fa-linkedin</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-linux"></i> fa-linux</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-maxcdn"></i> fa-maxcdn</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-pagelines"></i> fa-pagelines</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-pinterest"></i> fa-pinterest</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-renren"></i> fa-renren</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-skype"></i> fa-skype</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-trello"></i> fa-trello</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-tumblr"></i> fa-tumblr</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-twitter"></i> fa-twitter</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-twitter-square"></i> fa-twitter-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-vk"></i> fa-vk</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-weibo"></i> fa-weibo</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-windows"></i> fa-windows</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-xing"></i> fa-xing</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-xing-square"></i> fa-xing-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-youtube"></i> fa-youtube</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-youtube-play"></i> fa-youtube-play</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-youtube-square"></i> fa-youtube-square</a></div>
				</div>
			</section><!-- /#brand -->

			<section id="medical">
				<h2 class="page-header">Medical Icons</h2>

				<div class="row fontawesome-icon-list">
					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-ambulance"></i> fa-ambulance</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-h-square"></i> fa-h-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-hospital-o"></i> fa-hospital-o</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-medkit"></i> fa-medkit</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-plus-square"></i> fa-plus-square</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-stethoscope"></i> fa-stethoscope</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-user-md"></i> fa-user-md</a></div>

					<div class="col-md-3 col-sm-4 icon-demo"><a href="#"><i class="fa fa-wheelchair"></i> fa-wheelchair</a></div>
				</div>
			</section><!-- /#medical -->

		</div><!-- /.container -->
	</div>
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