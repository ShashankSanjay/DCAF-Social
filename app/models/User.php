<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\Confide;
use Zizaco\Confide\ConfideEloquentRepository;
use Zizaco\Entrust\HasRole;
use Robbo\Presenter\PresentableInterface;
use Carbon\Carbon;

/**
 * User Model base class
 */
class User extends ConfideUser implements PresentableInterface
{
	use HasRole;
	
	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'users';
	
	public function getPresenter()
	{
		return new UserPresenter($this);
	}
	
	/**
	 * Get the date the user was created.
	 * 
	 * @return string
	 */
	public function joined()
	{
		return String::date(Carbon::createFromFormat('Y-n-j G:i:s', $this->created_at));
	}
	
	/**
	 * Save roles inputted from multiselect
	 * 
	 * @param $inputRoles
	 */
	public function saveRoles($inputRoles)
	{
		if (!empty($inputRoles)) {
			$this->roles()->sync($inputRoles);
		} else {
			$this->roles()->detach();
		}
	}
	
	/**
	 * Returns user's current role ids only.
	 * 
	 * @return array|bool
	 */
	public function currentRoleIds()
	{
		$roles = $this->roles;
		$roleIds = false;
		
		if (!empty($roles))
		{
			$roleIds = array();
			
			foreach ($roles as &$role) {
				$roleIds[] = $role->id;
			}
		}
		return $roleIds;
	}
	
	/**
	 * Redirect after auth.
	 * If ifValid is set to true it will redirect a logged in user.
	 * 
	 * @param $redirect
	 * @param bool $ifValid
	 * @return mixed
	 */
	public static function checkAuthAndRedirect($redirect, $ifValid=false)
	{
		// Get the user information
		$user = Auth::user();
		$redirectTo = false;
		
		if (empty($user->id) && ! $ifValid)     // Not logged in redirect, set session.
		{
			Session::put('loginRedirect', $redirect);
			$redirectTo = Redirect::to('user/login')
				->with( 'notice', Lang::get('user/user.login_first') );
		}
		elseif(!empty($user->id) && $ifValid)   // Valid user, we want to redirect.
		{
			$redirectTo = Redirect::to($redirect);
		}
		
		return array($user, $redirectTo);
	}
	
	public function currentUser()
	{
		return (new Confide(new ConfideEloquentRepository()))->user();
	}
}

?>