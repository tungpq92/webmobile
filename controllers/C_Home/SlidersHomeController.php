<?php 
	/**
	 * 
	 */
	// load file categorymodel
	include_once "models/CategoryModel.php";
	class SlidersHomeController extends Controller
	{
		use CategoryModel;
		public function index()
		{
			//goi ham de lay du lieu truyen ra view
			$data = $this->modelRead();
			//goi view
			$this->loadView("homeindex/Sliders.php",["data"=>$data]);
		}
	}
 ?>