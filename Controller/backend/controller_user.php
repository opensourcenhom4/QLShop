<?php 
	class controller_user{
		public $model;
		public function __construct(){
			//---------
			$this->model = new model();
			//---------
			//quy dinh so ban ghi tren 1 trang
			$record_perpage = 10;
			//tinh tong so ban ghi
			$total = $this->model->get_num_rows("select customer_id from tbl_customer");
			//tinh so trang
			$num_page = ceil($total/$record_perpage);
			//lay trang hien tai (la bien p truyen tu url)
			$page = isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from = $page * $record_perpage;
			//lay cac ban ghi
			$arr = $this->model->get_all("select * from tbl_customer order by customer_id desc limit $from,$record_perpage");
			//---------
			//load view
			include "View/backend/view_user.php";
		}
	}
	new controller_user();
 ?>