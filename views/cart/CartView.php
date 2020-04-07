<?php 
	$layout = "Layout_Detail.php";
?>
<div class="row content-cart">
	<div class="container">
		<form action="index.php?controller=Cart&action=update" method="post">
			<div class="cart-index">
				<h3 class="title">Chi tiết giỏ hàng</h3>
			</div>
			<div class="tbody text-center">
				<div class="col-xs-12 col-12 col-sm-12 col-md-8 col-lg-8">
					<table class="table table-list-product" style="border: 1px solid #ececec;">
						<thead>
							<tr style="background: #f4f4f4;">
								<th class="text-center">Hình ảnh</th>
								<th class="text-center">Tên sản phẩm</th>
								<th class="text-center">Đơn giá</th>
								<th class="text-center">Số lượng</th>
								<th class="text-center">Thành tiền</th>
								<th class="text-center">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($_SESSION["cart"] as $product): ?>
							<tr>
								<td class="img-product-cart">
									<a href="index.php?controller=Product&action=detail&id=<?php echo $product["id"]; ?>">
										<img src="Assets/Upload/Products/<?php echo $product["photo"]; ?>" width="80" height="100" alt="Samsung Galaxy S8+ Chính hãng">
									</a>
								</td>
								<td>
									<a href="index.php?controller=Product&action=detail&id=<?php echo $product["id"]; ?>" class="pull-left"><?php echo $product["name"]; ?></a>
								</td>
								<td>
									<span class="amount">
										<?php echo number_format($product["price"]); ?>
									</span>
								</td>
								<td>
									<div class="quantity clearfix">
										<input type="number" id="qty" min="1" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống" style="width: 50px;">
									</div>
								</td>
								<td>
									<span class="amount">
										<?php echo number_format($product["number"]*$product["price"]); ?>
									</span>
								</td>
								<td>
									<a href="index.php?controller=Cart&action=delete&id=<?php echo $product["id"]; ?>" class="btn btn-xs btn-danger" title="Xóa" ><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<tfoot>
            			<?php if($this->cartTotal() > 0): ?>
              			<tr>
                			<td colspan="6"><a href="index.php?controller=Cart&action=destroy" class="button pull-left btn btn-success">Xóa toàn bộ</a> <a href="index.php" class="button pull-right btn btn-info">Tiếp tục mua hàng</a>
                 		 	<input type="submit" class="button pull-right btn btn-warning" value="Cập nhật" style="margin-right: 10px;"></td>
              			</tr>
             			<?php endif; ?>
            		</tfoot>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="clearfix btn-submit" >
						<table class="table total-price" style="border: 1px solid #ececec;">
							<tbody>
								<?php if($this->cartTotal() > 0): ?>
									<tr style="background: #f4f4f4;">
										<td>Tổng tiền</td>
										<td><strong><?php echo number_format($this->cartTotal()); ?> VNĐ</strong></td>
									</tr>
									<tr>
										<td colspan="2">
											<a href="index.php?controller=Cart&action=checkout" class="button black">Thanh toán</a> </div>
										</td>
									</tr>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>