@extends('site.dashboard.home')
 
{{-- Content --}}
@section('content')
	<div id="content">
		<div class="container">

			<div class="row error-page">
				
				<p class="code">4<i class="fa fa-frown-o"></i>4</p>
				<p class="description">Looks like something went completely wrong!</p>
				<p class="description">Don't worry, it can happen to anyone - and it just happened to you.</p>

				<a href="{{ URL::to('/')}}" class="btn btn-danger btn-block btn-lg">&laquo; Retun to Dashboard</a>
			</div><!-- /.row -->

		</div>
	</div>
</div>
@stop