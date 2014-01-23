@extends('site.layouts.default')
 
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
						<form class="form-signin" role="form" method="POST" action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" accept-charset="UTF-8">
						    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
				   	            <input class="form-control input-lg" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}" required autofocus>
								<input type="text" class="form-control input-lg" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}" required>
								<input type="password" class="form-control input-lg" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password" required>
								<input type="password" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" required>
								<label class="checkbox">
									<input type="checkbox" value="agree-toc"> Agree with <a href="#">Terms and Conditions</a>
								</label>

								@if ( Session::get('error') )
						            <div class="alert alert-error alert-danger">
						                @if ( is_array(Session::get('error')) )
						                    {{ head(Session::get('error')) }}
						                @endif
						            </div>
						        @endif

						        @if ( Session::get('notice') )
						            <div class="alert alert-info">{{ Session::get('notice') }}</div>
						        @endif

								<button class="btn btn-lg btn-primary btn-block" type="submit">{{{ Lang::get('confide::confide.signup.submit') }}}</button>


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
							
							<li><a href="{{ URL::to('user/login')}}">Already have an account? Log in here</a></li>
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