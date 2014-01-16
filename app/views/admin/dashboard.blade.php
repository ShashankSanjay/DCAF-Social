@extends('admin.layouts.default')

{{-- Content --}}
@section('content')
<h1>heyo</h1>

<?php
	$base_url = "http://shashanksanjay.com/socialapp";
	
	/**
	 * Fix generated service authorization URLs
	 * 
	 * see http://ch2.php.net/language.oop5.typehinting
	 * for workaround to use "string" typehinting
	 * 
	 * @param	string	$url	service redirect URL
	 */
	function fix_url_base($url) {
		global $base_url;
		$base_url = "http://shashanksanjay.com/socialapp";
		
		$url_parts = parse_url($url);
		$path      = isset($url_parts['path']) ? $url_parts['path'] : '';
		$query     = isset($url_parts['query']) ? '?' . $url_parts['query'] : '';
		$fragment  = isset($url_parts['fragment']) ? '#' . $url_parts['fragment'] : '';
		
		return $base_url.$path.$query.$fragment;
	}		
?>


<a href="<?php echo fix_url_base(OAuth::getAuthorizeUrl('facebook')->redirect($base_url.'/admin')->url->getUrl()); ?>">Login with facebook<br></a>
<a href="<?php echo fix_url_base(OAuth::getAuthorizeUrl('twitter')->redirect($base_url.'/admin')->url->getUrl()); ?>">Login with twitter<br></a>
<a href="<?php echo fix_url_base(OAuth::getAuthorizeUrl('google')->redirect($base_url.'/admin')->url->getUrl()); ?>">Login with google<br></a>

@stop


