<?php 
	trait UsersModel{
		//lay nhieu ban ghi
		public function modelRead($from, $recordPerPage)
		{
			//goi ham de lay ket qua
			$data = DB::fetchAll("SELECT * FROM users ORDER BY id DESC LIMIT $from,$recordPerPage");
			return $data;
		}
		//dem so luong ban ghi trong table users
		public function modelTotalRecord()
		{
			$total = DB::rowCount("SELECT id FROM users");
			return $total;
		}
		//edit
		public function modelEdit($id)
		{
			//lay mot ban ghi
			$record = DB::fetch("SELECT * FROM users WHERE id=:record_id",["record_id"=>$id]);
			return $record;
		}
		//editPost
		public function modelEditPost($id)
		{
			//$email = $_POST["email"];
			$name = $_POST["name"];
			$password = $_POST["password"];
			//update email, name
			DB::execute("UPDATE users SET name=:_name WHERE id=:_id",["_name"=>$name,"_id"=>$id]);
			//neu user nhap password thi update password
			if($password != ""){
				$password = md5($password);
				DB::execute("UPDATE users SET password=:_password WHERE id=:_id",["_password"=>$password,"_id"=>$id]);
			}
		}
		//addPost
		public function modelAddPost()
		{
			$email = $_POST["email"];
			$name = $_POST["name"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//kiem tra xem email da ton tai trong csdl chua, neu chua ton tai thi moi thuc hien insert ban ghi
			$check = DB::fetch("SELECT email FROM users WHERE email=:_email",["_email"=>$email]);
			if(isset($check->email) == false)
			{
				//update email, name
				DB::execute("INSERT INTO users SET name=:_name, email=:_email,password=:_password",["_name"=>$name,"_email"=>$email,"_password"=>$password]);
				header("location:index.php?controller=users");
			}
			else
				header("location:index.php?controller=users&action=add&email=exists");
		}
		//deletePost
		public function modelDeletePost($id)
		{
			//delete record
			DB::execute("DELETE FROM users WHERE id=:_id",["_id"=>$id]);
		}
	}
 ?>