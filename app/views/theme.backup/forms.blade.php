<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Forms</title>

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
						<li class="active">
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
		<h1>Forms</h1>
	</div>

	<div id="content">
		<div class="container">

			<div class="row row-demo">
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Vertical Form</h3>

							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							
							<div class="preview">
								<form role="form">
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
									<div class="form-group">
										<label for="exampleInputFile">File input</label>
										<input type="file" id="exampleInputFile">
										<p class="help-block">Example block-level help text here.</p>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox"> Check me out
										</label>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;form role="form"&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
    &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
    &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleInputFile"&gt;File input&lt;/label&gt;
    &lt;input type="file" id="exampleInputFile"&gt;
    &lt;p class="help-block"&gt;Example block-level help text here.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="checkbox"&gt;
    &lt;label&gt;
      &lt;input type="checkbox"&gt; Check me out
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
							</div>

						</div>
					</div><!-- /.panel -->
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Horizontal Form</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-3 control-label">Firstname</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="inputEmail3" placeholder="Firstname">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="col-sm-3 control-label">Lastname</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputPassword3" placeholder="Lastname">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="inputPassword3" placeholder="Email address">
										</div>
									</div>
									<div class="form-group">
										<label for="inputTelephone3" class="col-sm-3 control-label">Telephone</label>
										<div class="col-sm-4">
											<input type="tel" class="form-control" id="inputTelephone3" placeholder="Telephone">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleInputFile" class="col-sm-3 control-label">File input</label>
										<div class="col-sm-9">
											<input type="file" id="exampleInputFile">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-success">Sign in</button>
										</div>
									</div>
								</form>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;form class="form-horizontal" role="form"&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="inputEmail3" class="col-sm-3 control-label"&gt;Firstname&lt;/label&gt;
    &lt;div class="col-sm-9"&gt;
      &lt;input type="email" class="form-control" id="inputEmail3" placeholder="Firstname"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="inputPassword3" class="col-sm-3 control-label"&gt;Lastname&lt;/label&gt;
    &lt;div class="col-sm-9"&gt;
      &lt;input type="text" class="form-control" id="inputPassword3" placeholder="Lastname"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="inputEmail3" class="col-sm-3 control-label"&gt;Email&lt;/label&gt;
    &lt;div class="col-sm-9"&gt;
      &lt;input type="email" class="form-control" id="inputPassword3" placeholder="Email address"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="inputTelephone3" class="col-sm-3 control-label"&gt;Telephone&lt;/label&gt;
    &lt;div class="col-sm-4"&gt;
      &lt;input type="tel" class="form-control" id="inputTelephone3" placeholder="Telephone"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="exampleInputFile" class="col-sm-3 control-label"&gt;File input&lt;/label&gt;
    &lt;div class="col-sm-9"&gt;
      &lt;input type="file" id="exampleInputFile"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;div class="col-sm-offset-3 col-sm-9"&gt;
      &lt;button type="submit" class="btn btn-success"&gt;Sign in&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;</code>
								</pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row row-demo">


				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Inline Form</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<form class="form-inline" role="form">
									<div class="form-group">
										<label class="sr-only" for="exampleInputFirstname2">Firstname</label>
										<input type="email" class="form-control" id="exampleInputFirstname2" placeholder="Enter firstname">
									</div>
									<div class="form-group">
										<label class="sr-only" for="exampleInputLastname2">Lastname</label>
										<input type="email" class="form-control" id="exampleInputLastname2" placeholder="Enter lastname">
									</div>
									<div class="form-group">
										<label class="sr-only" for="exampleInputEmail2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label class="sr-only" for="exampleInputPassword2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="checkbox">
											<label>
												<input type="checkbox"> Remember me
											</label>
										</div>
									</div>
									<button type="submit" class="btn btn-primary">Sign in</button>
									<button type="submit" class="btn btn-warning">Register</button>
								</form>
							</div>
							<div class="code" style="display: none">
								<pre class="language-markup"><code class="language-markup">&lt;form class="form-inline" role="form"&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="sr-only" for="exampleInputFirstname2"&gt;Firstname&lt;/label&gt;
    &lt;input type="email" class="form-control" id="exampleInputFirstname2" placeholder="Enter firstname"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="sr-only" for="exampleInputLastname2"&gt;Lastname&lt;/label&gt;
    &lt;input type="email" class="form-control" id="exampleInputLastname2" placeholder="Enter lastname"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="sr-only" for="exampleInputEmail2"&gt;Email address&lt;/label&gt;
    &lt;input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="sr-only" for="exampleInputPassword2"&gt;Password&lt;/label&gt;
    &lt;input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"&gt;
  &lt;/div&gt;
  &lt;div class="checkbox"&gt;
    &lt;label&gt;
      &lt;input type="checkbox"&gt; Remember me
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;button type="submit" class="btn btn-info"&gt;Sign in&lt;/button&gt;
&lt;/form&gt;</code></pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row row-demo">


				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Other Form Elements</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="text" class="col-sm-2 control-label">Text</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="text" placeholder="Text">
										</div>
									</div>

									<div class="form-group">
										<label for="textarea" class="col-sm-2 control-label">Textarea</label>
										<div class="col-sm-10">
											<textarea class="form-control" id="textarea" placeholder="Textarea"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-4">
											<input type="password" class="form-control" id="password" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">Select</label>
										<div class="col-sm-10">
											<select>
												<optgroup label="Option Group">
													<option>Maverick</option>
													<option>Mountain Lion</option>
													<option>Lion</option>
												</optgroup>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Checbox stacked</label>
										<div class="col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox"> Checkbox 1
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Checkbox 2
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Checkbox 2
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Checbox inline</label>
										<div class="col-sm-10">
											<div class="checkbox-inline">
												<label>
													<input type="checkbox"> Checkbox 1
												</label>
											</div>
											<div class="checkbox-inline">
												<label>
													<input type="checkbox"> Checkbox 2
												</label>
											</div>
											<div class="checkbox-inline">
												<label>
													<input type="checkbox"> Checkbox 2
												</label>
											</div>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-2 control-label">Radio button stacked</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
													<input type="radio" name="radio-sample-1"> Radio button 1
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="radio-sample-1"> Radio button 2
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="radio-sample-1"> Radio button 2
												</label>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Switch</label>
										<div class="col-sm-2">
											<div id="label-switch" class="make-switch" data-on-label="Yes" data-off-label="No" data-animated="false">
											    <input type="checkbox" checked>
											</div>
										</div>

										<div class="col-sm-2">
											<div id="label-switch" class="make-switch" data-on-label="On" data-off-label="Off" data-animated="false" data-on="warning" data-off="danger">
											    <input type="checkbox" checked>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Radio button inline</label>
										<div class="col-sm-10">
											<div class="radio-inline">
												<label>
													<input type="radio" name="radio-sample-2"> Radio button 1
												</label>
											</div>
											<div class="radio-inline">
												<label>
													<input type="radio" name="radio-sample-2"> Radio button 2
												</label>
											</div>
											<div class="radio-inline">
												<label>
													<input type="radio" name="radio-sample-2"> Radio button 2
												</label>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;form class="form-horizontal" role="form"&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="text" class="col-sm-2 control-label"&gt;Text&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;input type="email" class="form-control" id="text" placeholder="Text"&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-group"&gt;
    &lt;label for="textarea" class="col-sm-2 control-label"&gt;Textarea&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;textarea class="form-control" id="textarea" placeholder="Textarea"&gt;&lt;/textarea&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="password" class="col-sm-2 control-label"&gt;Password&lt;/label&gt;
    &lt;div class="col-sm-4"&gt;
      &lt;input type="password" class="form-control" id="password" placeholder="Password"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="email" class="col-sm-2 control-label"&gt;Email&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;input type="email" class="form-control" id="email" placeholder="Email"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label for="email" class="col-sm-2 control-label"&gt;Select&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;select&gt;
        &lt;optgroup label="Option Group"&gt;
          &lt;option&gt;Maverick&lt;/option&gt;
          &lt;option&gt;Mountain Lion&lt;/option&gt;
          &lt;option&gt;Lion&lt;/option&gt;
        &lt;/optgroup&gt;
      &lt;/select&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="col-sm-2 control-label"&gt;Checbox stacked&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;div class="checkbox"&gt;
        &lt;label&gt;
          &lt;input type="checkbox"&gt; Checkbox 1
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="checkbox"&gt;
        &lt;label&gt;
          &lt;input type="checkbox"&gt; Checkbox 2
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="checkbox"&gt;
        &lt;label&gt;
          &lt;input type="checkbox"&gt; Checkbox 2
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="col-sm-2 control-label"&gt;Checbox inline&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;div class="checkbox-inline"&gt;
        &lt;label&gt;
          &lt;input type="checkbox"&gt; Checkbox 1
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="checkbox-inline"&gt;
        &lt;label&gt;
          &lt;input type="checkbox"&gt; Checkbox 2
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="checkbox-inline"&gt;
        &lt;label&gt;
          &lt;input type="checkbox"&gt; Checkbox 2
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;


  &lt;div class="form-group"&gt;
    &lt;label class="col-sm-2 control-label"&gt;Radio button stacked&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;div class="radio"&gt;
        &lt;label&gt;
          &lt;input type="radio" name="radio-sample-1"&gt; Radio button 1
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="radio"&gt;
        &lt;label&gt;
          &lt;input type="radio" name="radio-sample-1"&gt; Radio button 2
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="radio"&gt;
        &lt;label&gt;
          &lt;input type="radio" name="radio-sample-1"&gt; Radio button 2
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="col-sm-2 control-label"&gt;Radio button inline&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;div class="radio-inline"&gt;
        &lt;label&gt;
          &lt;input type="radio" name="radio-sample-2"&gt; Radio button 1
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="radio-inline"&gt;
        &lt;label&gt;
          &lt;input type="radio" name="radio-sample-2"&gt; Radio button 2
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="radio-inline"&gt;
        &lt;label&gt;
          &lt;input type="radio" name="radio-sample-2"&gt; Radio button 2
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->

			<div class="row row-demo">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Input group</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 control-label">Prepend</label>
										<div class="col-sm-10">
											<div class="input-group">
												<span class="input-group-addon">@</span>
												<input type="text" class="form-control" placeholder="Username">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Append</label>
										<div class="col-sm-10">
											<div class="input-group">
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Prepend and Append</label>
										<div class="col-sm-10">
											<div class="input-group">
												<span class="input-group-addon">$</span>
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;form class="form-horizontal" role="form"&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="col-sm-2 control-label"&gt;Prepend&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;div class="input-group"&gt;
        &lt;span class="input-group-addon"&gt;@&lt;/span&gt;
        &lt;input type="text" class="form-control" placeholder="Username"&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-group"&gt;
    &lt;label class="col-sm-2 control-label"&gt;Append&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;div class="input-group"&gt;
        &lt;input type="text" class="form-control"&gt;
        &lt;span class="input-group-addon"&gt;.00&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-group"&gt;
    &lt;label class="col-sm-2 control-label"&gt;Prepend and Append&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;div class="input-group"&gt;
        &lt;span class="input-group-addon"&gt;$&lt;/span&gt;
        &lt;input type="text" class="form-control"&gt;
        &lt;span class="input-group-addon"&gt;.00&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.row -->

			<div class="row row-demo">
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Button Large</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-default btn-lg btn-block">Default</button></div>
									<div class="col-lg-4"><button class="btn btn-primary btn-lg btn-block">Primary</button></div>
									<div class="col-lg-4"><button class="btn btn-success btn-lg btn-block">Success</button></div>
								</div>
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-info btn-lg btn-block">Info</button></div>
									<div class="col-lg-4"><button class="btn btn-warning btn-lg btn-block">Warning</button></div>
									<div class="col-lg-4"><button class="btn btn-danger btn-lg btn-block">Danger</button></div>
								</div>
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-inverse btn-lg btn-block">Inverse</button></div>
									<div class="col-lg-4"><button class="btn btn-link btn-lg btn-block">Link</button></div>
									<div class="col-lg-4"><button class="btn btn-disabled btn-lg btn-block" disabled>Disabled</button></div>
								</div>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-default btn-lg btn-block"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-primary btn-lg btn-block"&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-success btn-lg btn-block"&gt;Success&lt;/button&gt;</code></pre>

