@extends('layouts/layout')

@section('content')

	<div class="jumbotron">
	    <h1>Facebook login example</h1>
	    <blockquote>
	    	<p>Heyo</p>
	    </blockquote>
	    <p class="text-center">
	      <a class="btn btn-lg btn-custom-facebook" href="{{url('login/fb')}}"><i class="icon-facebook"></i> Login with Facebook</a>
		  <a class="btn btn-lg btn-custom-twitter" href="{{url('login/twitter')}}"><i class="icon-twitter"></i> Login with Twitter</a>
		  <a class="btn btn-lg btn-custom-google" href="{{url('login/google')}}"><i class="icon-google-plus"></i> Login with Google +</a>
	      <a class="btn btn-lg btn-custom-instagram" href="{{url('login/tumblr')}}"><i class="icon-tumblr"></i> Login with Tumblr</a>
		  <a href="<?= OAuth::login('facebook'); ?>">Login with Facebook</a>
   	      <a href="<?= OAuth::authorize('tumblr')->redirect('http://shashanksanjay.com/socialapp/login/tumblr') ?>">Login with tumblr</a>

	    </p>
	</div>

@stop


