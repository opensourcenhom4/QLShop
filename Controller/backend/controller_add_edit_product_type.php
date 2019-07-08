<?php 
	class controller_add_edit_product_type{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay bien act tu url
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_product_type&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_product_type where pk_product_type_id=$id");
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_product_type set c_name='$c_name' where pk_product_type_id=$id");
					//-----------
					header("location:admin.php?controller=product_type");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_product_type&act=do_add";					
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					//insert ban ghi
					$this->model->execute("insert into tbl_product_type(c_name) values('$c_name')");
					header("location:admin.php?controller=product_type");
				break;
			}
			//load view
			include "view/backend/view_add_edit_product_type.php";
		}
	}
	new controller_add_edit_product_type();
 ?>