<?php 
class App{
	public $controller='home';
	public $method='index';
	
	public $params=[];
	public function __construct(){
	  
       $url=$this->parsUrl();
       print_r($url);
       if(file_exists('/../app/controllers/'.$url[0].'.php'))
       {
       	  $this->controller=$url[0];
       	  unset($url[0]);
       }
       require_once '/../app/controllers/'.$this->controller.'.php';
       $this->controller=new $this->controller;
       if(isset($url[1]))
       {
	       if(method_exists($this->controller,$url[1]))
	       {
	       	 echo 'controller_output => ';
	       }
       }
       	
       $this->params=$url ? array_values($url) :[];
       call_user_func([$this->controller,$this->method],$this->params);
	   
	}
	public function parsUrl(){
		if(isset($_GET['url']))
		{
			return $url=explode('/', filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
		}
	}
}

?>