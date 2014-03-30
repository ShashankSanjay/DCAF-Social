<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="social, analytics, social analytics, facebook, twitter, google plus" />
		<meta name="author" content="DCAF-Social" />
		<meta name="description" content="This is a social network analytics platform" />

		<title>
			@section('title')
			DCAF-Social
			@show
		</title>

		<!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
        {{ HTML::style('assets/css/plugins/pace/pace.css') }}
        {{ HTML::style('assets/js/plugins/pace/pace.js') }}

        <!-- GLOBAL STYLES - Include these on every page. -->
        {{ HTML::style('assets/css/plugins/bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('assets/fonts.googleapis.com/css3ef8.css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic') }}
        {{ HTML::style('assets/fonts.googleapis.com/css5c84.css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') }}
        {{ HTML::style('assets/icons/font-awesome/css/font-awesome.min.css') }}

        <!-- PAGE LEVEL PLUGIN STYLES -->
        {{ HTML::style('assets/css/plugins/messenger/messenger.css') }}
        {{ HTML::style('assets/css/plugins/messenger/messenger-theme-flat.css') }}
        {{ HTML::style('assets/css/plugins/daterangepicker/daterangepicker-bs3.css') }}
        {{ HTML::style('assets/css/plugins/morris/morris.css') }}
        {{ HTML::style('assets/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}
        {{ HTML::style('assets/css/plugins/datatables/datatables.css') }}

        <!-- THEME STYLES - Include these on every page. -->
        {{ HTML::style('assets/css/style.css') }}
        {{ HTML::style('assets/css/plugins.css') }}

        

        <!--[if lt IE 9]>
          {{ HTML::style('assets/js/html5shiv.js') }}
          {{ HTML::style('assets/js/respond.min.js') }}
        <![endif]-->
    </head>

  <body class="login">
  	<br>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="login-banner text-center">
            <h1>
              <a href={{ URL::to('/') }} style="color: #fff !important;">
              {{ HTML::image('favicon.ico', 'dcaf', array('width' => 70, 'height' => 70)) }}DCAF-Social 
              </a>
            </h1>
          </div>
          <!--div class="portlet portlet-green"-->
          <div class="tile light-gray text-center">
          	<style type="text/css">
          		h4.dcaf {
          			color: #34495e !important;
          		}
          	</style>
          	<h4 class="dcaf"> Connect a social network account, then enter a<strong> POST</strong>, or <strong>TWEET </strong>URL</h4>
            <!--div class="portlet-heading login-heading">
              <div class="portlet-title">
              	
                <h4> Connect a social network account, then enter a<strong> POST</strong>, or <strong>TWEET </strong>URL</h4>
              </div>
              
              <div class="clearfix"></div>
            </div-->
            <!--div class="portlet-body"-->
            <hr>
              <form accept-charset="UTF-8" role="form" action={{ URL::to('lookUp') }}>
        				<div class="input-group">
        					<input type="text" class="form-control" name="url" id="url" placeholder="http://www.social-network.com/post-id">
        					<span class="input-group-btn">
        					    <button class="btn btn-default" type="submit">Go!</button>
        					</span>
        				</div>
              </form>

                  <br>
                  <style type="text/css">
                  	/*
                      Alex - please figure out how to do get the 'addthis500' img to display when hovering over any of the icons.
                      Also get this opacity to work, i would like both, the overlay and opacity. When a user is logged in to a certain
                      network, show the img with borders. That can be done through css or just use imgs in the 'img/Social-Icons/bordered' 
                      directory.
                        -Shashank
                    */
                  	a:hover
                  	a:focus {
                  		opacity: 0.5;
                  	}

                  </style>
                  @if ( Session::get('notice') )
                    <div class="alert alert-info">{{ Session::get('notice') }}</div>
                  @endif
                  <a href={{ OAuth::getAuthorizeUrl('facebook')->redirect(URL::current()) }} class="btn btn-social dcaftemp">
                    {{ HTML::image('assets/img/Social-Icons/facebook500.png', 'click here to link to fb', array('width' => 70, 'height' => 70)) }}
                    <!--span class="add-icon"> {{ HTML::image('assets/img/Social-Icons/addthis500.png', 'addme!', array('width' => 70, 'height' =>70)) }} </span-->
                  </a>
                  <a href={{ OAuth::getAuthorizeUrl('twitter') }} class="btn btn-social dcaftemp">
                    {{ HTML::image('assets/img/Social-Icons/twitter.png', 'click here to link to tw', array('width' => 70, 'height' => 70)) }}
                    <!--span class="add-icon"> {{ HTML::image('assets/img/Social-Icons/addthis500.png', 'addme!', array('width' => 70, 'height' =>70)) }} </span-->
                  </a>
                  <a href={{ OAuth::getAuthorizeUrl('google')->redirect(URL::current()) }} class="btn btn-social dcaftemp">
                    {{ HTML::image('assets/img/Social-Icons/googleplus-revised.png', 'click here to link to gp', array('width' => 70, 'height' => 70)) }}
                    <!--span class="add-icon"> {{ HTML::image('assets/img/Social-Icons/addthis500.png', 'addme!', array('width' => 70, 'height' =>70)) }} </span-->
                  </a>
                
                <hr>
                
                
            <!--/div-->
          </div>
        </div>

      </div>
    </div>

    <!-- GLOBAL SCRIPTS -->

    <!-- Bootstrap core JavaScript -->
    {{ HTML::script('assets/js/plugins/bootstrap/bootstrap.min.js?v=3.0.2') }}
    {{ HTML::script('assets/ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
    {{ HTML::script('assets/js/plugins/bootstrap/bootstrap.min.js') }}
    {{ HTML::script('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}
    {{ HTML::script('assets/js/plugins/popupoverlay/jquery.popupoverlay.js') }}
    {{ HTML::script('assets/js/plugins/popupoverlay/defaults.js') }}
    
    <!-- HISRC Retina Images -->
    {{ HTML::script('assets/js/plugins/hisrc/hisrc.js') }}

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    {{ HTML::script('assets/js/plugins/datatables/jquery.dataTables.js') }}
    {{ HTML::script('assets/js/plugins/datatables/datatables-bs3.js') }}

    <!-- THEME SCRIPTS -->
    {{ HTML::script('assets/js/flex.js') }}
    {{ HTML::script('assets/js/demo/dashboard-demo.js') }}
	
	
	</body>
  <footer>
    
    <div style="col-md-4 col-md-offset-2">
      <h5 class="text-center" style="color: #fff !important;">
        
        <a style="color: #fff !important;" href={{ URL::to('ourTeam') }} > <strong>Our Team</strong>
        </a>
        
      </h5>
    </div>
    <div style="col-md-4 col-md-offset-2">
      <h5 class="text-center" style="color: #fff !important; padding-bottom: 15px;">
        Legal stuff:
        <a style="color: #fff !important;" href={{ URL::to('privacy') }} > <strong>Privacy</strong>
        </a>
        and
        <a style="color: #fff !important;" href={{ URL::to('termsOfService') }} > <strong>Terms of Service</strong>
        </a>
      </h5>
    </div>
    
  
  </footer>
</html>
<!-- Localized -->