<?php 
	class controller_login{
		//tao bien model
		public $model;
		public function __construct(){
			//khoi tao object cua class model, gan vao bien model
			$this->model = new model();
			//----------------
			//neu user an nut submit
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			switch($act){
				case "login":
					$form_action = "index.php?controller=login&act=do_login";
				break;
				case "do_login":
					$email = $_POST["email"];
				$password = $_POST["password"];
				//kiem tra dang nhap
				$check = $this->model->get_a_record("select * from tbl_customer where email='$email'");
				if(isset($check->email)){
					if($check->password == md5($password)){
						//gan vao session
						$_SESSION["email"] = $email;
					}
				}
				header("location:index.php");
			//----------------
				break;
		}
			//load view
			include "view/frontend/view_login.php";
		}
	}
	new controller_login();
 ?>