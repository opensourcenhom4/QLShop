<?php 
	class controller_category{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----------
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "delete":
					//xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_category_product where pk_category_product_id=$id");
					//quay tro lai trang category_news
					header("location:admin.php?controller=category");
				break;
			}
			//-----------
			//lay tat ca cac ban, co phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 5;
			//tinh so trang
			$total = $this->model->get_num_rows("select pk_category_product_id from tbl_category_product");
			//tinh so trang (su dung ham ceil de lay tran)
			//sotrang = tongsobanghi/sobanghitrenmottrang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai truyen tu url
			$page = isset($_GET["p"])&&($_GET["p"]>0)?($_GET["p"]-1):0;
			//truy van lay tu ban ghi nao
			//tubanghi = $page*sobanghitrentrang
			$from = $page * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_category_product order by pk_category_product_id desc limit $from,$record_per_page");
			//load view
			include "View/backend/view_category.php";
		}
	}
	new controller_category();
 ?>