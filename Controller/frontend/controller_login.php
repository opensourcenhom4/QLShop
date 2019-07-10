<?php 
	class controller_login{
		//tao bien model
		public $model;
		public function __construct(){
			//khoi tao object cua class model, gan vao bien model
			$this->model = new model();
			//----------------
			//neu user an nut submit
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$c_email = $_POST["c_email"];
				$c_password = $_POST["c_password"];
				//kiem tra dang nhap
				$check = $this->model->get_a_record("select email, password, hovaten from tbl_customer where email='$c_email'");
				if(isset($check->c_email)){
					if($check->c_password == md5($c_password)){
						$name= $check->c_fullname;
						//gan vao session
						$_SESSION["c_email"] = $c_email;
						$_SESSION["c_fullname"] = $name;
						$_SESSION["c_password"] = $c_password;
						//quay tro lai trang admin
						header("location:index.php");
					}
				}

			}
			//----------------
			//load view
			include "view/frontend/view_login.php";
		}
	}
	new controller_login();
 ?>