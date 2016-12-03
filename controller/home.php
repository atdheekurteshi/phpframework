<?php 
 require 'model/User.php';
 require 'view/index.php';
 class Home extends User
 {
  
	 protected $name;
	 protected $mode;

	 public function index($name='atdhe',$mode='happy')
	 {
	 	 $this->name=$name;
	 	 $this->mode=$mode;
	 	 $user->setName($name);
	 	 $user->getName($name);

	 	 return view('home/index',[

	 	 	'name'=>$name,
	 	 	'mode'=>$mode

	 	 	]);
	 }
 }


 
?>