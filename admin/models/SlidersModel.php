<?php 
	trait SlidersModel
	{
		//lay nhieu ban ghi
		public function modelRead($from, $recordPerPage)
		{
			//goi ham de lay ket qua
			$data = DB::fetchAll("SELECT * FROM sliders  order by id desc limit $from,$recordPerPage");
			return $data;
		}
		//dem so luong ban ghi trong table users
		public function modelTotalRecord()
		{
			$total = DB::rowCount("SELECT id FROM sliders");
			return $total;
		}
		//edit
		public function modelEdit($id)
		{
			//lay mot ban ghi
			$record = DB::fetch("SELECT * FROM sliders WHERE id=:record_id",["record_id"=>$id]);
			return $record;
		}
		//editPost
		public function modelEditPost($id)
		{
			$name = $_POST["name"];
			$photo = $_POST["photo"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			//update ban ghi
			DB::execute("UPDATE sliders SET name=:_name,hot=:_hot WHERE id=:_id",["_name"=>$name,"_hot"=>$hot,"_id"=>$id]);
			if($_FILES["photo"]["name"] != "")
			{
				//-----------
				//lay anh cu (neu co) de xoa
				$oldImg = DB::fetch("SELECT photo FROM sliders WHERE id=$id");
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
				DB::execute("UPDATE sliders SET photo=:_photo WHERE id=:_id",["_photo"=>$photo,"_id"=>$id]);
			}
		}
		//addPost
		public function modelAddPost()
		{
			$name = $_POST["name"];
			$photo = "";
			$hot = isset($_POST["hot"]) ? 1 : 0;
			if($_FILES["photo"]["name"] != ""){
				//lay ten file
				$photo = $_FILES["photo"]["name"];
				//gan them chuoi thoi gian de cac anh khong trung ten nhau luc upload
				$photo = time().$photo;
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/products/$photo");
			}
			//echo "insert into categories set name='$name', parent_id=$parent_id";
			//update ban ghi
			DB::execute("INSERT INTO sliders SET name=:_name,photo=:_photo,hot=:_hot",["_name"=>$name,"_photo"=>$photo,"_hot"=>$hot]);
		}
		//deletePost
		public function modelDeletePost($id)
		{
			//delete record
			DB::execute("DELETE FROM sliders WHERE id=:_id",["_id"=>$id]);
		}
	}
 ?>