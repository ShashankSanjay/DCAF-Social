<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Messages</title>

		<!-- Fonts -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic">
		<link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
		
		<!-- Bootstrap core CSS -->
		<link href="{{{ asset('assets/bootstrap/css/bootstrap.min-50686.css'); }}}" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="{{{ asset('assets/fonts/font-awesome/css/font-awesome.min-45579.css'); }}}" rel="stylesheet">

		<!-- Icomoon CSS -->
		<link href="{{{ asset('assets/fonts/icomoon/style.css'); }}}" rel="stylesheet">

		<!-- Animate CSS -->
		<link href="{{{ asset('assets/css/libs/animate.min.css'); }}}" rel="stylesheet">

		<!-- Bootstrap Switch -->
		<link href="{{{ asset('assets/css/libs/bootstrap-switch.css'); }}}" rel="stylesheet">

		<!-- Bootstrap Select -->
		<link href="{{{ asset('assets/css/libs/bootstrap-select.min.css'); }}}" rel="stylesheet">

		<!-- Bootstrap WYSIHTML5 -->
		<link href="{{{ asset('assets/css/libs/bootstrap-wysihtml5.css'); }}}" rel="stylesheet">

		<!-- jQuery Fullcalendar -->
		<link href="{{{ asset('assets/css/libs/fullcalendar.css'); }}}" rel="stylesheet">

		<!-- jVectorMap -->
		<link href="{{{ asset('assets/css/libs/jquery-jvectormap-1.2.2.css'); }}}" rel="stylesheet">

		<!-- Prism -->
		<link href="{{{ asset('assets/css/libs/prism.css'); }}}" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="{{{ asset('assets/css/styler/style.css'); }}}" rel="stylesheet" type="text/css">
		<link href="{{{ asset('assets/css/demo.css'); }}}" rel="stylesheet" type="text/css">

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
					<ul class="panel-collapse collapse in" id="messages">
						<li ><a href="messages"><i class="fa fa-arrow-right"></i> Messages inside Panel</a></li>
						<li class="active"><a href="messages-alt"><i class="fa fa-arrow-right"></i> Messages without Panel</a></li>
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
		<h1>Messages</h1>
	</div>

	<div id="content" class="">
		<div class="container">
			<div class="row">
				<form role="form">
					<div class="col-lg-12">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search message">
							<span class="input-group-btn">
								<button class="btn btn-info">Search</button>
							</span>
						</div>
					</div>
				</form>
				<hr>
			</div><!-- /.row -->
					
			

			<div class="row messages messages-bordered">

				<div class="col-lg-2 col-md-2 col-sm-2 message-list">
					<div class="message-categories">
						<ul class="nav nav-pills nav-stacked" id="myTab">
							<li><a href="#message-compose" data-toggle="tab" class="btn">Compose</a></li>
							<li class="active"><a href="#message-inbox" data-toggle="tab">Inbox <span class="badge pull-right">4</span></a></li>
							<li><a href="#message-draft" data-toggle="tab">Draft <span class="badge pull-right">2</span></a></li>
							<li><a href="#message-sent" data-toggle="tab">Sent</a></li>
							<li><a href="#message-trash" data-toggle="tab">Trash</a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-lg-10 col-md-10 col-sm-10 message-content">								
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="message-inbox"><div class="row">
	<div class="col-lg-3 col-md-3 message-list">

		<div class="media">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-3.jpg">
					<div class="utility">
						<i class="fa fa-star"></i>
					</div>
					<div class="utility">
						<i class="fa fa-paperclip"></i>
					</div>
				</div>
				<div class="media-body">
					<div>Anna Garcia</div>
					<h4 class="media-heading">Bootstrap 3.0 is finally here!</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>    
		<div class="media unread">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-1.jpg">
					<div class="utility">
						<i class="fa fa-star"></i>
					</div>
					<div class="utility">
						<i class="fa fa-paperclip"></i>
					</div>
				</div>
				<div class="media-body">
					<div class="muted">Anna Garcia</div>
					<h4 class="media-heading">Media heading</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>    
		<div class="media unread">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-1.jpg">
					<div class="utility">
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="media-body">
					<div class="muted">Anna Garcia</div>
					<h4 class="media-heading">Media heading</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>    
		<div class="media unread">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-1.jpg">
					<div class="utility">
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="media-body">
					<div class="muted">Anna Garcia</div>
					<h4 class="media-heading">Media heading</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>    
		<div class="media unread">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-1.jpg">
					<div class="utility">
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="media-body">
					<div class="muted">Anna Garcia</div>
					<h4 class="media-heading">Media heading</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>    
		<div class="media">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-1.jpg">
					<div class="utility">
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="media-body">
					<div class="muted">Anna Garcia</div>
					<h4 class="media-heading">Media heading</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>    
		<div class="media">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-1.jpg">
					<div class="utility">
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="media-body">
					<div class="muted">Anna Garcia</div>
					<h4 class="media-heading">Media heading</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>    
		<div class="media">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-1.jpg">
					<div class="utility">
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="media-body">
					<div class="muted">Anna Garcia</div>
					<h4 class="media-heading">Media heading</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-9 col-md-9 message-detail">
		<div class="message">
			<div class="subject">
				Bootstrap 3.0 is finally here!
				<div class="btn-group pull-right">
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Move to trash"><i class="fa fa-trash-o"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply to all"><i class="fa fa-reply-all"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Forward"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div><!-- /.subject -->
			<div class="header media">
				<div class="media-avatar pull-left">
					<img alt="..." src="img/samples/avatar-3.jpg">
				</div>
				<div class="media-body">
					<div class="from">From: Anna Garcia <span class="email">&lt;anna@garcia.co.uk&gt;</span></div>
					<div class="to">To: Me</div>
					<div class="time">8 Sep 2013, 08:46 PM</div>
				</div>
			</div><!-- /.header -->

			<div class="body">
				<p>Hi Stephanie!</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut blandit ligula. In accumsan mauris at augue feugiat consequat. Aenean consequat sem sed velit sagittis dignissim. Phasellus quis convallis est. Praesent porttitor mauris nec lectus mollis, eget sodales libero venenatis. Cras eget vestibulum turpis. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam turpis velit, tempor vitae libero ac, fermentum laoreet dolor.
				</p>
				<p>
					Phasellus sodales metus at pulvinar facilisis. Aliquam et orci condimentum, ultrices erat in, ornare mi. Etiam vel nulla eu enim sagittis imperdiet. Donec justo arcu, iaculis eu ante ac, consequat vulputate nisl. Aenean sed consectetur tortor. Quisque tempus enim id velit ultricies, ac egestas leo vestibulum. Donec pulvinar viverra venenatis. Mauris eu dui enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus malesuada commodo odio, in hendrerit mi tincidunt nec.
				</p>	
				<p>
					Regards,<br>
					Anna Garcia
				</p>
			</div><!-- /.body -->
		</div><!-- /.message -->

		<div class="message old">
			<div class="subject">
				Bootstrap 3.0 is finally here!
				<div class="btn-group pull-right">
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Move to trash"><i class="fa fa-trash-o"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply to all"><i class="fa fa-reply-all"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Forward"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div><!-- /.subject -->
			<div class="header media">
				<div class="media-avatar pull-left">
					<img alt="..." src="img/samples/avatar-8.jpg">
				</div>
				<div class="media-body">
					<div class="from">From: Stephanie Woods <span class="email">&lt;stephanie@woods.co.uk&gt;</span></div>
					<div class="to">To: Anna Garcia <span class="email">&lt;anna@garcia.co.uk&gt;</span></div>
					<div class="time">4 Sep 2013, 4:46 PM</div>
				</div>
			</div><!-- /.header -->
			<div class="body">
				<p>
					Cras sed leo in neque iaculis iaculis vel vel sem. Praesent sed urna viverra odio molestie consectetur. 
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				</p>
				<p> 
					Duis quis consectetur arcu, quis tempus ipsum. Fusce eleifend arcu nunc, non porta ipsum imperdiet faucibus. 
					Vivamus dictum, massa tincidunt blandit faucibus, tortor libero rhoncus nunc, id faucibus est leo non odio. 
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at elit 
					sed quam pretium bibendum vel eget sem. Fusce sed ante nec eros placerat vulputate sed eget nulla. 
				</p>	
				<p>
					Regards,<br>
					Stephanie Woods
				</p>
			</div><!-- /.body -->
		</div><!-- /.message -->

		<div class="message old">
			<div class="subject">
				Bootstrap 3.0 is finally here!
				<div class="btn-group pull-right">
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Move to trash"><i class="fa fa-trash-o"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply to all"><i class="fa fa-reply-all"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Forward"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div><!-- /.subject -->
			<div class="header media">
				<div class="media-avatar pull-left">
					<img alt="..." src="img/samples/avatar-3.jpg">
				</div>
				<div class="media-body">
					<div class="from">From: Anna Garcia <span class="email">&lt;anna@garcia.co.uk&gt;</span></div>
					<div class="to">To: Stephanie Woods <span class="email">&lt;stephanie@woods.co.uk&gt;</span></div>
					<div class="time">2 Sep 2013, 2:23 PM</div>
				</div>
			</div><!-- /.header -->
			<div class="body">
				<p>Hi Stephanie!</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut blandit ligula. In accumsan mauris at augue feugiat consequat. Aenean consequat sem sed velit sagittis dignissim. Phasellus quis convallis est. Praesent porttitor mauris nec lectus mollis, eget sodales libero venenatis. Cras eget vestibulum turpis. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam turpis velit, tempor vitae libero ac, fermentum laoreet dolor.
				</p>	
				<p>
					Regards,<br>
					Anna Garcia
				</p>
			</div><!-- /.body -->
		</div><!-- /.message -->

		<div class="message old">
			<div class="subject">
				Bootstrap 3.0 is finally here!
				<div class="btn-group pull-right">
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Move to trash"><i class="fa fa-trash-o"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply to all"><i class="fa fa-reply-all"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Forward"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div><!-- /.subject -->
			<div class="header media">
				<div class="media-avatar pull-left">
					<img alt="..." src="img/samples/avatar-3.jpg">
				</div>
				<div class="media-body">
					<div class="from">From: Anna Garcia <span class="email">&lt;anna@garcia.co.uk&gt;</span></div>
					<div class="to">To: Stephanie Woods <span class="email">&lt;stephanie@woods.co.uk&gt;</span></div>
					<div class="time">2 Sep 2013, 2:23 PM</div>
				</div>
			</div><!-- /.header -->
			<div class="body">
				<p>Hi Stephanie!</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut blandit ligula. In accumsan mauris at augue feugiat consequat. Aenean consequat sem sed velit sagittis dignissim. Phasellus quis convallis est. Praesent porttitor mauris nec lectus mollis, eget sodales libero venenatis. Cras eget vestibulum turpis. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam turpis velit, tempor vitae libero ac, fermentum laoreet dolor.
				</p>	
				<p>
					Regards,<br>
					Anna Garcia
				</p>
			</div><!-- /.body -->
		</div><!-- /.message -->
	</div>
