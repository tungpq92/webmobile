<?php 
	trait CategoriesModel{
		//lay nhieu ban ghi
		public function modelRead($from, $recordPerPage)
		{
			//goi ham de lay ket qua
			$data = DB::fetchAll("SELECT * FROM categories WHERE parent_id = 0 order by id desc limit $from,$recordPerPage");
			return $data;
		}
		//dem so luong ban ghi trong table users
		public function modelTotalRecord()
		{
			$total = DB::rowCount("SELECT id FROM categories");
			return $total;
		}
		//edit
		public function modelEdit($id)
		{
			//lay mot ban ghi
			$record = DB::fetch("SELECT * FROM categories WHERE id=:record_id",["record_id"=>$id]);
			return $record;
		}
		//editPost
		public function modelEditPost($id)
		{
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			//update ban ghi
			DB::execute("UPDATE categories SET name=:_name,parent_id=:_parent_id WHERE id=:_id",["_name"=>$name,"_parent_id"=>$parent_id,"_id"=>$id]);
		}
		//addPost
		public function modelAddPost()
		{
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			//echo "insert into categories set name='$name', parent_id=$parent_id";
			//update ban ghi
			DB::execute("INSERT INTO categories SET name=:_name, parent_id=:_parent_id",["_name"=>$name,"_parent_id"=>$parent_id]);
		}
		//deletePost
		public function modelDeletePost($id)
		{
			//xoa danh muc con (neu co) truoc khi xoa danh muc cha
			DB::execute("DELETE FROM categories WHERE parent_id=:_id",["_id"=>$id]);
			//delete record
			DB::execute("DELETE FROM categories WHERE id=:_id",["_id"=>$id]);
		}
	}
 ?>