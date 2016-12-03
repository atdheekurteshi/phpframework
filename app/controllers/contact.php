<?php 

/**
 *
 *@Home Controller
 *
 */
class Contact extends Controller{

	/**
	 *
	 *@Contact Index Controller
	 *
	 */

	public function index($name=''){


	   $user=$this->model('User');
	   $user->name=$name;
	   echo implode(' ',$user->name);

	}
}

?>