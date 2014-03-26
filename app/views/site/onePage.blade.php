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
			DCAF
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
            <h1>{{ HTML::image('favicon.ico', 'dcaf', array('width' => 70, 'height' => 70)) }} DCAF-Social</h1>
          </div>
          <!--div class="portlet portlet-green"-->
          <div class="tile light-gray text-center">
          	<style type="text/css">
          		h4 {
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
              <form accept-charset="UTF-8" role="form">
				<div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-btn">
					    <button class="btn btn-default" type="button">Go!</button>
					</span>
				</div>
              </form>

                  <br>
                  <style type="text/css">
                  	
                  	a.dcaftemp {
                  		position: relative;
                  	}

                  	a.dcaftemp:hover
                  	a.dcaftemp:focus {
                  		opacity: 0.5;
                  	}

                  	a.dcaftemp span.add-icon {
                  		position: absolute;
                  		visibility: hidden;
                  		
                  	}

                  	a.dcaftemp:hover span.add-icon {
                  		visibility: visible;
                  		//opacity: 0.7;
                  	}
                  </style>

                  <a href='' class="btn btn-social dcaftemp">
                    {{ HTML::image('assets/img/Social-Icons/facebook500.png', 'click here to link to fb', array('width' => 70, 'height' => 70)) }}
                    <!--span class="add-icon"> {{ HTML::image('assets/img/Social-Icons/addthis500.png', 'addme!', array('width' => 70, 'height' =>70)) }} </span-->
                  </a>
                  <a href='' class="btn btn-social dcaftemp">
                    {{ HTML::image('assets/img/Social-Icons/twitter.png', 'click here to link to tw', array('width' => 70, 'height' => 70)) }}
                    <!--span class="add-icon"> {{ HTML::image('assets/img/Social-Icons/addthis500.png', 'addme!', array('width' => 70, 'height' =>70)) }} </span-->
                  </a>
                  <a href='' class="btn btn-social dcaftemp">
                    {{ HTML::image('assets/img/Social-Icons/googleplus-revised.png', 'click here to link to gp', array('width' => 70, 'height' => 70)) }}
                    <!--span class="add-icon"> {{ HTML::image('assets/img/Social-Icons/addthis500.png', 'addme!', array('width' => 70, 'height' =>70)) }} </span-->
                  </a>
                
                <hr>
                <p class="small">
                  <a href="#">Forgot your password?</a>
                </p>
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
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="logout-message">
            <img class="img-circle img-logout" src="img/profile-pic.jpg" alt="">
            <h3>
                <i class="fa fa-sign-out text-green"></i> Ready to go?
            </h3>
            <p>Select "Logout" below if you are ready<br> to end your current session.</p>
            <ul class="list-inline">
                <li>
                    <a href={{ URL::to('user/logout') }} class="btn btn-green">
                        <strong>Logout</strong>
                    </a>
                </li>
                <li>
                    <button class="logout_close btn btn-green">Cancel</button>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    {{ HTML::script('assets/js/plugins/popupoverlay/logout.js') }}
    <!-- HISRC Retina Images -->
    {{ HTML::script('assets/js/plugins/hisrc/hisrc.js') }}

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    {{ HTML::script('assets/js/plugins/messenger/messenger.min.js') }}
    {{ HTML::script('assets/js/plugins/messenger/messenger-theme-flat.js') }}
    <!-- Date Range Picker -->
    {{ HTML::script('assets/js/plugins/daterangepicker/moment.js') }}
    {{ HTML::script('assets/js/plugins/daterangepicker/daterangepicker.js') }}
    <!-- Morris Charts -->
    {{ HTML::script('assets/js/plugins/morris/raphael-2.1.0.min.js') }}
    {{ HTML::script('assets/js/plugins/morris/morris.js') }}
    <!-- Flot Charts -->
    {{ HTML::script('assets/js/plugins/flot/jquery.flot.js') }}
    {{ HTML::script('assets/js/plugins/flot/jquery.flot.resize.js') }}
    <!-- Sparkline Charts -->
    {{ HTML::script('assets/js/plugins/sparkline/jquery.sparkline.min.js') }}
    <!-- Moment.js -->
    {{ HTML::script('assets/js/plugins/moment/moment.min.js') }}
    <!-- jQuery Vector Map -->
    {{ HTML::script('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
    {{ HTML::script('assets/js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js') }}
    {{ HTML::script('assets/js/demo/map-demo-data.js') }}
    <!-- Easy Pie Chart -->
    {{ HTML::script('assets/js/plugins/easypiechart/jquery.easypiechart.min.js') }}
    <!-- DataTables -->
    {{ HTML::script('assets/js/plugins/datatables/jquery.dataTables.js') }}
    {{ HTML::script('assets/js/plugins/datatables/datatables-bs3.js') }}

    <!-- THEME SCRIPTS -->
    {{ HTML::script('assets/js/flex.js') }}
    {{ HTML::script('assets/js/demo/dashboard-demo.js') }}
	
	
	</body>
</html>
<!-- Localized -->