</div></div>
						<div class="tab-pane" id="message-sent"><div class="row">
	<div class="centered empty-space">
		<i class="fa fa-envelope"></i>
		No message
	</div>
</div></div>
						<div class="tab-pane" id="message-draft"><div class="row">
	<div class="col-lg-3 col-md-3 message-list">

		<div class="media">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-4.jpg">
					<div class="utility">
						<i class="fa fa-star"></i>
					</div>
					<div class="utility">
						<i class="fa fa-paperclip"></i>
					</div>
				</div>
				<div class="media-body">
					<div class="muted"></div>
					<h4 class="media-heading">Lorem ipsum dolor sit amet</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>
		<div class="media">
			<a href="#">
				<div class="pull-left">
					<img alt="..." src="img/samples/avatar-4.jpg">
					<div class="utility">
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="media-body">
					<div class="muted"></div>
					<h4 class="media-heading">Media heading</h4>
					Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera …
				</div>
			</a>
		</div>    
	</div>

	<div class="col-lg-9 col-md-9 message-detail">
		<div class="message">
			<div class="subject">
				Lorem ipsum dolor sit amet
				<div class="btn-group pull-right">
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Move to trash"><i class="fa fa-trash-o"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply to all"><i class="fa fa-reply-all"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Forward"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div><!-- /.subject -->
			<div class="header media">
				<div class="media-avatar pull-left">
					<img alt="..." src="img/samples/avatar-4.jpg">
				</div>
				<div class="media-body">
					<div class="from">From: Rob Thomas <span class="email">&lt;rob.thomas@yahoo.co.uk&gt;</span></div>
					<div class="to">To: None</div>
					<div class="time">11 Sep 2013, 12:26 AM</div>
				</div>
			</div><!-- /.header -->

			<div class="body">
				<p>
					Cras sed leo in neque iaculis iaculis vel vel sem. Praesent sed urna viverra odio molestie consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis quis consectetur arcu, quis tempus ipsum. Fusce eleifend arcu nunc, non porta ipsum imperdiet faucibus. Vivamus dictum, massa tincidunt blandit faucibus, tortor libero rhoncus nunc, id faucibus est leo non odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at elit sed quam pretium bibendum vel eget sem. Fusce sed ante nec eros placerat vulputate sed eget nulla. Sed in dictum justo, ut ullamcorper est. Proin semper tellus orci, eu accumsan neque ultrices at. Fusce a vulputate risus. Maecenas id hendrerit metus, ornare sodales dolor. Pellentesque tempus, justo quis faucibus commodo, magna mauris tempus velit, vitae egestas leo orci in sapien. Maecenas egestas erat augue, sit amet convallis lacus tristique eu. Donec gravida dui dictum libero eleifend dapibus. 
				</p>
			</div><!-- /.body -->
		</div><!-- /.message -->

		<div class="message old">
			<div class="subject">
				Bootstrap 3.0 is finally here!
				<div class="btn-group pull-right">
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Move to trash"><i class="fa fa-trash-o"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply to all"><i class="fa fa-reply-all"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Forward"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div><!-- /.subject -->
			<div class="header media">
				<div class="media-avatar pull-left">
					<img alt="..." src="img/samples/avatar-8.jpg">
				</div>
				<div class="media-body">
					<div class="from">From: Stephanie Woods <span class="email">&lt;stephanie@woods.co.uk&gt;</span></div>
					<div class="to">To: Anna Garcia <span class="email">&lt;anna@garcia.co.uk&gt;</span></div>
					<div class="time">4 Sep 2013, 4:46 PM</div>
				</div>
			</div><!-- /.header -->
			<div class="body">
				<p>
					Cras sed leo in neque iaculis iaculis vel vel sem. Praesent sed urna viverra odio molestie consectetur. 
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				</p>
				<p> 
					Duis quis consectetur arcu, quis tempus ipsum. Fusce eleifend arcu nunc, non porta ipsum imperdiet faucibus. 
					Vivamus dictum, massa tincidunt blandit faucibus, tortor libero rhoncus nunc, id faucibus est leo non odio. 
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at elit 
					sed quam pretium bibendum vel eget sem. Fusce sed ante nec eros placerat vulputate sed eget nulla. 
				</p>	
				<p>
					Regards,<br>
					Stephanie Woods
				</p>
			</div><!-- /.body -->
		</div><!-- /.message -->

		<div class="message old">
			<div class="subject">
				Bootstrap 3.0 is finally here!
				<div class="btn-group pull-right">
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Move to trash"><i class="fa fa-trash-o"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Reply to all"><i class="fa fa-reply-all"></i></a>
					<a href="#" class="btn btn-default btn-sm" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" title="Forward"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div><!-- /.subject -->
			<div class="header media">
				<div class="media-avatar pull-left">
					<img alt="..." src="img/samples/avatar-3.jpg">
				</div>
				<div class="media-body">
					<div class="from">From: Anna Garcia <span class="email">&lt;anna@garcia.co.uk&gt;</span></div>
					<div class="to">To: Stephanie Woods <span class="email">&lt;stephanie@woods.co.uk&gt;</span></div>
					<div class="time">2 Sep 2013, 2:23 PM</div>
				</div>
			</div><!-- /.header -->
			<div class="body">
				<p>Hi Stephanie!</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut blandit ligula. In accumsan mauris at augue feugiat consequat. Aenean consequat sem sed velit sagittis dignissim. Phasellus quis convallis est. Praesent porttitor mauris nec lectus mollis, eget sodales libero venenatis. Cras eget vestibulum turpis. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam turpis velit, tempor vitae libero ac, fermentum laoreet dolor.
				</p>	
				<p>
					Regards,<br>
					Anna Garcia
				</p>
			</div><!-- /.body -->
		</div><!-- /.message -->
	</div>
