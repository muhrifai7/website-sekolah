<?php  

class App {
	// bikin property untuk meentukan controler dan method default
	protected $controller = 'Login';
	protected $method = 'index';
	protected $params = [];

	public function __construct() 
	{
		 $url = $this->parseUrl();
		 // controllers
		 if(file_exists('../app/controllers/' . $url[0] . '.php')) { 
		 	$this->controller = $url[0];
		 	unset($url[0]);
		 	
		 }
		 // require file baru agar bisa manggil method/[1] untuk dijadikan default
		 require '../app/controllers/'. $this->controller . '.php';
		 $this->controller = new $this->controller;


		 // method
		  if(isset($url[1])) {
		  	
		  	if( method_exists($this->controller, $url[1])) {

		  		$this->method = $url[1];

		  		unset($url[1]);
		  	}

		  }

		  if( !empty($url) ) {
		  	// ambil data yg diketikan 
		  	$this->params = array_values($url);
		  }
		  // panggil atau jalankan controller dan method serta kirimkan params jika ada
		  call_user_func_array([$this->controller , $this->method], $this->params);

	}
	   // rapikan url
	public function parseUrl() 
	{
		if( isset ($_GET['url']) ) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}



