<?php
	class HomeController extends Controller
	{
		public function index()
		{
			$this->data['title']='TH - Mobile - Điện thoại, Tablet, Phụ kiện chính hãng';
			$this->loadView("Home.php");
		}
	}
 ?>