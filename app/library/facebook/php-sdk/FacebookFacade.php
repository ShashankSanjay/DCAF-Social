<?php namespace Facebook\phpSDK;
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
use \Illuminate\Support\Facades\Facade;

/**
 * calls to static methods on this class are
 * defered to the resolved instance of this class
 * 
 * @see \Facebook
 * 
 * thus,
 * FooBar::process();	// calls the process() method on the bound class from the $app object
 * 
 * is the same as:
 * $value = $app->make('foo')->process();
 * 
 * add an alias for this facade to the aliases array in the app/config/app.php
 */
class FacebookFacade extends Facade
{
	/**
     * Get the registered name of the component.
     * 
     * defines what to resolve from the container
     * 
     * @return string	name of the IoC binding
     */
    protected static function getFacadeAccessor() { return 'facebook'; }
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