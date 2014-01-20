@extends('site.layouts.default')
 
{{-- Web site Title --}}
@section('title')
Dashboard
@stop

{{-- Outline --}}
@section('outline')
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
										<span class="user-name">{{{ Auth::user()->username }}}</span>
										<span class="connection online"><i class="fa fa-circle"></i> Online</span>
									</span>

									<b class="caret"></b>
								</a>
								<ul class="panel-collapse collapse" id="user-menu">
									<li><a href="settings"><i class="fa fa-cogs"></i> Settings</a></li>
									<li><a href="#"><i class="fa fa-question-circle"></i> Help</a></li>
									<li><a href="{{ URL::to('user/logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					
					<!--nav class="navbar navbar-inverse user-notification">
						<div class="">
							<ul class="nav navbar-nav">
								
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
					</nav-->

					<nav class="side-nav">
						<ul class="nav nav-pills nav-stacked">
							<li {{ (Request::is('/') ? ' class="active"' : '') }}>
								<a href="{{ URL::to('/') }}">
									<i class="fa fa-dashboard"></i>
									Dashboard
								</a>
							</li>

							<li>
								<a href="#tasks" data-toggle="collapse" data-parent=".side-nav" class="collapsed">
									<i class="fa fa-list-ul"></i>
									Task Lists <b class="caret"></b>
								</a>
								<ul class="panel-collapse collapse {{ (Request::is('tasks') ? 'in' : '') }} " id="tasks">
									<li {{ (Request::is('tasks') ? ' class="active"' : '') }} ><a href="tasks"><i class="fa fa-arrow-right"></i> Task inside Panel</a></li>
									<li ><a href="tasks-alt"><i class="fa fa-arrow-right"></i> Task without Panel</a></li>
								</ul>
							</li>

							<li>
								<a href="#messages" data-toggle="collapse" data-parent=".side-nav" class="collapsed">
									<i class="fa fa-comments"></i>
									Messages <b class="caret"></b>
								</a>
								<ul class="panel-collapse collapse {{ (Request::is('messages') ? 'in' : '') }} " id="messages">
									<li {{ (Request::is('messages') ? ' class="active"' : '') }}><a href="messages"><i class="fa fa-arrow-right"></i> Messages inside Panel</a></li>
									<li ><a href="messages-alt"><i class="fa fa-arrow-right"></i> Messages without Panel</a></li>
								</ul>
							</li>

							<li {{ (Request::is('demographics') ? ' class="active"' : '') }}>
								<a href="demographics">
									<i class="fa fa-bar-chart-o"></i>
									Demographics
								</a>
							</li>

							<li >
								<a href="exampleBoard">
									<i class="fa fa-calendar"></i>
									ExampleBoard
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
								<ul class="panel-collapse collapse {{ (Request::is('404') ? 'in' : '') }}" id="pages">
									<li ><a href="signup"><i class="fa fa-arrow-right"></i> Sign up</a></li>
									<li ><a href="signin"><i class="fa fa-arrow-right"></i> Sign in</a></li>
									<li ><a href="profile"><i class="fa fa-arrow-right"></i> Profile</a></li>
									<li {{ (Request::is('404') ? ' class="active"' : '') }}><a href="404"><i class="fa fa-arrow-right"></i> Error 404</a></li>
								</ul>
							</li>
						</ul>
						<style>
							#sidebar .inner nav.side-nav ul.nav.cbox {
								display: table;
								width: 100%;
							}
							#sidebar .inner nav.side-nav ul.nav.cbox>li {
								display: table-cell;
							}
							#sidebar .inner nav.side-nav ul.nav.cbox>li>a {
								text-align: center;
							}
							
						</style>
						<ul class="nav nav-pills nav-stacked cbox">
							<li><a href="#">AYO</a></li>
							<li><a href="#">AYO</a></li>
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
						<a class="navbar-brand" id="brand" href="/">DCAF</a>
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
									@if (Auth::check())
			                        @if (Auth::user()->hasRole('admin'))
			                        <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
			                        @endif
			                        <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
			                        <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
			                        @else
			                        <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
			                        <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('site.sign_up') }}}</a></li>
			                        @endif
								</ul>
							</li>
						</ul>
					</div>
				</nav>

			</header><!-- /#header -->

				<!-- Content -->
					@yield('content')
					
				<!-- ./ content -->
			</div>	
			<footer>
				<div class="row">
					<div class="col-lg-12">
						
					</div>
				</div><!-- /.row -->
			</footer>
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
@stop