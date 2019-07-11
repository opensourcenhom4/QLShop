<?php 
	class controller_changepass{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay bien act tu url
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			switch($act){
				case "change":
					$form_action = "admin.php?controller=changepass&act=do_change";					
				break;
				case "do_change":
					$c_email = $_SESSION["c_email"];
					$pass = $_POST["c_pass"];
					$c_newpass = $_POST["c_newpass"];
					$c_cofpass = $_POST["c_cofpass"];
					if ($c_newpass == $c_cofpass) {
						# code...
						$pass = md5($c_cofpass);
						$_SESSION["c_password"] = $c_cofpass;
				}
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_user set c_password='$pass' where c_email = '$c_email' ");
					//quay tro lai trang admin
					header("location:admin.php");
				break;
			}
		//load view
			include "view/backend/view_changepass.php";
		}
	}
	new controller_changepass();
 ?>