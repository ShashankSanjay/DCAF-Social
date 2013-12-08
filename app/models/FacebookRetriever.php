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
		
		$ch = curl_init('https://graph.facebook.com/');
		
		foreach ($pageIDs as $key => $page)
		{
			$fp = fopen('', 'w');
			
			// set the url, number of POST vars, POST data
			// curl_setopt($ch, CURLOPT_URL, $url);
			// curl_setopt($ch, CURLOPT_FILE, $fp);
			// curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_POST, 2);
			curl_setopt($ch, CURLOPT_POSTFIELDS, '/?access_token=' . $access_token . '&batch=[{"method":"GET", "relative_url":"me/' . $page . '?fields=id,access_token,likes,admins,albums,conversations,events,feed,insights,links,locations,posts,questions,statuses,tagged,videos"}]');
			
			$result = curl_exec($ch);
			echo '<pre>' . $result . '</pre>';
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