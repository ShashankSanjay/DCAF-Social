@extends('site.outlines.dashboard')

{{-- Web site Title --}}
@section('title')
Demographics
@stop

{{-- Content --}}
@section('content')
<div id="content">
	<div class="container">
		<div class="panel panel-outline">
			<div class="panel-heading">
				<h2 class="panel-title">Demographics</h2>
				<div class="panel-utility pull-right">

					<!-- Dropdown menu -->
					<div class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Network <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#"> <i class="icon-edit"></i>
									Sample Link
								</a>
							</li>
							<li>
								<a href="#"> <i class="icon-edit"></i>
									Sample Link
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-edit"></i>
									Sample Link
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-edit"></i>
									Sample Link
								</a>
							</li>
						</ul>
					</div>
					<div class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Brand <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">
									<i class="icon-edit"></i>
									Sample Link
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-edit"></i>
									Sample Link
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-edit"></i>
									Sample Link
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-edit"></i>
									Sample Link
								</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
			<div class="panel-body">...</div>
			<div class="panel-footer">...</div>
		</div>

		<hr>
		
		<div class="align-center">
			<h2>Demographics</h2>
			<div class="btn-group">
				<div class="btn-group">
				    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
				      {{ $network or 'Dropdown'}}
				      <span class="caret"></span>
				    </button>
				    <ul class="dropdown-menu">
				      <li><a href="#">Facebook</a></li>
				      <li><a href="#">Twitter</a></li>
				      <li><a href="#">Google</a></li>
				      <li><a href="#">Instagram</a></li>
				    </ul>
				</div>
				<div class="btn-group">
				    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
				      {{ $company or 'Dropdown' }}
				      <span class="caret"></span>
				    </button>
				    <ul class="dropdown-menu">
				      <li><a href="#">Pepsi</a></li>
				      <li><a href="#">Best Buy</a></li>
				    </ul>
				</div>
			</div>
		</div>

	</div>
</div>
@stop