<?php 
	trait SearchModel
	{
		//lay nhieu ban ghi
		public function modelRead($key, $from, $recordPerPage){
			$data = DB::fetchAll("SELECT * FROM products WHERE name like '%$key%' limit $from,$recordPerPage");
			return $data;
		}
		//dem so luong ban ghi trong table users
		public function modelTotalRecord($key){
			$total = DB::rowCount("SELECT id FROM products WHERE name like '%$key%'");
			return $total;
		}
	}
 ?>