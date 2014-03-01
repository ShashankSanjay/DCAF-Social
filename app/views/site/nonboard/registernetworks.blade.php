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
					<li></li>
					<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
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
						<h2 class="align-center"><strong>Sign into the following networks and we'll begin brewing your analytics</strong><h2>

						<ul class="nav nav-pills nav-justified">
							<li><a href={{ OAuth::getAuthorizeUrl('facebook') }} class="btn btn-md{{ (OAuth::hasToken('facebook') ? 'btn-disabled' : '') }} social-network brand-facebook"><i class="fa fa-facebook-square"></i> Facebook</a></li>
							<li><a href={{ OAuth::getAuthorizeUrl('google') }} class="btn btn-md {{ (OAuth::hasToken('google') ? 'btn-disabled' : '') }} social-network brand-gplus"><i class="fa fa-google-plus-square"></i> Google+</a></li>
							<li><a href={{ OAuth::getAuthorizeUrl('twitter') }} class="btn btn-md {{ (OAuth::hasToken('twitter') ? 'btn-disabled' : '') }} social-network brand-twitter"><i class="fa fa-twitter-square"></i> Twitter</a></li>
							<li><a href={{ OAuth::getAuthorizeUrl('instagram') }} class="btn btn-md {{ (OAuth::hasToken('instagram') ? 'btn-disabled' : '') }} social-network brand-instagram"><i class="fa fa-instagram"></i> Instagram</a></li>
						</ul>
						<br />
						<hr>
						<h3 class="align-center">All done?<br /> You'll be able to add or remove networks later if you want to<h3>
						<!--button class="btn btn-lg btn-primary btn-block" type="submit"> I'm all done</button-->
						<a class="btn btn-lg btn-warning col-lg-4 col-lg-offset-4" href={{ URL::to('user/team') }}><strong> Next Step!</strong></a>
					</div>
				</div>
			</div> <!-- /container -->
		</div>
	</div>
</section>
@stop
