<?php
/**
 * abstract base class for fetching data from a provider
 */
class FacebookRetriever
{
	public static function getPageID($consumer) 
	{
		$response = $consumer->request('/me/accounts');
		return json_decode($response);
	}
	
	/*
	public static function getPages($consumer, $pageIDs)
	{
		//
		$batches = array();
		foreach ($pageIDs as $key => $page) {
			//make batch
			$batches[$key] = '{"method":"GET", "relative_url":"me/' . $page . '?fields=id,access_token,likes,admins,albums,conversations,events,feed,insights,links,locations,posts,questions,statuses,tagged,videos"}';
		}
		return $batches;
	}
	*/

	public static function batchCall($pageIDs, $access_token)
	{
		/**
		 * write in the curl functionality per this spec: https://developers.facebook.com/docs/graph-api/making-multiple-requests/#simple
		 * Also, in between each $batches value, make sure to put in a comma
		 */
		
		$ch = curl_init();
		
		foreach ($pageIDs as $key => $page)
		{
			// set the url, number of POST vars, POST data
			curl_setopt($ch, CURLOPT_URL, $base_url);
			// curl_setopt($ch, CURLOPT_FILE, $fp);
			// curl_setopt($ch, CURLOPT_HEADER, 0);
			
			$requestFields = array(
				'batch' => '[{"method":"GET", "relative_url":"' . $data[0]['id'] . '?fields=id,access_token,likes,admins,albums,conversations,events,feed,insights,links,locations,posts,questions,statuses,tagged,videos"}]',
				'access_token' => $data[0]['access_token'],
				);

			$requestBody = http_build_query($requestFields);
			curl_setopt($ch, CURLOPT_URL, $base_url);
			curl_setopt($ch, CURLOPT_POST, TRUE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);

			$r = curl_exec($ch);

			$result = json_decode($r, true);
			echo '<pre>';
			//var_dump($result);
			//print_r($result[0]['body']);

			$e = json_decode($result[0]['body'], true);
			print_r($e);
			echo '</pre>';
		}
		curl_close($ch);
		fclose($fp);
	}

	public static function getUserInfo($consumer, $users)
	{
		//
		$batches = array();
		foreach ($users as $key => $value) {
			$batches($key) = '{"method":"GET", "relative_url":"' . $value . '"}';
		}
	}
}
?>