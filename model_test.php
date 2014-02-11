<?php
/**
 * Testing Laravel's Eloquent ORM
 * @see https://github.com/illuminate/database
 * @see http://laravel.com/docs/database
 */
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'test_db',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
));

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Set the cache manager instance used by connections... (optional)
// $capsule->setCacheManager(...);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

/*
// Using The Schema Builder
Capsule::schema()->create('users', function($table)
{
    $table->increments('id')->unsigned();
    $table->string('email')->unique();
	$table->integer('votes')->unsigned();
    $table->timestamps();
});

// Using The Query Builder
$users = Capsule::table('users')->where('votes', '>', 100)->get();

var_dump($users);

// Other core methods may be accessed directly from the Capsule in the same manner as from the DB facade:
$results = Capsule::select('select * from users where id = ?', array(1));

var_dump($results);
*/

require 'app/models/UserProfile.php';
require 'app/models/DCAF_User.php';

$users = User::where('votes', '>', 1)->get();

var_dump($users);

?>