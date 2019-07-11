<?php 
	class controller_checkout{
		public $model;
		public function __construct(){
			$this->model = new model();
			//----------
			$act = $_GET['act']?$_GET['act']:'';
			$mail = $_SESSION['email'];
			$arr = $this->model->get_a_record("select * from tbl_customer where email = '$mail'");
			switch ($act) {
				case 'checkout':
					# code...
				$form_action = "index.php?controller=checkout&act=do_checkout";
					//lay ban ghi co id truyen vao
				break;
				case 'do_checkout':
					$diachi = $_POST["diachi"];
					$dienthoai = $_POST["dienthoai"];
					$ghichu = $_POST["ghichu"];
					//insert thong tin vao tbl_order
					//xac dinh gia cua gio hang
					$gia = 0;
					foreach($_SESSION["cart"] as $rows){
						$gia = $gia + $rows["c_price"];
					}
					$customer_id  = $arr->customer_id;
					$order_id = $this->model->execute("insert into tbl_order(customer_id,ngaymua,gia,trangthai,ghichu,diachi,sdt) values($customer_id,now(),$gia,0,'$ghichu','$diachi','$dienthoai')");
					//duyet cac san pham, insert thong tin vao tbl_order_detail
					foreach($_SESSION["cart"] as $product){
						$pk_product_id = $product["pk_product_id"];
						$number = $product['number'];
						$this->model->execute("insert into tbl_order_detail(order_id,fk_product_id,c_number) values($order_id,$pk_product_id,$number)");
					}
					//xoa toan bo gio hang
					$_SESSION["cart"] = array();
					echo "<script>
								alert ('Bạn tạo đơn hàng thành công !!!');
								location.href='index.php?controller=cart';
							</script>";
				break;		
			}
			//----------
			//load view
			include "view/frontend/view_checkout.php";
		}
	}
	new controller_checkout();
 ?>