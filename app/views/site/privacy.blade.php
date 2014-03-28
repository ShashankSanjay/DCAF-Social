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
      Privacy Policy
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
        <div class="tile light-gray text-center">
          <h2 class="text-dark-blue">Privacy Policy</h2>

          <br>
          <div class="text-dark-blue text-left">
          <p>
            <strong>What information do we collect? </strong>
          </p>
<p>We collect information from you when you register on our site. </p>

<p>When ordering or registering on our site, as appropriate, you may be asked to enter your: name, e-mail address or credit card information.
</p>
<p><strong>What do we use your information for? </strong></p>

<p>Any of the information we collect from you may be used in one of the following ways: </p>

<p style="margin-left: 1em;"> To personalize your experience
(your information helps us to better respond to your individual needs)</p>

<p style="margin-left: 1em;"> To improve our website
(we continually strive to improve our website offerings based on the information and feedback we receive from you)</p>

<p style="margin-left: 1em;"> To improve customer service
(your information helps us to more effectively respond to your customer service requests and support needs)</p>

<p style="margin-left: 1em;"> To process transactions
Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express purpose of delivering the purchased product or service requested.</p>

<p style="margin-left: 1em;"> To administer a contest, promotion, survey or other site feature</p>


<p style="margin-left: 1em;"> To send periodic emails
The email address you provide for order processing, may be used to send you information and updates pertaining to your order, in addition to receiving occasional company news, updates, related product or service information, etc.
Note: If at any time you would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email.</p>



<p><strong>Do we use cookies? </strong></p>

<p>Yes (Cookies are small files that a site or its service provider transfers to your computers hard drive through your Web browser (if you allow) that enables the sites or service providers systems to recognize your browser and capture and remember certain information</p>

<p>We use cookies to help us remember and process the items in your shopping cart, understand and save your preferences for future visits and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</p>

<p><strong>Do we disclose any information to outside parties? </strong></p>

<p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>

<p><strong>Third party links </strong></p>

<p>Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</p>

<p><strong>Online Privacy Policy Only </strong></p>

<p>This online privacy policy applies only to information collected through our website and not to information collected offline.</p>

<p><strong>Terms and Conditions </strong></p>

<p>Please also visit our Terms and Conditions section establishing the use, disclaimers, and limitations of liability governing the use of our website at http://www.dcaf-social/termsOfUse</p>

<p><strong>Your Consent </strong></p>

<p>By using our site, you consent to our websites privacy policy.</p>

<p><strong>Changes to our Privacy Policy </strong></p>

<p>If we decide to change our privacy policy, we will post those changes on this page, send an email notifying you of any changes, and/or update the Privacy Policy modification date below. </p>

<p><strong>Contacting Us </strong></p>

<p>If there are any questions regarding this privacy policy you may contact us using the information below. </p>

<p>www.dcaf-social.com</p>
<p>social@dcaf-social.com</p>
        </div>
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

  
</html>
<!-- Localized -->