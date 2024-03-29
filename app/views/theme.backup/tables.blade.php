<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Tables</title>

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

						<li >
							<a href="icons">
								<i class="fa fa-picture-o"></i>
								Icons
							</a>
						</li>

						<li class="active">
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
		<h1>Tables</h1>
	</div>

	<div id="content">
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Basic table</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p>
									<hr>
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Lisa</td>
												<td>Hamilton</td>
												<td>@lisa</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Amy</td>
												<td>Miller</td>
												<td>@amymiller</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Heather</td>
												<td>Jobs</td>
												<td>@heather</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Striped Table</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
									<hr>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Ayumi</td>
												<td>Kinoshita</td>
												<td>@ayumi</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Emily</td>
												<td>Kingston</td>
												<td>@emily</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jonathan</td>
												<td>Smith</td>
												<td>@josmith</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Bordered Table</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
									<hr>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>Operating System</th>
												<th>Web Browser</th>
												<th>Last Visits</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Ubuntu 12.04</td>
												<td>Firefox</td>
												<td>3 days ago</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Mac OS X 10.9</td>
												<td>Safari</td>
												<td>4 days ago</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Android 4.2.2</td>
												<td>Google Chrome</td>
												<td>7 days ago</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Hover Table</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
									<hr>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Operating System</th>
												<th>Web Browser</th>
												<th>Last Visits</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Ubuntu 12.04</td>
												<td>Firefox</td>
												<td>3 days ago</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Mac OS X 10.9</td>
												<td>Safari</td>
												<td>4 days ago</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Android 4.2.2</td>
												<td>Google Chrome</td>
												<td>7 days ago</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Condensed Table</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<p>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</p>
									<hr>
									<table class="table table-condensed">
										<thead>
											<tr>
												<th>#</th>
												<th>Operating System</th>
												<th>Web Browser</th>
												<th>Last Visits</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Ubuntu 12.04</td>
												<td>Firefox</td>
												<td>3 days ago</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Mac OS X 10.9</td>
												<td>Safari</td>
												<td>4 days ago</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Android 4.2.2</td>
												<td>Google Chrome</td>
												<td>7 days ago</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Contextual classes</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<p>Use contextual classes to color table rows or individual cells.</p>
									<hr>
									<table class="table table-bordered table-striped">
										<colgroup>
											<col class="col-xs-1">
											<col class="col-xs-7">
										</colgroup>
										<thead>
											<tr>
												<th>Class</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<code>.active</code>
												</td>
												<td>Applies the hover color to a particular row or cell</td>
											</tr>
											<tr>
												<td>
													<code>.success</code>
												</td>
												<td>Indicates a successful or positive action</td>
											</tr>
											<tr>
												<td>
													<code>.warning</code>
												</td>
												<td>Indicates a warning that might need attention</td>
											</tr>
											<tr>
												<td>
													<code>.danger</code>
												</td>
												<td>Indicates a dangerous or potentially negative action</td>
											</tr>
										</tbody>
									</table>
									<hr>
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>Column heading</th>
												<th>Column heading</th>
												<th>Column heading</th>
											</tr>
										</thead>
										<tbody>
											<tr class="active">
												<td>1</td>
												<td>Column content</td>
												<td>Column content</td>
												<td>Column content</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Column content</td>
												<td>Column content</td>
												<td>Column content</td>
											</tr>
											<tr class="success">
												<td>3</td>
												<td>Column content</td>
												<td>Column content</td>
												<td>Column content</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Column content</td>
												<td>Column content</td>
												<td>Column content</td>
											</tr>
											<tr class="warning">
												<td>5</td>
												<td>Column content</td>
												<td>Column content</td>
												<td>Column content</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Column content</td>
												<td>Column content</td>
												<td>Column content</td>
											</tr>
											<tr class="danger">
												<td>7</td>
												<td>Column content</td>
												<td>Column content</td>
												<td>Column content</td>
											</tr>
										</tbody>
									</table>

									
								</div>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->
		</div>
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