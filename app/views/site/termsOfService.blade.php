<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="social, analytics, social analytics, facebook, twitter, google plus" />
  <meta name="author" content="DCAF-Social" />
  <meta name="description" content="This is a social network analytics platform" />

  <title>@section('title')
      Terms Of Service
      @show</title> 

  <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
  {{ HTML::style('assets/css/plugins/pace/pace.css') }}
        {{ HTML::style('assets/js/plugins/pace/pace.js') }}
  <!-- GLOBAL STYLES - Include these on every page. -->
  {{ HTML::style('assets/css/plugins/bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('assets/fonts.googleapis.com/css3ef8.css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic') }}
        {{ HTML::style('assets/fonts.googleapis.com/css5c84.css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') }}
        {{ HTML::style('assets/icons/font-awesome/css/font-awesome.min.css') }}
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
  <!-- begin MAIN PAGE CONTENT -->
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
        <div class="tile light-gray text-left">
          <div class="text-dark-blue">
          <h2 class="text-dark-blue text-center">Dcaf-Social Terms of Service ("Agreement")</h2>
          <br>
<p>This Agreement was last modified on March 28, 2014.</p>

<p>Please read these Terms of Service ("Agreement", "Terms of Service") carefully before using www.dcaf-social.com ("the Site") operated by DCAF ("us", "we", or "our"). This Agreement sets forth the legally binding terms and conditions for your use of the Site at www.dcaf-social.com.</p>
<p>By accessing or using the Site in any manner, including, but not limited to, visiting or browsing the Site or contributing content or other materials to the Site, you agree to be bound by these Terms of Service. Capitalized terms are defined in this Agreement.</p>

<p><strong>Intellectual Property</strong><br />The Site and its original content, features and functionality are owned by DCAF and are protected by international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws.</p>

<p><strong>Termination</strong><br />We may terminate your access to the Site, without cause or notice, which may result in the forfeiture and destruction of all information associated with you. All provisions of this Agreement that by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.</p>

<p><strong>Links To Other Sites</strong><br />Our Site may contain links to third-party sites that are not owned or controlled by DCAF.</p>
<p>DCAF has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party sites or services. We strongly advise you to read the terms and conditions and privacy policy of any third-party site that you visit.</p>

<p><strong>Governing Law</strong><br />This Agreement (and any further rules, polices, or guidelines incorporated by reference) shall be governed and construed in accordance with the laws of New York, New York, without giving effect to any principles of conflicts of law.</p>

<p><strong>Changes To This Agreement</strong><br />We reserve the right, at our sole discretion, to modify or replace these Terms of Service by posting the updated terms on the Site. Your continued use of the Site after any such changes constitutes your acceptance of the new Terms of Service.</p>
<p>Please review this Agreement periodically for changes. If you do not agree to any of this Agreement or any changes to this Agreement, do not use, access or continue to access the Site or discontinue any use of the Site immediately.</p>

<p><strong>Contact Us</strong><br />If you have any questions about this Agreement, please contact us.</p>

      </div>
      </div>
    </div>
  </div>
</div>

<!-- end MAIN PAGE CONTENT -->

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