<?php 
	trait OrderModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function listOrder($from, $pageSize)
		{
			//thuc thi truy van
			$query = DB::fetchAll("SELECT *,orders.id AS orderID FROM orders INNER JOIN customers ON orders.customer_id=customers.id ORDER BY orders.id DESC LIMIT $from, $pageSize");
			//lay tat ca ket qua tra ve
			return $query;
		}
		//tinh tong so luong ban ghi
		public function totalRecord()
		{
			//thuc thi truy van
			$rows = DB::rowCount("SELECT id FROM orders");
			//tra ve tong so luong ban ghi
			return $rows;
		}
		public function listProduct($id)
		{
			//thuc thi truy van
			$query = DB::fetchAll("SELECT * FROM order_details INNER JOIN products on order_details.product_id=products.id WHERE order_details.order_id=$id");
			//tra ve tong so luong ban ghi
			return $query;
		}
		public function sentOrder($id)
		{
			DB::execute("UPDATE orders SET status=1 WHERE id=$id");
		}
	}
 ?>