<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-info btn-lg btn-block"&gt;Info&lt;/button&gt;
&lt;button class="btn btn-warning btn-lg btn-block"&gt;Warning&lt;/button&gt;
&lt;button class="btn btn-danger btn-lg btn-block"&gt;Danger&lt;/button&gt;</code></pre>

<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-inverse btn-lg btn-block"&gt;Inverse&lt;/button&gt;
&lt;button class="btn btn-link btn-lg btn-block"&gt;Link&lt;/button&gt;
&lt;button class="btn btn-disabled btn-lg btn-block" disabled&gt;Disabled&lt;/button&gt;</code></pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Button Default</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-default btn-block">Default</button></div>
									<div class="col-lg-4"><button class="btn btn-primary btn-block">Primary</button></div>
									<div class="col-lg-4"><button class="btn btn-success btn-block">Success</button></div>
								</div>
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-info btn-block">Info</button></div>
									<div class="col-lg-4"><button class="btn btn-warning btn-block">Warning</button></div>
									<div class="col-lg-4"><button class="btn btn-danger btn-block">Danger</button></div>
								</div>
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-inverse btn-block">Inverse</button></div>
									<div class="col-lg-4"><button class="btn btn-link btn-block">Link</button></div>
									<div class="col-lg-4"><button class="btn btn-disabled btn-block" disabled>Disabled</button></div>
								</div>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-default btn-block"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-primary btn-block"&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-success btn-block"&gt;Success&lt;/button&gt;</code></pre>

