<?php namespace ShashankSanjay\UserProfileInterface;

use Illuminate\Support\ServiceProvider;

class UserProfileInterfaceServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('ShashankSanjay/UserProfileInterface');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['UserProfileInterface'] = $this->app->share(function($app)
        {
            return new UserProfileInterface;
        });
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('UserProfileInterface');
	}

}