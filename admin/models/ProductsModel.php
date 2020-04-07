<?php 
	trait ProductsModel{
		//lay nhieu ban ghi
		public function modelRead($from, $recordPerPage)
		{
			//goi ham de lay ket qua
			$data = DB::fetchAll("SELECT * FROM products ORDER BY id DESC LIMIT $from,$recordPerPage");
			return $data;
		}
		//dem so luong ban ghi trong table users
		public function modelTotalRecord()
		{
			$total = DB::rowCount("SELECT id FROM  products");
			return $total;
		}
		//edit
		public function modelEdit($id)
		{
			//lay mot ban ghi
			$record = DB::fetch("SELECT * FROM products WHERE id=:record_id",["record_id"=>$id]);
			return $record;
		}
		//editPost
		public function modelEditPost($id)
		{
			$name = $_POST["name"];
			$price = $_POST["price"];
			$discount = $_POST["discount"];
			$promotion = $_POST["promotion"];
			$category_id = $_POST["category_id"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$ManHinh = $_POST["ManHinh"];
			$HDH = $_POST["HDH"];
			$CamSau = $_POST["CamSau"];
			$CamTruoc = $_POST["CamTruoc"];
			$CPU = $_POST["CPU"];
			$RAM = $_POST["RAM"];
			$BoNhoTrong = $_POST["BoNhoTrong"];
			$TheNho = $_POST["TheNho"];
			$Pin = $_POST["Pin"];
			//update ban ghi
			DB::execute("UPDATE products SET
				name=:_name,
				discount=:_discount,
				promotion=:_promotion,
				price=:_price,
				category_id=:_category_id,
				description=:_description,
				content=:_content,
				hot=:_hot,
				ManHinh=:_ManHinh,
				HDH=:_HDH,
				CamSau=:_CamSau,
				CamTruoc=:_CamTruoc,
				CPU=:_CPU,
				RAM=:_RAM,
				BoNhoTrong=:_BoNhoTrong,
				TheNho=:_TheNho,
				Pin=:_Pin
				 WHERE id=:_id",
				[
					"_name"=>$name,
					"_discount"=>$discount,
					"_promotion"=>$promotion,
					"_price"=>$price,
					"_category_id"=>$category_id,
					"_description"=>$description,
					"_content"=>$content,
					"_hot"=>$hot,
					"_ManHinh"=>$ManHinh,
					"_HDH"=>$HDH,
					"_CamSau"=>$CamSau,
					"_CamTruoc"=>$CamTruoc,
					"_CPU"=>$CPU,
					"_RAM"=>$RAM,
					"_BoNhoTrong"=>$BoNhoTrong,
					"_TheNho"=>$TheNho,
					"_Pin"=>$Pin,
					"_id"=>$id
				]);
			//neu user chon anh thi thuc hien upload
			if($_FILES["photo"]["name"] != "")
			{
				//-----------
				//lay anh cu (neu co) de xoa
				$oldImg = DB::fetch("SELECT photo FROM products WHERE id=$id");
				if(isset($oldImg->photo)&&file_exists("../assets/upload/products/".$oldImg->photo))
				{
					//xoa anh
					unlink("../assets/upload/products/".$oldImg->photo);//ham unlink su dung de xoa file
				}
				//-----------
				//lay ten file
				$photo = $_FILES["photo"]["name"];
				//gan them chuoi thoi gian de cac anh khong trung ten nhau luc upload
				$photo = time().$photo;
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/products/$photo");
				//update ban ghi
				DB::execute("UPDATE products SET photo=:_photo WHERE id=:_id",["_photo"=>$photo,"_id"=>$id]);
			}
		}
		//addPost
		public function modelAddPost()
		{
			$name = $_POST["name"];
			$price = $_POST["price"];
			$discount = $_POST["discount"];
			$promotion = $_POST["promotion"];
			$category_id = $_POST["category_id"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$photo = "";
			$ManHinh = $_POST["ManHinh"];
			$HDH = $_POST["HDH"];
			$CamSau = $_POST["CamSau"];
			$CamTruoc = $_POST["CamTruoc"];
			$CPU = $_POST["CPU"];
			$RAM = $_POST["RAM"];
			$BoNhoTrong = $_POST["BoNhoTrong"];
			$TheNho = $_POST["TheNho"];
			$Pin = $_POST["Pin"];
			//neu user chon anh thi thuc hien upload
			if($_FILES["photo"]["name"] != ""){
				//lay ten file
				$photo = $_FILES["photo"]["name"];
				//gan them chuoi thoi gian de cac anh khong trung ten nhau luc upload
				$photo = time().$photo;
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/products/$photo");
			}
			//update ban ghi
			DB::execute("INSERT INTO products SET
				name=:_name,
				discount=:_discount,
				promotion=:_promotion,
				price=:_price,
				category_id=:_category_id,
				description=:_description,
				content=:_content,
				hot=:_hot,
				photo=:_photo,
				ManHinh=:_ManHinh,
				HDH=:_HDH,
				CamSau=:_CamSau,
				CamTruoc=:_CamTruoc,
				CPU=:_CPU,
				RAM=:_RAM,
				BoNhoTrong=:_BoNhoTrong,
				TheNho=:_TheNho,
				Pin=:_Pin",
				[
					"_name"=>$name,
					"_discount"=>$discount,
					"_promotion"=>$promotion,
					"_price"=>$price,
					"_category_id"=>$category_id,
					"_description"=>$description,
					"_content"=>$content,
					"_hot"=>$hot,
					"_photo"=>$photo,
					"_ManHinh"=>$ManHinh,
					"_HDH"=>$HDH,
					"_CamSau"=>$CamSau,
					"_CamTruoc"=>$CamTruoc,
					"_CPU"=>$CPU,
					"_RAM"=>$RAM,
					"_BoNhoTrong"=>$BoNhoTrong,
					"_TheNho"=>$TheNho,
					"_Pin"=>$Pin,
				]);
		}
		//deletePost
		public function modelDeletePost($id)
		{
			//-----------
			//lay anh cu (neu co) de xoa
			$oldImg = DB::fetch("SELECT photo FROM products WHERE id=$id");
			if(isset($oldImg->photo)&&file_exists("../assets/upload/products/".$oldImg->photo))
			{
				//xoa anh
				unlink("../assets/upload/products/".$oldImg->photo);//ham unlink su dung de xoa file
			}
			//-----------
			//delete record
			DB::execute("DELETE FROM products WHERE id=:_id",["_id"=>$id]);
		}
	}
 ?>