<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-info btn-block"&gt;Info&lt;/button&gt;
&lt;button class="btn btn-warning btn-block"&gt;Warning&lt;/button&gt;
&lt;button class="btn btn-danger btn-block"&gt;Danger&lt;/button&gt;</code></pre>

<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-inverse btn-block"&gt;Inverse&lt;/button&gt;
&lt;button class="btn btn-link btn-block"&gt;Link&lt;/button&gt;
&lt;button class="btn btn-disabled btn-block" disabled&gt;Disabled&lt;/button&gt;</code></pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row row-demo">
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Button Small</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-default btn-sm btn-block">Default</button></div>
									<div class="col-lg-4"><button class="btn btn-primary btn-sm btn-block">Primary</button></div>
									<div class="col-lg-4"><button class="btn btn-success btn-sm btn-block">Success</button></div>
								</div>
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-info btn-sm btn-block">Info</button></div>
									<div class="col-lg-4"><button class="btn btn-warning btn-sm btn-block">Warning</button></div>
									<div class="col-lg-4"><button class="btn btn-danger btn-sm btn-block">Danger</button></div>
								</div>
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-inverse btn-sm btn-block">Inverse</button></div>
									<div class="col-lg-4"><button class="btn btn-link btn-sm btn-block">Link</button></div>
									<div class="col-lg-4"><button class="btn btn-disabled btn-sm btn-block" disabled>Disabled</button></div>
								</div>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-default btn-sm btn-block"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-primary btn-sm btn-block"&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-success btn-sm btn-block"&gt;Success&lt;/button&gt;</code></pre>

