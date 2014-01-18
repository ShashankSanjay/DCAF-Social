@extends('site.layouts.default')
 
{{-- Content --}}
@section('content')

	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-utility pull-right">

								<form>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search message">
									</div>
									<button class="btn btn-info">Search</button>
								</form>
							</div>
						</div><!-- /.panel-heading -->
						<div class="panel-body messages">

							<div class="row">

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

						</div><!-- /.panel-body -->
					</div><!-- /.panel-default -->
				</div><!-- /.col-lg-6 -->

			</div><!-- /.row -->

		</div><!-- /.container -->
<!-- Localized -->
@stop