</div></div>
						<div class="tab-pane" id="message-compose"><div class="row">
	<div class="col-lg-12">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-md-2 control-label" for="to">To</label>
				<div class="col-md-10">
					<input type="text" name="to" id="to" class="form-control" placeholder="">
				</div>
			</div><!-- /.form-group -->

			<div class="form-group">
				<label class="col-md-2 control-label" for="to">CC</label>
				<div class="col-md-10">
					<input type="text" name="cc" id="cc" class="form-control" placeholder="">
				</div>
			</div><!-- /.form-group -->

			<div class="form-group">
				<label class="col-md-2 control-label" for="to">BCC</label>
				<div class="col-md-10">
					<input type="text" name="bcc" id="bcc" class="form-control" placeholder="">
				</div>
			</div><!-- /.form-group -->

			<div class="form-group">
				<label class="col-md-2 control-label" for="to">Subject</label>
				<div class="col-md-10">
					<input type="text" name="subject" id="subject" class="form-control" placeholder="">
				</div>
			</div><!-- /.form-group -->

			<div class="form-group">
				<label class="col-md-2 control-label" for="to">Message</label>
				<div class="col-md-10">
					<textarea name="message" id="message" rows="20" class="form-control wysihtml5" placeholder=""></textarea>
				</div>
			</div><!-- /.form-group -->

			<div class="form-group">
				<div class="col-md-10 col-md-push-2">
					<button class="btn btn-primary">Send</button>
					<button class="btn btn-default">Save as Draft</button>
				</div>
			</div><!-- /.form-group -->
			
		</form>	
	</div>
