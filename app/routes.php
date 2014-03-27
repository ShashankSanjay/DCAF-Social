<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
// Route::model('user', 'DcafUser');
Route::model('user', 'DcafUser', function()
{
    throw new NotFoundException;
});
Route::model('comment', 'Comment');
Route::model('post', 'Post');
Route::model('role', 'DcafRole');
Route::bind('job', function($value, $route) {
    return Job::findByIdOrName($value);
});

/** ------------------------------------------
 *  Route constraint patterns
 *  ------------------------------------------
 */
Route::pattern('comment', '[0-9]+');
Route::pattern('post', '[0-9]+');
Route::pattern('user', '[0-9]+');
Route::pattern('role', '[0-9]+');
Route::pattern('token', '[0-9a-z]+');

Route::get('/cron/run/test', function () {
    Cron::add('example1', '* * * * *', function() {
        // Do some crazy things every minute
        return null;
    });
    Cron::add('example2', '*/2 * * * *', function() {
        // Do some crazy things every two minutes
        return null;
    });
    $report = Cron::run();
    return $report;
});

// Route::get('/jobs/{job}/run', 'SocialRetrieverController@getAllUserData');
Route::get('/jobs/run', 'SocialRetrieverController@getAllUserData');

Route::get('test', 'OnDemandController@index');

Route::get('privacy', function()
{
    return View::make('site.privacy');
});

Route::get('termsOfService', function()
{
    return View::make('site.termsOfService');
});

/*
Route::get('/cron/run/test2', function() {
    // dispatch the request to the method on the controller
    // return Route::getControllerDispatcher()->dispatch(Route::current();, Route::getCurrentRequest(), "SocialRetrieverController", "getShow");
    
    $generator = new ControllerGenerator(App::files);
    $cmd = new MakeControllerCommand($generator, App::path.'/controllers');
    // $cmd->generateController();
    // $cmd->generator->make($cmd->input->getArgument('name'), $cmd->getPath(), $cmd->getBuildOptions());
    $path = $cmd->laravel['path.base'].'/'.$cmd->input->getOption('path');
    $options = array('only' => array(), 'except' => array());
    $generator->make("SocialRetrieverController", $path, $options)
    
    // return View::make('site/contact-us');
});
*/

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */
Route::group(array('prefix' => 'admin', 'before' => array('auth', 'admin')), function()
{
    # Comment Management
    Route::get('comments/{comment}/edit', 'AdminCommentsController@getEdit');
    Route::post('comments/{comment}/edit', 'AdminCommentsController@postEdit');
    Route::get('comments/{comment}/delete', 'AdminCommentsController@getDelete');
    Route::post('comments/{comment}/delete', 'AdminCommentsController@postDelete');
    Route::controller('comments', 'AdminCommentsController');

    # Blog Management
    Route::get('blogs/{post}/show', 'AdminBlogsController@getShow');
    Route::get('blogs/{post}/edit', 'AdminBlogsController@getEdit');
    Route::post('blogs/{post}/edit', 'AdminBlogsController@postEdit');
    Route::get('blogs/{post}/delete', 'AdminBlogsController@getDelete');
    Route::post('blogs/{post}/delete', 'AdminBlogsController@postDelete');
    Route::controller('blogs', 'AdminBlogsController');

    # User Management
    Route::get('users/{user}/show', 'AdminUsersController@getShow');
    Route::get('users/{user}/edit', 'AdminUsersController@getEdit');
    Route::post('users/{user}/edit', 'AdminUsersController@postEdit');
    Route::get('users/{user}/delete', 'AdminUsersController@getDelete');
    Route::post('users/{user}/delete', 'AdminUsersController@postDelete');
    Route::controller('users', 'AdminUsersController');

    # User Role Management
    Route::get('roles/{role}/show', 'AdminRolesController@getShow');
    Route::get('roles/{role}/edit', 'AdminRolesController@getEdit');
    Route::post('roles/{role}/edit', 'AdminRolesController@postEdit');
    Route::get('roles/{role}/delete', 'AdminRolesController@getDelete');
    Route::post('roles/{role}/delete', 'AdminRolesController@postDelete');
    Route::controller('roles', 'AdminRolesController');

    # Admin Dashboard
    Route::controller('/', 'AdminDashboardController');
	
	Route::controller('scrape', 'ScrapeController');
});


/** ------------------------------------------
 *  User Frontend Routes
 *  ------------------------------------------
 */

Route::group(array('before' => 'auth'), function()
{
    Route::get('messages', 'UserDashboardController@getMessages');

    Route::get('settings', 'UserDashboardController@getSettings');

    Route::get('charts', function()
    {
        return View::make('theme.charts');
    });

    Route::get('panels', function()
    {
        return View::make('theme.panels');
    });

    Route::get('exampleBoard', function()
    {
        return View::make('site.dashboard.exampleboard');
        //return View::make('site.onePage');
    });
    
    Route::get('demographics', 'UserDashboardController@getDemographics');
});

// Route::get('user', 'UserController@getIndex');
// Route::post('user', 'UserController@postIndex');

// User password reset routes
Route::get('user/reset/{token}', 'UserController@getReset');
Route::post('user/reset/{token}', 'UserController@postReset');

//:: User Account Routes ::
Route::post('user/{user}/edit', 'UserController@postEdit');

Route::get('user/login', 'UserController@getLogin');
Route::post('user/login', 'UserController@postLogin');

Route::get('user/confirmation', 'UserController@getConfirmation');

Route::get('user/create', 'UserController@getCreate');

Route::get('user/profile', 'UserController@getProfile');

// Network Login/Registration
// after user clicks confirm link on email, redirected here. Then proceed to register DCAF with each network. Then go to dashboard
Route::get('user/registernetworks', 'UserController@registerNetworks');
Route::post('user/registernetworks', 'UserController@postNetworks');

// configure first time stuff
Route::get('user/firstTime', 'UserController@firstTime');

Route::get('user/team', 'UserController@team');

// User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

//:: Application Routes ::

// Filter for detect language
Route::when('contact-us', 'detectLang');

// Contact Us Static Page
Route::get('contact-us', function()
{
    // Return about us page
    return View::make('site/contact-us');
});

// Posts - Second to last set, match slug
Route::get('{postSlug}', 'BlogController@getView');
Route::post('{postSlug}', 'BlogController@postView');

// Index Page - Last route, no matches
Route::any('/', array('before' => 'auth','uses' => 'UserController@getIndex'));
/* Route::get('/', function()  {
    var_dump(Auth::user());
    die();
}); */

App::missing(function($exception)
{
    return Response::view('error.404', array(), 404);
});