<?php
 
class ScrapeController extends BaseController
{
	/**
     * @return ScrapeController
     */
    public function __construct()
    {
        parent::__construct();
        // Apply the admin auth filter
        $this->beforeFilter('admin-auth');
    }
	
	public function getIndex() {
		echo "Scrape index page.";
	}
	
	public function getNode($node) {
		// Top 10 downloads that have at been downloaded at least 50 times
		$nodes = Node::where('downloads', '>', 50)
			->take(10)
			->orderBy('downloads', 'DESC')
			->get();
		// $nodes = Node::all();
		// $nodes = Node::whereBetween('downloads', array(20, 50))->get();
		
		/* foreach ($nodes as $node) {
			// Do stuff here
		} */
		
		$this_node = Node::find($node);
		if ($this_node) $data['this_url'] = $this_node->public_url;
		$data['nodes'] = $nodes;
		return View::make('node', $data);
	}
	
	/*public function getNode($node) {
		$data = array('node' => $node);
		return View::make('node', $data);
	}*/
	
	/*
	$nodes = Node::all();
	
	foreach ($nodes as $node) {
	  // Do stuff here
	}
	*/
 
}
?>