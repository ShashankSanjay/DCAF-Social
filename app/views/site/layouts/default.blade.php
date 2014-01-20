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

		<!-- Fonts -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic">
		<link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
		
		<!-- Bootstrap core CSS -->
		{{ HTML::style('assets/bootstrap/css/bootstrap.min-50686.css') }}

		<!-- Font Awesome CSS -->
		{{ HTML::style('assets/fonts/font-awesome/css/font-awesome.min-45579.css') }}

		<!-- Icomoon CSS -->
		{{ HTML::style('assets/fonts/icomoon/style.css') }}

		<!-- Animate CSS -->
		{{ HTML::style('assets/css/libs/animate.min.css') }}

		<!-- Bootstrap Switch -->
		{{ HTML::style('assets/css/libs/bootstrap-switch.css') }}

		<!-- Bootstrap Select -->
		{{ HTML::style('assets/css/libs/bootstrap-select.min.css') }}

		<!-- Bootstrap WYSIHTML5 -->
		{{ HTML::style('assets/css/libs/bootstrap-wysihtml5.css') }}

		<!-- jQuery Fullcalendar -->
		{{ HTML::style('assets/css/libs/fullcalendar.css') }}

		<!-- jVectorMap -->
		{{ HTML::style('assets/css/libs/jquery-jvectormap-1.2.2.css') }}

		<!-- Prism -->
		{{ HTML::style('assets/css/libs/prism.css') }}

		<!-- Custom styles for this template -->
		{{ HTML::style('assets/css/styler/style.css') }}
		{{ HTML::style('assets/css/demo.css') }}

		<!-- BuiltByBuffalo Stuff -->
		
		

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<!-- Outline -->
	@yield('outline')
	<!-- ./ Outline -->

		<!-- jQuery -->
		{{ HTML::script('assets/js/libs/jquery-1.10.2.min.js') }}

		<!-- jQuery UI -->
		{{ HTML::script('assets/js/libs/jquery-ui.min.js') }}

		<!-- Bootstrap core JavaScript -->
		{{ HTML::script('assets/bootstrap/js/bootstrap.min.js?v=3.0.2') }}

		<!-- jQuery Transit -->
		{{ HTML::script('assets/js/libs/jquery.transit.min.js?v=0.9.9') }}

		<!-- Bootstrap Switch -->
		{{ HTML::script('assets/js/libs/bootstrap-switch.js') }}

		<!-- Bootstrap Select -->
		{{ HTML::script('assets/js/libs/bootstrap-select.min.js') }}

		<!-- Bootstrap File -->
		{{ HTML::script('assets/js/libs/bootstrap-filestyle.js') }}

		{{ HTML::script('assets/js/libs/wysihtml5-0.3.0.min.js') }}

		<!-- Bootstrap WYSIHTML5 -->
		{{ HTML::script('assets/js/libs/bootstrap-wysihtml5.js') }}

		<!-- jQuery FullCalendar -->
		{{ HTML::script('assets/js/libs/fullcalendar.min.js') }}
		{{ HTML::script('assets/js/libs/gcal.js') }}

		<!-- Prism -->
		{{ HTML::script('assets/js/libs/prism.js') }}

		<!-- jVectorMap -->
		{{ HTML::script('assets/js/libs/jquery-jvectormap-1.2.2.min.js') }}
		{{ HTML::script('assets/js/libs/jquery-jvectormap-world-mill-en.js') }}

		<!-- Flot -->
		{{ HTML::script('assets/js/libs/jquery.flot.min.js') }}
		{{ HTML::script('assets/js/libs/jquery.flot.time.min.js') }}
		{{ HTML::script('assets/js/libs/jquery.flot.pie.min.js') }}
		{{ HTML::script('assets/js/libs/jquery.flot.resize.min.js') }}
		{{ HTML::script('assets/js/libs/jquery.flot.stack.min.js') }}
		{{ HTML::script('assets/js/libs/jquery.flot.tooltip.min.js') }}

		<!-- Sparkline -->
		{{ HTML::script('assets/js/libs/jquery.sparkline.min.js') }}

		<!-- Prism -->
		{{ HTML::script('assets/js/libs/jquery.sparkline.min.js') }}

		<!-- jQuery EqualHeights -->
		{{ HTML::script('assets/js/libs/jquery.equalheights.min.js') }}

		<!-- jQuery Nicescroll -->
		{{ HTML::script('assets/js/libs/jquery.nicescroll.min.js') }}

		<!-- Theme script -->
		{{ HTML::script('assets/js/styler/script.js') }}
		{{ HTML::script('assets/js/styler/sample_graphs.js') }}

		<!-- BBB Stuff -->
		{{ HTML::script('assets/js/bbb/mootools-coreacd8.js') }}
		{{ HTML::script('assets/js/bbb/mootools-moreacd8.js') }}
		{{ HTML::script('assets/js/bbb/pluginsacd8.js') }}
		{{ HTML::script('assets/js/bbb/mainacd8.js') }}
		{{ HTML::script('assets/js/bbb/raphaelacd8.js') }}
		{{ HTML::script('assets/js/bbb/infographicsacd8.js') }}

		<script type="text/javascript">
		  var GoSquared = {};
		  GoSquared.acct = "GSN-908393-H";
		  (function(w){
		    function gs(){
		      w._gstc_lt = +new Date;
		      var d = document, g = d.createElement("script");
		      g.type = "text/javascript";
		      g.src = "../d1l6p2sc9645hc.cloudfront.net/tracker.js";
		      var s = d.getElementsByTagName("script")[0];
		      s.parentNode.insertBefore(g, s);
		    }
		    w.addEventListener ?
		      w.addEventListener("load", gs, false) :
		      w.attachEvent("onload", gs);
		  })(window);
		</script>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-181114-3']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		
	</body>
</html>
<!-- Localized -->