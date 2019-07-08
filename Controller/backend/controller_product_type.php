<?php 
	class controller_product_type{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----------
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "delete":
					//xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_product_type where pk_product_type_id=$id");
					//quay tro lai trang category_news
					header("location:admin.php?controller=product_type");
				break;
			}
			//-----------
			//lay tat ca cac ban, co phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 5;
			//tinh so trang
			$total = $this->model->get_num_rows("select pk_product_type_id from tbl_product_type");
			//tinh so trang (su dung ham ceil de lay tran)
			//sotrang = tongsobanghi/sobanghitrenmottrang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai truyen tu url
			$page = isset($_GET["p"])&&($_GET["p"]>0)?($_GET["p"]-1):0;
			//truy van lay tu ban ghi nao
			//tubanghi = $page*sobanghitrentrang
			$from = $page * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_product_type order by pk_product_type_id desc limit $from,$record_per_page");
			//load view
			include "View/backend/view_product_type.php";
		}
	}
	new controller_product_type();
 ?>