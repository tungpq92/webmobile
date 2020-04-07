<?php 
	//include model
	include "models/NewsModel.php";
	class NewsController extends Controller
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
			$this->loadView("news/NewsView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function detail()
		{
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$record = $this->modelGetProduct($id);
			//goi view
			$this->loadView("news/NewsDetail.php",["record"=>$record]);
		}
	}
 ?>