<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-info btn-sm btn-block"&gt;Info&lt;/button&gt;
&lt;button class="btn btn-warning btn-sm btn-block"&gt;Warning&lt;/button&gt;
&lt;button class="btn btn-danger btn-sm btn-block"&gt;Danger&lt;/button&gt;</code></pre>

<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-inverse btn-sm btn-block"&gt;Inverse&lt;/button&gt;
&lt;button class="btn btn-link btn-sm btn-block"&gt;Link&lt;/button&gt;
&lt;button class="btn btn-disabled btn-sm btn-block" disabled&gt;Disabled&lt;/button&gt;</code></pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Button X-Small</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-default btn-xs btn-block">Default</button></div>
									<div class="col-lg-4"><button class="btn btn-primary btn-xs btn-block">Primary</button></div>
									<div class="col-lg-4"><button class="btn btn-success btn-xs btn-block">Success</button></div>
								</div>
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-info btn-xs btn-block">Info</button></div>
									<div class="col-lg-4"><button class="btn btn-warning btn-xs btn-block">Warning</button></div>
									<div class="col-lg-4"><button class="btn btn-danger btn-xs btn-block">Danger</button></div>
								</div>
								<div class="row row-demo">
									<div class="col-lg-4"><button class="btn btn-inverse btn-xs btn-block">Inverse</button></div>
									<div class="col-lg-4"><button class="btn btn-link btn-xs btn-block">Link</button></div>
									<div class="col-lg-4"><button class="btn btn-disabled btn-xs btn-block" disabled>Disabled</button></div>
								</div>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-default btn-xs btn-block"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-primary btn-xs btn-block"&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-success btn-xs btn-block"&gt;Success&lt;/button&gt;</code></pre>

<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-info btn-xs btn-block"&gt;Info&lt;/button&gt;
&lt;button class="btn btn-warning btn-xs btn-block"&gt;Warning&lt;/button&gt;
&lt;button class="btn btn-danger btn-xs btn-block"&gt;Danger&lt;/button&gt;</code></pre>

