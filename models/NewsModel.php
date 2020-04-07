<?php 
	trait NewsModel
	{
		//lay nhieu ban ghi
		public function modelRead($catid, $from, $recordPerPage)
		{
			//goi ham de lay ket qua
			$data = DB::fetchAll("SELECT * FROM news ORDER BY id DESC LIMIT $from,$recordPerPage");
			return $data;
		}
		//dem so luong ban ghi trong table users
		public function modelTotalRecord($catid)
		{
			$total = DB::rowCount("SELECT id FROM news WHERE id = $catid");
			return $total;
		}
		//lay mot ban ghi
		public function modelGetProduct($id)
		{
			//goi ham de lay ket qua
			$record = DB::fetch("SELECT * FROM news WHERE id = $id");
			return $record;
		}
	}
 ?>
