<?php
/**
 * abstract base class for fetching data from a provider
 */
class FacebookRetrieve
{
	public function getPageID($consumer) 
	{
		$response = $consumer->request('/me/accounts');
		return json_decode($response);
	}

	public function getPages($consumer, $pageIDs)
	{
		//
		$batches = array();
		foreach ($pageIDs as $key => $page) {
			//make batch
			$batches[$key] = '{"method":"GET", "relative_url":"me/' . $page . '?fields=id,access_token,likes,admins,albums,conversations,events,feed,insights,links,locations,posts,questions,statuses,tagged,videos' . '"}';
		}
		return $batches;
	}

	public function batchCall($batches)
	{
		/*	write in the curl functionality per this spec: https://developers.facebook.com/docs/graph-api/making-multiple-requests/#simple
		*	Also, in between each $batches value, make sure to put in a comma
		*/

	}

	public function getUserInfo($consumer, $users)
	{
		//
		$batches = array();
		foreach ($users as $key => $value) {
			$batches($key) = '{"method":"GET", "relative_url":"' . $value . '"}';
		}
	}
}

?>