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
Route::model('user', 'User');
Route::model('comment', 'Comment');
Route::model('post', 'Post');
Route::model('role', 'Role');

/** ------------------------------------------
 *  Route constraint patterns
 *  ------------------------------------------
 */
Route::pattern('comment', '[0-9]+');
Route::pattern('post', '[0-9]+');
Route::pattern('user', '[0-9]+');
Route::pattern('role', '[0-9]+');
Route::pattern('token', '[0-9a-z]+');

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
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
});


/** ------------------------------------------
 *  User Routes
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
        //
        return View::make('site.dashboard.exampleboard');
    });

    Route::get('demographics', 'UserDashboardController@getDemographics');

    Route::get('rawr', function()
    {
        //
        $companies = [
                    'Pepsi' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram'],
                    'Coke' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram'],
                    'Samsung' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram'],
                    'Apple' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram'],
                    'Levi' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram'],
                    'American Apparel' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram'],
                    'Likeable Media' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram'],
                    'CPX' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram'],
                    'Hofstra' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram'],
                    'Long Beach Incubator' => ['0' => 'fa fa-facebook-square',
                                '1' => 'fa fa-twitter-square',
                                '2' => 'fa fa-google-plus-square',
                                '3' => 'fa fa-instagram']
                    ];
        
        return View::make('site.dashboard.exampleboard', compact('companies'));

    });
});


/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */

// User reset routes
Route::get('user/reset/{token}', 'UserController@getReset');
// User password reset
Route::post('user/reset/{token}', 'UserController@postReset');
//:: User Account Routes ::
Route::post('user/{user}/edit', 'UserController@postEdit');

//:: User Account Routes ::
Route::post('user/login', 'UserController@postLogin');

Route::get('user/profile', 'UserController@getProfile');

Route::get('user/confirmation', 'UserController@getConfirmation');

//after user clicks confirm link on email, redirected here. Then proceed to register DCAF with each network. THen go to dashboard
Route::get('user/registernetworks', 'UserController@registerNetworks');

Route::get('user/team', 'UserController@team');

Route::get('animate', function()
{
    //
    return View::make('theme.animate');
});

# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

Route::get('dcaf', 'DCAFController@index');

//:: Application Routes ::

# Filter for detect language
Route::when('contact-us','detectLang');

# Contact Us Static Page
Route::get('contact-us', function()
{
    // Return about us page
    return View::make('site/contact-us');
});

# Posts - Second to last set, match slug
Route::get('{postSlug}', 'BlogController@getView');
Route::post('{postSlug}', 'BlogController@postView');

# Index Page - Last route, no matches
Route::get('/', array('before' => 'auth','uses' => 'UserController@getIndex'));


App::missing(function($exception)
{
    return Response::view('theme.404', array(), 404);
});