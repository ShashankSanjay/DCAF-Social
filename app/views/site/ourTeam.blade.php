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
        <div class="col-xs-12 col-sm-6 col-md-8 col-md-offset-2">
          <div class="login-banner text-center">
            <h1>
              <a href={{ URL::to('/') }} style="color: #fff !important;">
              {{ HTML::image('favicon.ico', 'dcaf', array('width' => 70, 'height' => 70)) }}DCAF-Social 
              </a>
            </h1>
          </div>
          <!--div class="portlet portlet-green"-->
          <div class="tile light-gray">
          	<style type="text/css">
          		h4.dcaf {
          			color: #34495e !important;
          		}

              .dcaf-margin {
                overflow-wrap: break-word;
              }
          	</style>
          	<h4 class="dcaf text-center"> Meet our team!</h4>
            <hr>
            <!--div class="dcafcolumn"-->
              <!-- Left Column -->
                <div class="row dcaf-margin text-dark-blue">
                  <div class="col-xs-3 col-md-2-pull-3 text-center">
                    {{ HTML::image('assets/img/profile-pic.jpg', 'dcaf', array('width' => 100, 'height' => 100, 'class' => 'img-circle')) }}
                  </div>
                                  
                  <div class="col-xs-9 col-md-6-pull-9" style="text-align: justify">
                    <p>Spent 2001-2008 working on Yugos in the government sector. Gifted in supervising the production of pubic lice in Ocean City, NJ. Spent 2001-2006 getting my feet wet with wooden horses for no pay. Set new standards for donating etch-a-sketches in Phoenix, AZ. Uniquely-equipped for consulting about love for the government. In 2009 I was short selling teddy bears in Libya.</p>
                  </div>
                
                </div>
                <br>
                <div class="row dcaf-margin text-dark-blue">
                  <div class="col-xs-3 col-md-2-pull-3 text-center">
                    {{ HTML::image('assets/img/profile-pic.jpg', 'dcaf', array('width' => 100, 'height' => 100, 'class' => 'img-circle')) }}
                  </div>
                                  
                  <div class="col-xs-9 col-md-6-pull-9" style="text-align: justify">
                    What gets me going now is training chess sets in Cuba. At the moment I'm buying and selling wooden tops in Mexico. Spent several years creating marketing channels for bathtub gin in Gainesville, FL. Practiced in the art of exporting glucose with no outside help. Managed a small team analyzing karma in Nigeria. Set new standards for working with squirt guns in Fort Lauderdale, FL.
                  </div>
                
                </div>
                <br>
                <div class="row dcaf-margin text-dark-blue">
                  <div class="col-xs-3 col-md-2-pull-3 text-center">
                    {{ HTML::image('assets/img/profile-pic.jpg', 'dcaf', array('width' => 100, 'height' => 100, 'class' => 'img-circle')) }}
                  </div>
                                  
                  <div class="col-xs-9 col-md-6-pull-9" style="text-align: justify">
                    Had some great experience working on dust in Africa. Spent several years researching crickets in Africa. Spent several years importing tar in New York, NY. Spent the 80's implementing frisbees in Gainesville, FL. Had moderate success analyzing cabbage in the UK. Spent the better part of the 90's building bongos in Libya.
                  </div>
                
                </div>
              <!--/div-->
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