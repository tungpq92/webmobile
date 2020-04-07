<?php 
	trait CategoryModel
	{
		//lay nhieu ban ghi
		public function modelRead()
		{
			//goi ham de lay ket qua
			$data = DB::fetchAll("SELECT * FROM categories WHERE parent_id = 0");
			return $data;
		}
	}
 ?>