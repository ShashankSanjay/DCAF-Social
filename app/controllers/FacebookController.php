<?php



class FacebookController extends \BaseController {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()

	{

		//

	}



	public function login()

	{

		$fb = new FacebookOauth(Config::get('facebookOauth.facebook'));

		if (!Input::has('code')) {

			$fb->authorize();

		} else {

			try {

				$token = $fb->getAccessToken('authorization_code', array('code' => Input::get('code')));

				try {

					/** /

		            // We got an access token, let's now get the user's details

		            $userDetails = $fb->getUserDetails($token);



		            foreach ($userDetails as $attribute => $value) {

		                var_dump($attribute, $value) . PHP_EOL . PHP_EOL;

		            /**/

		            $facebook = new Facebook(Config::get('facebook.facebook'));

		            $facebook->setAccessToken($token->accessToken);

		            $userId = $facebook->getUser();

		            $user_profile = $facebook->api('/me');

		            var_dump($user_profile);

		            

		        } catch (Exception $e) {

		        	return $e;

		        }

	        } catch (Exception $e) {

		    	return 'Unable to get access token';

		    }

		}

	}

}



