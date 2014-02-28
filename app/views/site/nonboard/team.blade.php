@extends('site.outlines.nonboard') 
{{-- Web site Title --}}
@section('title')
Network Registration
@stop

{{-- Outline --}}
@section('outline')
<body>
<div id="wrapper">
<section id="middle" class="no-sidebar border-top">

	<div id="content">

		<div class="section-content">
			<div class="header align-center">
				<a id="brand" class="circle" href={{ URL::to('/') }} >DCAF</a>
			</div>
		</div>

		<div class="section-content section-content-dark signin-page">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 abc">
					    @if ( Session::get('error') )
					        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
					    @endif

					    @if ( Session::get('notice') )
					        <div class="alert alert-info">{{{ Session::get('notice') }}}</div>
					    @endif
						<style>
							h3,
							h2,
							a:visited {
							  color: #ffffff !important;
							}
						</style>
						<h2 class="align-center"><strong>Have your co-workers registered on our site already? Or are you the bravest?</strong></h2>

						<div class='btn-group'>
							<button type='button' class="btn btn-primary btn-block">Me First</button>
							<button type='button' class="btn btn-primary btn-block">Fashionably Late</button>
						</div>
						<br />

						<form class="form-signin" role="form" method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
    							
								<input type="text" class="form-control input-lg" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}" required autofocus>
								<input type="password" class="form-control input-lg" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password" required>
								
								<button class="btn btn-lg btn-primary btn-block" type="submit">{{ Lang::get('confide::confide.login.submit') }}</button>
							
						</form>
						
						<hr>
						<h3 class="align-center">All done?<br /><h3>
						<!--button class="btn btn-lg btn-primary btn-block" type="submit"> I'm all done</button-->
						<a class="btn btn-lg btn-warning col-lg-4 col-lg-offset-4" href={{ URL::to('/') }}><strong> Go to dashboard!</strong></a>
					</div>
				</div>
			</div> <!-- /container -->
		</div>
	</div>
</section>
@stop