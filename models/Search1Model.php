<?php 
	trait Search1Model
	{
		//lay nhieu ban ghi
		public function modelRead($fromPrice,$toPrice, $from, $recordPerPage){
			$data = DB::fetchAll("SELECT * FROM products WHERE price >= $fromPrice AND price <= $toPrice LIMIT $from,$recordPerPage");
			return $data;
		}
		//dem so luong ban ghi trong table users
		public function modelTotalRecord($fromPrice,$toPrice){
			$total = DB::rowCount("SELECT id FROM products WHERE price >= $fromPrice AND price <= $toPrice");
			return $total;
		}
	}
 ?>