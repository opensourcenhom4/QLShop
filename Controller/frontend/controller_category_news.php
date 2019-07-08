<?php 
	class controller_category_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay tat cac cac ban ghi
			$arr = $this->model->get_all("select * from tbl_news order by pk_news_id desc");
			//load view
			include "view/frontend/view_category_news.php";
		}
	}
	new controller_category_news();
 ?>