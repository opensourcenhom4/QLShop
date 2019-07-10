<?php 
	class controller_checkout{
		public $model;
		public function __construct(){
			$this->model = new model();
			//----------
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$hoten = $_POST["hoten"];
				$diachi = $_POST["diachi"];
				$dienthoai = $_POST["dienthoai"];
				$ghichu = $_POST["ghichu"];
				//insert thong tin vao table tbl_customer, sau do lay id vua moi insert vao
				$customer_id = $this->model->execute("insert into tbl_customer(hovaten,diachi,dienthoai,ghichu) values('$hoten','$diachi','$dienthoai','$ghichu')");
				//insert thong tin vao tbl_order
				//xac dinh gia cua gio hang
				$gia = 0;
				foreach($_SESSION["cart"] as $rows){
					$gia = $gia + $rows["c_price"];
				}
				$order_id = $this->model->execute("insert into tbl_order(customer_id,ngaymua,gia,trangthai) values($customer_id,now(),$gia,0)");
				//echo "insert into tbl_order(fk_customer_id,ngaymua,gia,trangthai) values($customer_id,now(),$gia,0)";
				//duyet cac san pham, insert thong tin vao tbl_order_detail
				foreach($_SESSION["cart"] as $product){
					$pk_product_id = $product["pk_product_id"];
					$number = $product['number'];
					$this->model->execute("insert into tbl_order_detail(order_id,fk_product_id,c_number) values($order_id,$pk_product_id,$number)");
				}
				//xoa toan bo gio hang
				$_SESSION["cart"] = array();
				echo "<script>location.href='index.php?controller=cart';</script>";
				
			}
			//----------
			//load view
			include "view/frontend/view_checkout.php";
		}
	}
	new controller_checkout();
 ?>