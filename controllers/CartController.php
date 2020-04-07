<?php 

	include "models/CartModel.php";
	/**
	 * 
	 */
	class CartController extends Controller
	{
		use CartModel;
		// hàm hiển thị giỏ hàng
		public function index()
		{
			// kiểm tra giỏ hàng nếu chưa tồn tại giỏ hàng thì khởi tạo
			if(isset($_SESSION['cart']) == false)
			{
				$_SESSION['cart'] = array();
			}
			$this->loadView("cart/CartView.php");
		}
		// thêm sản phẩm vào giỏ hàng
		public function add()
		{
			// lấy id từ url
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			$this->cartAdd($id);
			// di chuyển đến trang giỏ hàng
			header("location:index.php?controller=cart");
		}
		// xóa sản phẩm giỏ hàng
		public function delete()
		{
			// lấy id từ url
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			$this->cartDelete($id);
			// di chuyển đến trang giỏ hàng
			header("location:index.php?controller=cart");
		}
		//xóa toàn bộ giỏ hàng
		public function destroy()
		{
			$this->cartDestroy();
			// di chuyển đến trang giỏ hàng
			header("location:index.php?controller=cart");
		}
		//cập nhật số lượng sản phẩm trong giỏ hàng
		public function update()
		{
			// duyệt các phần từ trong seesion array để lấy giá trị của thẻ input
			foreach ($_SESSION['cart'] as $product) 
			{
				$inputName = "product_".$product['id'];
				$qty = $_POST[$inputName];
				// gọi hàm update để update lại thuộc tính number trong seesion
				//$_SESSION["cart"]
				$this->cartUpdate($product['id'],$qty);
				header("location:index.php?controller=cart");
			}
		}
		//thanh toán giỏ hàng
		public function checkout()
		{
			// load view de user nhập thông tin
			$this->loadView("cart/CheckoutView.php");
		}
		// khi submit thanh toán
		public function doCheckout()
		{
			// gọi hàm cartCheckout
			$this->cartCheckOut();
			// hủy các sản phẩm trong giỏ hàng
			$_SESSION['cart'] = array();
			header("location:index.php?controller=cart");
		}
	}
 ?>