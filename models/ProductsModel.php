<?php
	trait ProductsModel
	{
		//lay nhieu ban ghi
		public function modelRead($catid, $from, $recordPerPage)
		{
			$orderBy = isset($_GET["orderBy"])?$_GET["orderBy"]:"";
			$sqlOrder = "order by id desc";
			switch ($orderBy) {
				case 'priceAsc':
					$sqlOrder = "order by price asc";
					break;
				case 'priceDesc':
					$sqlOrder = "order by price desc";
					break;
				case 'nameAsc':
					$sqlOrder = "order by name asc";
					break;
				case 'nameDesc':
					$sqlOrder = "order by name desc";
					break;
				default:
					# code...
					break;
			}
			$recordPerPage = isset($_GET["recordPerPage"])?$_GET["recordPerPage"]:$recordPerPage;
			//goi ham de lay ket qua
			$data = DB::fetchAll("SELECT * FROM products WHERE category_id = $catid $sqlOrder LIMIT $from,$recordPerPage");
			return $data;
		}
		//dem so luong ban ghi trong table users
		public function modelTotalRecord($catid)
		{
			$total = DB::rowCount("SELECT id FROM products WHERE category_id = $catid");
			return $total;
		}
		//lay mot ban ghi
		public function modelGetProduct($id)
		{
			//goi ham de lay ket qua
			$record = DB::fetch("SELECT * FROM products WHERE id = $id");
			return $record;
		}
	}
 ?>
