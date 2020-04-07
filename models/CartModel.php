<?php
	trait CartModel{
		// thêm phần từ vào session array(thêm sản phẩm)
		public function cartAdd($id)
		{
		    if(isset($_SESSION['cart'][$id]))
		    {
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$id]['number']++;
		    }
		    else
		    {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        $product = DB::fetch("SELECT * FROM products WHERE id=$id");
		        //---
		        
		        $_SESSION['cart'][$id] = array
		        (
		            'id' => $id,
		            'name' => $product->name,
		            'photo' => $product->photo,
		            'number' => 1,
		            'price' => $product->price
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function cartUpdate($id, $number)
		{
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$id]);
		    } else {
		        $_SESSION['cart'][$id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cartDelete($id){
		    unset($_SESSION['cart'][$id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cartTotal(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cartNumber(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cartList(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cartDestroy(){
		    $_SESSION['cart'] = array();
		}
		//=============
		//checkout
		public function cartCheckOut(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			//insert ban ghi vao customers, lay customer_id vua moi insert
			$customer_id = DB::execute("INSERT INTO customers SET name=:_name, email=:_email, address=:_address,phone=:_phone",["_name"=>$name,"_email"=>$email,"_address"=>$address,"_phone"=>$phone]);
			//---
			//lay id vua moi insert
			$order_id = DB::execute("INSERT INTO orders SET customer_id=:_customer_id, create_at=now()",["_customer_id"=>$customer_id]);
			//---
			//duyet cac ban ghi trong session array de insert vao order_details
			foreach($_SESSION["cart"] as $product){
				DB::execute("INSERT INTO order_details SET order_id=:_order_id, product_id=:_product_id, price=:_price, number=:_number",array("_order_id"=>$order_id,"_product_id"=>$product["id"],"_price"=>$product["price"],"_number"=>$product["number"]));
			}
			//xoa gio hang
			unset($_SESSION["cart"]);
		}
		//=============
	}	
?>