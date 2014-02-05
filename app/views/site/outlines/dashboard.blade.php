@extends('site.layouts.default')
 
{{-- Web site Title --}}
@section('title')
Dashboard
@stop

{{-- Outline --}}
@section('outline')
  <body>
		<div id="wrapper">
			
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
				<footer id="footer">
						@if (isset($companies))
						<!--div class="container"-->
							<style type="text/css">
								
								@if (count($companies)>5)
								#middle #content {
									padding-bottom: 5em !important;
								}
								.animate .nav li {
									width: {{ (100/count($companies))*2; }}%;
								}
								@else
								footer#footer {
									height: 2.8em !important;
								}
								.animate .nav li {
									width: {{ (100/count($companies)); }}%;
								}
								#middle #content {
									padding-bottom: 2.8em !important;
								}
								@endif
								/*.animate .icon {
									padding-left: {{ ((100/count($companies))*2)/10; }}%;
								}

								.no-touch .animate .nav li:hover,
								.animate .nav li:active ,
								.animate .nav li:focus {
									top: -5em !important;
								}

								.no-touch .animate .nav a:hover ,
								.animate .nav a:active ,
								.animate .nav a:focus  {
									height: 8em !important;
								}*/
							</style>
							<div class="main clearfix animate">
								<nav id="menu" class="nav">				
									<ul>
										@foreach ($companies as $company => $network) 
										<li>
											<!-- Each <a> should map to company page, and each network to company->network page -->
											<a href="{{ URL::to('demographics') }}" onclick="$('{{URL::to('/')}}').animatescroll();">
												<span> {{ $company }} </span>
												<span class="icon">
													@foreach ($network as $network) 
													<i class="{{ $network }}"></i>
													@endforeach
												</span>
											</a>
										</li>
										@endforeach
									</ul>
								</nav>
							</div>
						<!--/div-->
						@else
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
						@endif	
									
					
				</footer>
@stop