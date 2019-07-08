<?php 
    class controller_product_type{
        public $model;
        public function __construct(){
            $this->model = new model();
            //------------
            $arr = $this->model->get_all("select * from tbl_product_type order by pk_product_type_id desc");
            include "View/frontend/view_product_type.php";
            //------------
        }
    }
    new controller_product_type();
 ?>