<?php 
	/**
	 * 
	 */
	// load file categorymodel
	include_once "models/CategoryModel.php";
	class NewsHomeController extends Controller
	{
		use CategoryModel;
		public function index()
		{
			//goi ham de lay du lieu truyen ra view
			$data = $this->modelRead();
			//goi view
			$this->loadView("homeindex/NewsHome.php",["data"=>$data]);
		}
	}
 ?>
