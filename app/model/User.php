<?php 
class User {

	protected $name;

	public function setName($name)
	{
		$this->name=$name;
	}
	public function getName(){
		echo $this->name;
	}

}

?>