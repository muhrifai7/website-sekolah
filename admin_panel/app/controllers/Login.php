<?php 

class Login extends Controller{

  public function index() {
    $data['title'] = 'Login page';
    $data['admin'] = $this->model('Auth_model')->getAdmin();
    $this->view('Auth/header',$data);
    $this->view('Auth/index',$data);
    $this->view('Auth/footer');
  }
  public function auth() {
  	if(isset($_POST['submit']) ){
  		$user = $_POST['email'];
  		var_dump($_POST);
  	}
    // $data['title'] = 'Login page';
    // $data['admin'] = $this->model('Auth_model')->getAdminId($_POST);
    // $this->view('Auth/header',$data);
    // $this->view('Auth/index',$data);
    // $this->view('Auth/footer');
  }

}


 ?>