<?php 
    class controller_category{
        public $model;
        public function __construct(){
            $this->model = new model();
            //------------
            $arr = $this->model->get_all("select * from tbl_category_product order by pk_category_product_id desc");
            include "View/frontend/view_category.php";
            //------------
        }
    }
    new controller_category();
 ?>