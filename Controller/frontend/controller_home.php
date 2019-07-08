<?php 
	class controller_home{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----------------
			//-----------------
			include "View/frontend/view_home.php";
		}
	}
	new controller_home();
 ?>