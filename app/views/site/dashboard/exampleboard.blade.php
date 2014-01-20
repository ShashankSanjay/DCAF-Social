@extends('site.outlines.dashboard')

{{-- Web site Title --}}
@section('title')
Example Board
@stop

{{-- Content --}}
@section('content')
  <div id="content">
		<div class="container">

			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="stat-block stat-primary">
						<div class="icon">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								1349
							</div>
							<div class="description">                           
								Feedbacks
							</div>
						</div>               
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="stat-block stat-info">
						<div class="icon">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">549</div>
							<div class="description">New Orders</div>
						</div>               
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="stat-block stat-danger">
						<div class="icon">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">+89%</div>
							<div class="description">Popularity</div>
						</div>               
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="stat-block stat-warning">
						<div class="icon">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">$2.1M</div>
							<div class="description">Total Profit</div>
						</div>              
					</div>
				</div>
			</div><!-- /.row -->

		</div><!-- /.container -->

		<hr>

		<div class="container">
			<div class="row">
				
				<div class="col-lg-7 col-md-7">

					<div class="panel panel-outline">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-cogs"></i> Resource Usage</h3>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-3">
									<div class="sparkline-chart" id="sparkline-graph2">25,27,18,29,23,9,6,5,12,15,5,29,10,28,20,21,16,7,5,7</div>
									<div class="align-center">Server Load</div>
								</div>
								<div class="col-sm-3">
									<div class="sparkline-chart" id="sparkline-graph3">12,18,13,17,22,22,11,22,19,15,28,13,11,15,11,29,20,13,29,27</div>
									<div class="align-center">RAM Usage</div>
								</div>
								<div class="col-sm-3">
									<div class="sparkline-chart" id="sparkline-graph4">24,30,25,29,27,15,20,12,17,20,15,25,7,23,11,25,15,18,16,29</div>
									<div class="align-center">CPU Usage</div>
								</div>
								<div class="col-sm-3">
									<div class="sparkline-chart" id="sparkline-graph5">28,14,12,9,24,19,8,14,28,7,10,21,7,5,20,29,15,9,11,28</div>
									<div class="align-center">Bandwidth</div>
								</div>
							</div>
						</div><!-- /.panel-body -->
					</div><!-- /.panel-outline -->

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Newsfeeds</h3>

							<div class="panel-utility pull-right">
							<!-- Dropdown menu -->
								<div class="dropdown pull-right">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
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

							<section class="profile-stream scroll-viewport">

								<div class="activity-stream scroll-area">

	                                <div class="media">
										<a class="pull-left" href="profile">
											<img class="media-object" src="img/samples/avatar-7.jpg" alt="Jason Lee">
										</a>
										<div class="media-body">
											<h4 class="media-heading"><a href="#">Jeremy White</a></h4>
											<p>Bespoke qui master cleanse anim tousled minim.</p>

											<ul class="list-inline">
												<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
												<li><a href="#" class="small">Comment</a></li>
												<li><a href="#" class="small">Share</a></li>
												<li><span class="muted small">about an hour ago</span></li>
											</ul>

											<form class="form-inline form-comment">
												<div class="form-group">
													<input type="text" class="form-control input-sm" placeholder="Write a comment ...">
												</div>
											</form>
										</div>
									</div>

									<div class="media">
										<a class="pull-left" href="profile">
											<img class="media-object" src="img/samples/avatar-4.jpg" alt="Jason Lee">
										</a>
										<div class="media-body">
											<h4 class="media-heading"><a href="#">Rob Thomas</a></h4>
											<p>Enjoying the firework</p>
											<a href="#" class="thumbnail inline-thumbnail">
												<img src="img/samples/slide-2.jpg">
											</a>

											<ul class="list-inline">
												<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
												<li><a href="#" class="small">Comment</a></li>
												<li><a href="#" class="small">Share</a></li>
												<li><span class="muted small">about an hour ago</span></li>
											</ul>

											<form class="form-inline form-comment">
												<div class="form-group">
													<input type="text" class="form-control input-sm" placeholder="Write a comment ...">
												</div>
											</form>
										</div>
									</div>

									<div class="media">
										<a class="pull-left" href="profile">
											<img class="media-object" src="img/samples/avatar-6.jpg" alt="A.J. Cook">
										</a>
										<div class="media-body">
											<h4 class="media-heading"><a href="#">A.J. Cook</a></h4>
											<p>Can't beat the nature!</p>
											<a href="#" class="thumbnail inline-thumbnail">
												<img src="img/samples/slide-1.jpg">
											</a>

											<ul class="list-inline">
												<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
												<li><a href="#" class="small">Comment</a></li>
												<li><a href="#" class="small">Share</a></li>
												<li><span class="muted small">about an hour ago</span></li>
											</ul>

											<div class="media">
												<a class="pull-left" href="profile">
													<img class="media-object" src="img/samples/avatar-2.jpg" alt="Jason Lee">
												</a>
												<div class="media-body">
													<h4 class="media-heading"><a href="#">Nick Adam</a></h4>
													<p>Umami seitan fashion axe, elit veniam whatever raw denim art party mumblecore jean shorts ad delectus eiusmod. </p>

													<ul class="list-inline">
														<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
														<li><a href="#" class="small">Comment</a></li>
														<li><a href="#" class="small">Share</a></li>
														<li><span class="muted small">about an hour ago</span></li>
													</ul>
												</div>
											</div>

											<div class="media">
												<a class="pull-left" href="#">
													<img class="media-object" src="img/samples/avatar-9.jpg" alt="Jason Lee">
												</a>
												<div class="media-body">
													<h4 class="media-heading"><a href="#">Nick Adam</a></h4>
													<p>When you click the Share button, the HTML code used to embed a link that video is displayed directly below it, however that's not what we are after--we want to directly embed the video into the page. We do that by clicking the Embed button which is displayed directly below the Link URL, as shown below. </p>

													<ul class="list-inline">
														<li><a href="#" class="small"><i class="fa fa-thumbs-o-up"></i> Like</a></li>
														<li><a href="#" class="small">Comment</a></li>
														<li><a href="#" class="small">Share</a></li>
														<li><span class="muted small">about an hour ago</span></li>
													</ul>
												</div>
											</div>

											<form class="form-inline form-comment">
												<div class="form-group">
													<input type="text" class="form-control input-sm" placeholder="Write a comment ...">
												</div>
											</form>
										</div>
									</div>

								</div>

							</section><!-- /.profile-stram -->
						</div><!-- /.panel-body -->
					</div><!-- /.panel-default -->


					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Task List</h3>
						</div><!-- /.panel-heading -->
						<div class="panel-body messages">

							<div class="message-detail">
								<div class="row table-heading">
									<div class="col-lg-7 col-md-7 col-sm-7">
										<input type="checkbox" name="checkAll" class="checkbox pull-left">

										<span class="heading">Title</span>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2">
										<span class="heading">Status</span>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="heading">Created</span>
									</div>
								</div><!-- /.row -->

																<div class="row table-row status-pending">
									<div class="col-lg-7 col-md-7 col-sm-7">
										<input type="checkbox" name="checkAll" class="checkbox pull-left">
										<span class="title">Id quod mazim placerat facer possim</span>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2">
										<span class="label label-danger">Pending</span>									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="created">2013-11-02 4:23 PM</span>
									</div>
								</div><!-- /.row -->
																<div class="row table-row status-new">
									<div class="col-lg-7 col-md-7 col-sm-7">
										<input type="checkbox" name="checkAll" class="checkbox pull-left">
										<span class="title">Soluta nobis eleifend option congue</span>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2">
										<span class="label label-primary">New</span>									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="created">2013-11-02 4:23 PM</span>
									</div>
								</div><!-- /.row -->
																<div class="row table-row status-new">
									<div class="col-lg-7 col-md-7 col-sm-7">
										<input type="checkbox" name="checkAll" class="checkbox pull-left">
										<span class="title">Humanitatis per seacula quarta</span>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2">
										<span class="label label-primary">New</span>									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="created">2013-11-02 4:23 PM</span>
									</div>
								</div><!-- /.row -->
																<div class="row table-row status-new">
									<div class="col-lg-7 col-md-7 col-sm-7">
										<input type="checkbox" name="checkAll" class="checkbox pull-left">
										<span class="title">Quam nunc putamus parum</span>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2">
										<span class="label label-primary">New</span>									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="created">2013-11-02 4:23 PM</span>
									</div>
								</div><!-- /.row -->
																<div class="row table-row status-new">
									<div class="col-lg-7 col-md-7 col-sm-7">
										<input type="checkbox" name="checkAll" class="checkbox pull-left">
										<span class="title">Mirum est notare quam littera gothica</span>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2">
										<span class="label label-primary">New</span>									</div>
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="created">2013-11-02 4:23 PM</span>
									</div>
								</div><!-- /.row -->
								
							</div>
						</div>
					</div><!-- /.panel-default -->

				</div><!-- /.col-lg-6 -->

				<div class="col-lg-3 col-md-3">

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Friend's Online</h3>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<ul class="list-unstyled friend-list">
								<li>
									<a href="#">
										<span class="label label-success">online</span>
										<img src="img/samples/avatar-8.jpg">Samantha Hills
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-success">online</span>
										<img src="img/samples/avatar-2.jpg">Nick Adam
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-success">online</span>
										<img src="img/samples/avatar-3.jpg">Samantha Brown
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-success">online</span>
										<img src="img/samples/avatar-10.jpg">Will Smith
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-success">online</span>
										<img src="img/samples/avatar-1.jpg">John Carter
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-success">online</span>
										<img src="img/samples/avatar-7.jpg">Jeremy White
									</a>
								</li>
							</ul>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Work Progress</h3>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<ul class="list-unstyled">
								<li>
									Upgrade to Laravel 4.1
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
											<span class="sr-only">70% Complete (success)</span>
										</div>
									</div>
								</li>
								<li>
									Create user management package
									<div class="progress">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
											<span class="sr-only">50% Complete (success)</span>
										</div>
									</div>
								</li>
								<li>
									Migrate database to PostgreSQL
									<div class="progress">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only">20% Complete (success)</span>
										</div>
									</div>
								</li>

								<li>
									Upgrade all themes to Bootstrap 3
									<div class="progress">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete (success)</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Who's Online</h3>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<ul class="list-unstyled user-list">
								<li><a href="#"><img src="img/samples/avatar-2.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-3.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-4.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-5.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-6.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-7.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-8.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-9.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-10.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-2.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-3.jpg"></a></li>
								<li><a href="#"><img src="img/samples/avatar-4.jpg"></a></li>
							</ul>
						</div>
					</div>


					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">Notice</h3>
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2">

					<div class="statistic-list-chart">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Inline Bar Statistics</h3>
							</div>
							<div class="panel-body">
								<ul class="listing list-unstyled">
									<li>
										<span class="inlinebar">1,3,4,5,3,5,2</span>
										<h4>65</h4>
										<p class="sub">Signups</p>
									</li>
									<li>
										<span class="inlinebar">1,4,4,7,5,9,10</span> 
										<h4>34</h4> 
										<p class="sub">Comments</p>
									</li>
									<li>
										<span class="inlinebar">1,3,4,5,3,5,2</span>
										<h4>99</h4>
										<p class="sub">Photos</p>
									</li>
									<li>
										<span class="inlinebar">1,3,4,5,3,5,2</span>
										<h4>60</h4>
										<p class="sub">Videos</p>
									</li>
									<li>
										<span class="inlinebar">1,3,4,5,3,5,2</span>
										<h4>40</h4>
										<p class="sub">Events</p>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="statistic-list-chart">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Inline Line Statistics</h3>
							</div>
							<div class="panel-body">
								<ul class="listing list-unstyled">
									<li>
										<span class="inlineline">18,11,13,5,15,8,15,17,15,13</span>
										<h4>65</h4>
										<p class="sub">Signups</p>
									</li>
									<li>
										<span class="inlineline">18,19,7,20,19,17,19,8,20,6</span> 
										<h4>34</h4> 
										<p class="sub">Comments</p>
									</li>
									<li>
										<span class="inlineline">6,16,18,18,14,6,17,7,20,7</span>
										<h4>99</h4>
										<p class="sub">Photos</p>
									</li>
									<li>
										<span class="inlineline">9,15,14,17,16,6,21,8,19,13</span>
										<h4>60</h4>
										<p class="sub">Videos</p>
									</li>
									<li>
										<span class="inlineline">17,14,9,19,12,6,14,8,10,12</span>
										<h4>40</h4>
										<p class="sub">Events</p>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="statistic-list-chart">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Inline Bar Statistics</h3>
							</div>
							<div class="panel-body">
								<ul class="listing list-unstyled">
									<li>
										<span class="inlinebar2">10,11,5,5,7,14,6,20,17,22</span>
										<h4>65</h4>
										<p class="sub">Signups</p>
									</li>
									<li>
										<span class="inlinebar2">22,22,15,14,16,9,16,15,13,12</span> 
										<h4>34</h4> 
										<p class="sub">Comments</p>
									</li>
									<li>
										<span class="inlinebar2">5,7,22,10,22,11,12,14,15,17</span>
										<h4>99</h4>
										<p class="sub">Photos</p>
									</li>
									<li>
										<span class="inlinebar2">21,20,5,22,20,8,13,22,5,8</span>
										<h4>60</h4>
										<p class="sub">Videos</p>
									</li>
									<li>
										<span class="inlinebar2">22,5,7,14,15,19,18,8,11,8</span>
										<h4>40</h4>
										<p class="sub">Events</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="statistic-list-chart">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Statistics</h3>
							</div>
							<div class="panel-body">
								<ul class="listing list-unstyled">
									<li>
										<span class="inlineline2">15,12,11,14,17,10,21,6,20,13</span>
										<h4>65</h4>
										<p class="sub">Signups</p>
									</li>
									<li>
										<span class="inlineline2">18,18,11,19,17,8,5,8,7,6</span> 
										<h4>34</h4> 
										<p class="sub">Comments</p>
									</li>
									<li>
										<span class="inlineline2">12,7,6,14,16,16,11,12,20,17</span>
										<h4>99</h4>
										<p class="sub">Photos</p>
									</li>
									<li>
										<span class="inlineline2">16,12,6,5,22,19,10,20,21,7</span>
										<h4>60</h4>
										<p class="sub">Videos</p>
									</li>
									<li>
										<span class="inlineline2">11,17,21,17,14,15,21,15,19,6</span>
										<h4>40</h4>
										<p class="sub">Events</p>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->

		</div><!-- /.container -->
	</div>
@stop