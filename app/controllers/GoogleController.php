<?php

class GoogleController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		$google = new Google(Config::get('google.google'));
		if (!Input::has('code')) {
			$google->authorize();
		} else {
			try {
				$token = $google->getAccessToken('authorization_code', array('code' => Input::get('code')));
				try {

		            // We got an access token, let's now get the user's details
		            $userDetails = $google->getUserDetails($token);

		            foreach ($userDetails as $attribute => $value) {
		                var_dump($attribute, $value) . PHP_EOL . PHP_EOL;
		            }
		        } catch (Exception $e) {
		        	return $e;
		        }
	        } catch (Exception $e) {
		    	return 'Unable to get access token';
		    }
		}
	}
}

?>