</div></div>
					</div>
				</div>



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
		<script src="{{{ asset('assets/js/libs/jquery-1.10.2.min.js'); }}}"></script>

		<!-- jQuery UI -->
		<script src="{{{ asset('assets/js/libs/jquery-ui.min.js'); }}}"></script>

		<!-- Bootstrap core JavaScript -->
		<script src="{{{ asset('assets/bootstrap/js/bootstrap.min.js?v=3.0.2'); }}}"></script>

		<!-- jQuery Transit -->
		<script src="{{{ asset('assets/js/libs/jquery.transit.min.js?v=0.9.9'); }}}"></script>

		<!-- Bootstrap Switch -->
		<script src="{{{ asset('assets/js/libs/bootstrap-switch.js'); }}}"></script>

		<!-- Bootstrap Select -->
		<script src="{{{ asset('assets/js/libs/bootstrap-select.min.js'); }}}"></script>

		<!-- Bootstrap File -->
		<script src="{{{ asset('assets/js/libs/bootstrap-filestyle.js'); }}}"></script>

		<script src="{{{ asset('assets/js/libs/wysihtml5-0.3.0.min.js'); }}}"></script>

		<!-- Bootstrap WYSIHTML5 -->
		<script src="{{{ asset('assets/js/libs/bootstrap-wysihtml5.js'); }}}"></script>

		<!-- jQuery FullCalendar -->
		<script src="{{{ asset('assets/js/libs/fullcalendar.min.js'); }}}"></script>
		<script src="{{{ asset('assets/js/libs/gcal.js'); }}}"></script>

		<!-- Prism -->
		<script src="{{{ asset('assets/js/libs/prism.js'); }}}"></script>

		<!-- jVectorMap -->
		<script src="{{{ asset('assets/js/libs/jquery-jvectormap-1.2.2.min.js'); }}}"></script>
		<script src="{{{ asset('assets/js/libs/jquery-jvectormap-world-mill-en.js'); }}}"></script>

		<!-- Flot -->
		<script src="{{{ asset('assets/js/libs/jquery.flot.min.js'); }}}"></script>
		<script src="{{{ asset('assets/js/libs/jquery.flot.time.min.js'); }}}"></script>
		<script src="{{{ asset('assets/js/libs/jquery.flot.pie.min.js'); }}}"></script>
		<script src="{{{ asset('assets/js/libs/jquery.flot.resize.min.js'); }}}"></script>
		<script src="{{{ asset('assets/js/libs/jquery.flot.stack.min.js'); }}}"></script>
		<script src="{{{ asset('assets/js/libs/jquery.flot.tooltip.min.js'); }}}"></script>

		<!-- Sparkline -->
		<script src="{{{ asset('assets/js/libs/jquery.sparkline.min.js'); }}}"></script>

		<!-- Prism -->
		<script src="{{{ asset('assets/js/libs/jquery.sparkline.min.js'); }}}"></script>

		<!-- jQuery EqualHeights -->
		<script src="{{{ asset('assets/js/libs/jquery.equalheights.min.js'); }}}"></script>

		<!-- jQuery Nicescroll -->
		<script src="{{{ asset('assets/js/libs/jquery.nicescroll.min.js'); }}}"></script>

		<!-- Theme script -->
		<script src="{{{ asset('assets/js/styler/script.js'); }}}"></script>
		<script src="{{{ asset('assets/js/styler/sample_graphs.js'); }}}"></script>
	</body>
</html>
<!-- Localized -->