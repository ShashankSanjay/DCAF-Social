@extends('site.outlines.nonboard') 
{{-- Web site Title --}}
@section('title')
DCAF
@stop

{{-- Outline --}}
@section('outline')
	<body>
		<div id="wrapper">
<section id="middle" class="no-sidebar border-top">

	<div id="content">

		<div class="section-content">
			<div class="header align-center">
				<a id="brand" class="circle" href="index">DCAF</a>
			</div>
		</div>

		<div class="section-content section-content-dark signin-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-lg-offset-4 col-md-offset-3">
						<form class="form-signin" role="form" method="POST" action="{{ (Confide::checkAction('UserController@do_forgot_password')) ?: URL::to('/user/forgot') }}" accept-charset="UTF-8">
						    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

						    <div class="form-group">
						        
						            <input type="text" class="form-control input-lg" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" name="email" id="email" value="{{{ Input::old('email') }}}">
						            
						        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ Lang::get('confide::confide.forgot.submit') }}</button>
						    </div>

						    @if ( Session::get('error') )
						        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
						    @endif

						    @if ( Session::get('notice') )
						        <div class="alert alert-info">{{{ Session::get('notice') }}}</div>
						    @endif
						</form>
						
					</div>
				</div>
			</div> <!-- /container -->
		</div>

		<div class="section-content signin-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-lg-offset-4 col-md-offset-3">
						<ul class="list-inline align-center">
							
							<li></li>
							<li><a href="{{ URL::to('user/login') }}">Sign in</a></li>
						</ul>

						<hr>
						<ul class="nav nav-pills nav-justified">
							<li><a href="#" class="social-network brand-facebook"><i class="fa fa-facebook-square"></i> Facebook</a></li>
							<li><a href="#" class="social-network brand-gplus"><i class="fa fa-google-plus-square"></i> Google+</a></li>
							<li><a href="#" class="social-network brand-twitter"><i class="fa fa-twitter-square"></i> Twitter</a></li>
							<li><a href="#" class="social-network brand-github"><i class="fa fa-github-square"></i> Github</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>

		</div><!-- /#wrapper -->
		
@stop