<?php 
	//load file model
	include_once "models/CategoryModel.php";
	class IncCategoriesController extends Controller
	{
		//ke thua UserModel
		use CategoryModel;
		public function index()
		{
			//goi ham de lay du lieu truyen ra view
			$data = $this->modelRead();
			//goi view
			$this->loadView("categories/IncCategories.php",["data"=>$data]);
		}
	}
 ?>