<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-inverse btn-xs btn-block"&gt;Inverse&lt;/button&gt;
&lt;button class="btn btn-link btn-xs btn-block"&gt;Link&lt;/button&gt;
&lt;button class="btn btn-disabled btn-xs btn-block" disabled&gt;Disabled&lt;/button&gt;</code></pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->

			<div class="row row-demo">
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Basic Example</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<div class="row row-demo">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="btn-group">
											<button type="button" class="btn btn-primary">Home</button>
											<button type="button" class="btn btn-primary">About</button>
											<button type="button" class="btn btn-primary">Services</button>
										</div>

										<div class="btn-group pull-right">
											<button type="button" class="btn btn-default">Default</button>
											<button type="button" class="btn btn-primary">Primary</button>
											<button type="button" class="btn btn-success">Success</button>
											<button type="button" class="btn btn-info">Info</button>
											<button type="button" class="btn btn-warning">Warning</button>
											<button type="button" class="btn btn-danger">Danger</button>
										</div>
									</div>
								</div>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;div class="btn-group"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Home&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;About&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Services&lt;/button&gt;
&lt;/div&gt;

&lt;div class="btn-group pull-right"&gt;
  &lt;button type="button" class="btn btn-default"&gt;Default&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
  &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
  &lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
  &lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
  &lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
&lt;/div&gt;</code></pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row row-demo">
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Toolbar</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<div class="row row-demo">
									<div class="col-lg-12">
										<div class="btn-toolbar" role="toolbar">
											<div class="btn-group">
												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-bold"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-italic"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-underline"></i>
												</button>
											</div>

											<div class="btn-group">
												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-align-left"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-align-center"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-align-right"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-align-justify"></i>
												</button>
											</div>

											<div class="btn-group">
												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-copy"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-cut"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-paste"></i>
												</button>
											</div>

											<div class="btn-group">
												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-list-ul"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-list-ol"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-indent"></i>
												</button>

												<button type="button" class="btn btn-default btn-sm">
													<i class="fa fa-outdent"></i>
												</button>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;div class="btn-toolbar" role="toolbar"&gt;
  &lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-bold"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-italic"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-underline"&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-align-left"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-align-center"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-align-right"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-align-justify"&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-copy"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-cut"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-paste"&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-list-ul"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-list-ol"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-indent"&gt;&lt;/i&gt;
    &lt;/button&gt;

    &lt;button type="button" class="btn btn-default btn-sm"&gt;
      &lt;i class="fa fa-outdent"&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row row-demo">
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Button Group Large</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<div class="row row-demo">
									<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
										<div class="btn-group btn-group-lg">
											<button type="button" class="btn btn-primary">Home</button>
											<button type="button" class="btn btn-primary">About</button>
											<button type="button" class="btn btn-primary">Services</button>
											<button type="button" class="btn btn-primary">Contact</button>
										</div>
									</div>

									<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
										<div class="btn-group btn-group-lg pull-right">
											<button type="button" class="btn btn-default">Default</button>
											<button type="button" class="btn btn-primary">Primary</button>
											<button type="button" class="btn btn-success">Success</button>
											<button type="button" class="btn btn-info">Info</button>
											<button type="button" class="btn btn-warning">Warning</button>
											<button type="button" class="btn btn-danger">Danger</button>
										</div>
									</div>
								</div>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;div class="btn-group btn-group-lg"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Home&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;About&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Services&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Contact&lt;/button&gt;
&lt;/div&gt;

&lt;div class="btn-group btn-group-lg"&gt;
  &lt;button type="button" class="btn btn-default"&gt;Default&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
  &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
  &lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
  &lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
  &lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
&lt;/div&gt;</code></pre>
							</div>
						</div>
					</div><!-- /.panel -->
				</div>
			</div><!-- /.row -->


			<div class="row row-demo">
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Nesting</h3>
							<div class="panel-utility pull-right code-preview">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="preview">
								<div class="row row-demo">
									<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
										<div class="btn-group">
											<button type="button" class="btn btn-primary">Home</button>
											<button type="button" class="btn btn-primary">About</button>
											<div class="btn-group">
												<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
													Dropdown
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Dropdown link</a></li>
													<li><a href="#">Dropdown link</a></li>
												</ul>
											</div>
										</div>
									</div>

									<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
										<div class="btn-group pull-right">
											<button type="button" class="btn btn-primary">Home</button>
											<button type="button" class="btn btn-primary">About</button>
											<div class="btn-group">
												<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
													Dropdown
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Dropdown link</a></li>
													<li><a href="#">Dropdown link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
													Dropdown
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Dropdown link</a></li>
													<li><a href="#">Dropdown link</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="code" style="display: none;">
								<pre class="language-markup"><code class="language-markup">&lt;div class="btn-group"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Home&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;About&lt;/button&gt;
  &lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"&gt;
      Dropdown
      &lt;span class="caret"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="btn-group"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Home&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;About&lt;/button&gt;
  &lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"&gt;
      Dropdown
      &lt;span class="caret"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"&gt;
      Dropdown
      &lt;span class="caret"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
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