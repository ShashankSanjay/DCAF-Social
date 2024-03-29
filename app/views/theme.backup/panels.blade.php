<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>DCAF</title>

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

						<li >
							<a href="tables">
								<i class="fa fa-table"></i>
								Tables
							</a>
						</li>

						<li class="active">
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
		<h1>Dashboard</h1>
	</div>

	<div id="content">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">.panel-default</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-default"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;.panel-default&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-default -->
				</div><!-- /.col-lg-6 -->

				<div class="col-lg-6 col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">.panel-primary</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-primary"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;.panel-primary&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-primary -->
					
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->

			

			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">.panel-success</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-success"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;.panel-success&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-default -->
				</div><!-- /.col-lg-6 -->

				<div class="col-lg-6 col-md-6">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">.panel-info</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-info"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;.panel-info&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-info -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->


			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-warning">
						<div class="panel-heading">
							<h3 class="panel-title">.panel-warning</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-warning"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;.panel-warning&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-warning -->
					
				</div><!-- /.col-lg-6 -->
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">.panel-danger</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-danger"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;.panel-danger&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-danger -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->


			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-outline">
						<div class="panel-heading">
							<h3 class="panel-title">.panel-outline</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-outline"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;.panel-outline&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-warning -->
					
				</div><!-- /.col-lg-6 -->
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h3 class="panel-title">.panel-inverse</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-inverse"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;.panel-inverse&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-danger -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->


			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Panel Header with Links</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills">
									<li class="active"><a href="#">Active Link</a></li>
									<li><a href="#">Normal Link</a></li>
								</ul>

								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-default"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;Panel Header with Links&lt;/h3&gt;
    &lt;div class="panel-utility pull-right"&gt;
      &lt;!-- Links --&gt;
      &lt;ul class="nav nav-pills"&gt;
        &lt;li class="active"&gt;&lt;a href="#"&gt;Active Link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;Other Link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-warning -->
					
				</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->

			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Panel Header with Dropdown</h3>
							<div class="panel-utility pull-right">
								

								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>

								<!-- Dropdown menu -->
								<div class="dropdown pull-right">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Dropdown Menu <b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-edit"></i> Sample Link</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link</a></li>
									</ul>
								</div>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-default"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h3 class="panel-title"&gt;Panel Header with Dropdown&lt;/h3&gt;
    &lt;div class="panel-utility pull-right"&gt;

      &lt;!-- Dropdown menu --&gt;
      &lt;div class="dropdown pull-right"&gt;
        &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;
          Dropdown Menu &lt;b class="caret"&gt;&lt;/b&gt;
        &lt;/a&gt;
        &lt;ul class="dropdown-menu"&gt;
          &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-edit"&gt;&lt;/i&gt; Sample Link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-edit"&gt;&lt;/i&gt; Sample Link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-edit"&gt;&lt;/i&gt; Sample Link&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-edit"&gt;&lt;/i&gt; Sample Link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
      
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-warning -->
					
				</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->

			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Panel Header with Form</h3>
							<div class="panel-utility pull-right">
								
								<form>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Text placeholder">
									</div>
									<button class="btn btn-default">Search</button>
								</form>

								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>

							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-default"&gt;
    &lt;div class="panel-heading"&gt;
      &lt;h3 class="panel-title"&gt;Panel Header with Form&lt;/h3&gt;
    &lt;div class="panel-utility pull-right"&gt;

      &lt;!-- Search form --&gt;
      &lt;form&gt;
        &lt;div class="form-group"&gt;
          &lt;input type="text" class="form-control" placeholder="Text placeholder"&gt;
        &lt;/div&gt;
        &lt;button class="btn"&gt;Search&lt;/button&gt;
      &lt;/form&gt;
      
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    ...
  &lt;/div&gt;  
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<a href="#" class="btn btn-primary">Sample Button</a>
							<a href="#" class="btn btn-warning">Sample Button</a>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-warning -->
					
				</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->


			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Panel Footer with Pagination</h3>
							<div class="panel-utility pull-right">
								<!-- Nav tabs -->
								<ul class="nav nav-pills code-preview">
									<li class="active"><a href="#preview">Preview</a></li>
									<li><a href="#code">Code</a></li>
								</ul>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="preview">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="code" style="display: none;">
							<pre class="language-markup"><code class="language-markup">&lt;div class="panel panel-default"&gt;
    &lt;div class="panel-heading"&gt;
      &lt;h3 class="panel-title"&gt;Panel Footer with Pagination&lt;/h3&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="panel-body"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="panel-footer"&gt;
    &lt;div class="align-center"&gt;
      &lt;ul class="pagination"&gt;
        &lt;li&gt;&lt;a href="#"&gt;&laquo;&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;&raquo;&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
							</div>
						</div><!-- /.panel-body -->
						<div class="panel-footer">
							<div class="align-center">
								<ul class="pagination">
									<li><a href="#">&laquo;</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div><!-- /.panel-footer -->
					</div><!-- /.panel-warning -->
					
				</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->


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