<?php namespace Facebook\phpSDK;

// require_once "facebook.php";

/**
 * Note on Auto-Loading Aliases (Laravel issue #1861)
 * 
 * As documented in Laravel issue #1861 (PHP Bug #61422), due to the resolution of
 * PHP Bug #39003, PHP 5.2+ does not autoload classes when referenced under an alias
 * in a type hint. In other words, PHP does not attempt to autoload classes in the
 * aliases array when referenced from type-hints. As a result, when a type-hinted class
 * is refernced from a different namespace, it must be declared via a use statement.
 * For example, if \ServiceWrapper\ApiTimeoutException is aliased to ApiTimeoutException,
 * a catch(ApiTimeoutException $e) outside of the namespace \ServiceWrapper will never
 * catch the exception, even if one is thrown.
 */
use Illuminate\Support\ServiceProvider;

class FacebookServiceProvider extends ServiceProvider
{
	/**
     * Bootstrap the application events.
     * 
     * @override ServiceProvider::boot()
     * @return void
     */
    public function boot()
    {
    	// register the package's component namespaces
		// $this->package('facebook/php-sdk');
    }
	
	/**
     * Register the service provider.
     * 
     * @implements ServiceProvider::register()
     * @return void
     */
    public function register()
    {
    	/**
		 * Bind the shared type to its IoC container
		 * 
		 * retrieved ("resolved") with:
		 * $value = App::make('facebook');
		 * 
		 * to binding another instance into the IoC container
		 * App::instance('facebook', $facebook);
		 */
		// $this->app->singleton('facebook', function()
		// $this->app->bind('facebook', function()
		$this->app['facebook'] = $this->app->share(function($app)
		{
		    return new \Facebook(array(
				'appId'  => '344617158898614',
				'secret' => '6dc8ac871858b34798bc2488200e503d'
		    ));
		});
    }
}

/**
 * When a type is not bound in the container,
 * it will use PHP's Reflection facilities to
 * inspect the class and read the constructor's
 * type-hints. Using this information, the
 * container can automatically build an instance
 * of the class.
 */

// $facebook = App::make('Facebook');
// $user_info1 = $facebook->api('/me');
// $user_info2 = Facebook::api('/me');
?>