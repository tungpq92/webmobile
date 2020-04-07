<?php 
	//include model
	include_once "models/NewsModel.php";
	class ContactController extends Controller
	{
		//ke thua ProductsModel
		use NewsModel;
		public function categories()
		{
			$catid = isset($_GET["cat"])?$_GET["cat"]:0;
			//xac dinh so ban ghi tren mot trang
			$recordPerpage = 15;
			//tinh tong so trang
			$totalRecord = $this->modelTotalRecord($catid);
			//lay bien so trang truyen tu url
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])?$_GET["p"]-1:0;
			//tinh so trang
			$numPage = ceil($totalRecord/$recordPerpage);
			//lay tu ban ghi nao
			$from = $p * $recordPerpage;
			//goi ham de lay du lieu truyen ra view
			$data = $this->modelRead($catid,$from,$recordPerpage);
			//goi view
			$this->loadView("contact/ContactView.php",["data"=>$data,"numPage"=>$numPage]);
		}
	}
 ?>