<?php 
	class controller_register{
		//tao bien model
		public $model;
		public function __construct(){
			//khoi tao object cua class model, gan vao bien model
			$this->model = new model();
			//----------------
			//neu user an nut submit
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			switch($act){
				case "register":
					$form_action = "index.php?controller=register&act=do_register";
				break;
				case "do_register":
				$hovaten = $_POST["hovaten"];
				$email = $_POST["email"];
				$dienthoai = $_POST["dienthoai"];
				$diachi = $_POST["diachi"];
				$password = $_POST["password"];
				$password = md5($password);
				//kiem tra dang nhap
				$check = $this->model->get_a_record("select email, password from tbl_customer where email='$email'");
				if(isset($check->email) == false){
					$_SESSION["email"] = $email;
					//insert ban ghi
					$this->model->execute("insert into tbl_customer(hovaten,email,password,dienthoai,diachi) values('$hovaten','$email','$password','$dienthoai','$diachi')");
					echo "<script>
								location.href='index.php';
							</script>";
				}
				else{
					echo "<script>
							alert ('Đã có tài khoản này');
							location.href='index.php?controller=login&act=login';
						</script>";
				}
			//----------------
				break;
		}
			//load view
			include "view/frontend/view_register.php";
		}
	}
	new controller_register();
 ?>