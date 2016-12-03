<?php 

/**
 *
 *@Home Controller
 *
 */
class Home extends Controller{

	/**
	 *
	 *@Home Index Controller
	 *
	 */

	public function index(){


	   
	   $this->view('home/index','World');
	 
	}
}

?>