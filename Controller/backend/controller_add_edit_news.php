<?php 
	class controller_add_edit_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay bien act tu url
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_news&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_news where pk_news_id=$id");
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_news set c_name='$c_name',c_description='$c_description' where pk_news_id=$id");
					//-----------
					header("location:admin.php?controller=news");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_news&act=do_add";					
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					//insert ban ghi
					$this->model->execute("insert into tbl_news(c_name,c_description) values('$c_name','$c_description')");
					header("location:admin.php?controller=news");
				break;
			}
			//load view
			include "view/backend/view_add_edit_news.php";
		}
	}
	new controller_add_edit_news();
 ?>