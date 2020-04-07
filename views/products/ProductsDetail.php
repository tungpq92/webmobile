<?php 
	$layout = "Layout_Detail.php";
 ?>
 <?php 
    //cap nhat star truyen tu url
    $star = isset($_GET["star"])?$_GET["star"]:0;
    switch($star){
        case 1:
            DB::execute("UPDATE products set star1 = star1 + 1 where id = ".$record->id);
        break;
        case 2:
            DB::execute("UPDATE products set star2 = star2 + 1 where id = ".$record->id);
        break;
        case 3:
             DB::execute("UPDATE products set star3 = star3 + 1 where id = ".$record->id);
        break;
        case 4:
            DB::execute("UPDATE products set star4 = star4 + 1 where id = ".$record->id);
        break;
        case 5:
             DB::execute("UPDATE products set star5 = star5 + 1 where id = ".$record->id);
        break;
    }
    if($star > 0)
        header("location:index.php?controller=products&action=detail&id=".$record->id);
  ?>
<section id="product-detail">
    <div class="container">
        <div class="product-wrap">
            <form action="" method="" id="ProductDetailsForm">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home">
                            <a href="index.php" title="Trở về trang chủ">Trang chủ</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="category3">
                            <a href="" title="">
                                <?php
                                    $catid = $record->category_id;
                                    //lay mot ban ghi
                                    $category = DB::fetch("SELECT name FROM categories WHERE id = $catid");
                                    echo isset($category) ? $category->name:"";
                                ?>
                            </a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="product"><?php echo $record->name; ?></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 listimg-desc-product">
                    <div class="picture">
                        <img id="imgProduct" src="assets/upload/Products/<?php echo $record->photo; ?>" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="assets/upload/Products/<?php echo $record->photo; ?>" alt="<?php echo $record->name; ?>" />
                    </div>
                    <div class="flex-control-nav flex-control-thumbs">
                        <ul>
                            <li><img class="thumb" src="public/img/sanpham/1.jpg" alt=""></li>
                            <li><img class="thumb" src="public/img/sanpham/2.jpg"></li>
                            <li><img class="thumb" src="public/img/sanpham/sanphamhot/iphone-x.jpg"></li>
                        </ul>
                    </div>
                    <script>
                        let main = document.getElementById("imgProduct");
                        document.addEventListener("click", function (event){
                            if (event.target.classList.contains("thumb")) {
                                main.src = event.target.src;
                            }
                        });
                    </script>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="price_sale">
                        <div class="product-view-name">
                            <h1><?php echo $record->name; ?></h1>
                        </div>
                        <div class="product-view-price">
                            <div class="pull-left">
                                <span class="price-label">Giá bán:</span>
                                <span class="price">
                                    <?php
                                        if($record->discount > 0)
                                        {
                                            $newPrice = ($record->price * $record->discount)/100;
                                            echo number_format($record->price - $newPrice,0,',','.');
                                        }
                                        else
                                        {
                                            echo number_format($record->price,0,',','.');
                                        }
                                     ?>
                                ₫</span>
                            </div>
                            <div class="pull-right">
                                <span class="price" style="text-decoration: line-through;"><?php echo number_format($record->price,0,',','.'); ?>₫</span>
                                <span class="sale-flag">-<?php echo $record->discount; ?>%</span>
                            </div>
                        </div>
                        <div class="product-status">
                            <p style=" float: left;margin-right: 10px;">
                                Thương hiệu: 
                                <?php
                                    $catid = $record->category_id;
                                    //lay mot ban ghi
                                    $category = DB::fetch("SELECT name FROM categories WHERE id = $catid");
                                    echo isset($category) ? $category->name:"";
                                ?>
                            </p>
                        </div>
                        <div class="clear"></div>
                        <div class="product-promo">
                            <div class="km-detail">
                                <p class="km-title">Khuyến mãi</p>
                            </div>
                            <div class="promo">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i><?php echo $record->promotion; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <b>Tình trạng</b><br>
                            <span>Nguyên hộp. Đầy đủ phụ kiện từ nhà sản xuất, gồm: Sạc, cáp, tai nghe, que lấy SIM, sách hướng dẫn</span>
                        </div>
                        <div style="margin-top: 20px;">
                            <b>Bảo hành</b><br>
                            <span>Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất.</span>
                        </div>
                        <div class="acction-qty">
                            <?php foreach ($data as $rows) : ?>
                                <button class="button btn-cart detail-button" title="Thêm vào giỏ hàng"><a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>"><i class="fa fa-plus"></i>Thêm vào giỏ hàng</a></button>
                            <?php endforeach; ?>
                        </div>
                        <!-- 1 sao -->
                        <div class="danhGiaSanpham">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i><span><b>(<?php echo $rows->star1; ?>) lượt đánh giá</b></span>
                        </div>
                        <!-- end 1 sao -->
                         <!-- 2 sao -->
                        <div class="danhGiaSanpham">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i><span><b>(<?php echo $rows->star2; ?>) lượt đánh giá</b></span>
                        </div>
                        <!-- end 2 sao -->
                         <!-- 3 sao -->
                        <div class="danhGiaSanpham">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i><span><b>(<?php echo $rows->star3; ?>) lượt đánh giá</b></span>
                        </div>
                        <!-- end 3 sao -->
                         <!-- 4 sao -->
                        <div class="danhGiaSanpham">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i><span><b>(<?php echo $rows->star4; ?>) lượt đánh giá</b></span>
                        </div>
                        <!-- end 4 sao -->
                         <!-- 5 sao -->
                        <div class="danhGiaSanpham">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i><span><b>(<?php echo $rows->star5; ?>) lượt đánh giá</b></span>
                        </div>
                        <!-- end 5 sao -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="info_product">
                        <h2>Thông số kỹ thuật</h2>
                        <ul class="info">
                            <li>
                                <p>Màn hình</p>
                                <div><?php echo $rows->ManHinh; ?></div>
                            </li>
                            <li>
                                <p>Hệ điều hành</p>
                                <div><a href='https://www.thegioididong.com/tin-tuc/he-dieu-hanh-ios-la-gi--592559#ios8x'
                                   target='_blank'><?php echo $rows->HDH; ?></a></div>
                            </li>
                            <li>
                            <p>Camara sau</p>
                            <div><?php echo $rows->CamSau; ?></div>
                        </li>
                        <li>
                            <p>Camara trước</p>
                            <div><?php echo $rows->CamTruoc; ?></div>
                        </li>
                        <li>
                            <p>CPU</p>
                            <div><?php echo $rows->CPU; ?></div>
                        </li>
                        <li>
                            <p>RAM</p>
                            <div><?php echo $rows->RAM; ?></div>
                        </li>
                        <li>
                            <p>Bộ nhớ trong</p>
                            <div><?php echo $rows->BoNhoTrong; ?></div>
                        </li>
                        <li>
                            <p>Thẻ nhớ</p>
                            <div><?php echo $rows->TheNho; ?></div>
                        </li>
                        <li>
                            <p>Dung lượng pin</p>
                            <div><?php echo $rows->Pin; ?></div>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="product-desc col-md-10 col-12 col-xs-12">
                    <h3>Đặc điểm nổi bật</h3>
                    <p>
                        <em><?php echo $record->description; ?></em>
                    </p>
                    <p>
                       <?php echo $record->content; ?>
                    </p>
                </div>
                 <div class="product-comment product-desc" >
                    <h3 style="margin-top: 50px;">Bình luận</h3>
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                        <div class="fb-comments" data-href="https://baobongda.com.vn" data-width="" data-numposts="5"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="product-comment product-desc product">
                    <h3>Sản phẩm liên quan</h3>
                    <?php
                        $data = DB::fetchAll("SELECT * FROM products WHERE category_id = $catid ORDER BY id DESC LIMIT 0,5");
                    ?>
                    <div class="product-container">
                        <div class="owl-carousel-product owl-carousel owl-theme">
                            <?php foreach($data as $record): ?>
                            <div class="item">
                                <div class="product-lt">
                                    <div class="lt-product-image">
                                        <a href="index.php?controller=products&action=detail&id=<?php echo $record->id; ?>" title="Samsung Galaxy S10+ (Plus) Green" >
                                        <img class="img-p"src="assets/upload/products/<?php echo $record->photo; ?>" alt="">
                                        </a>
                                        <div class="discount">
                                            <span class="text-discount">Giảm <?php echo $record->discount; ?>%</span>
                                        </div>
                                    </div>
                                    <div class="lt-product-info">
                                        <a href="index.php?controller=products&action=detail&id=<?php echo $record->id; ?>" title="Samsung Galaxy S10+ (Plus) Green" style="text-align: left;">
                                            <h3><?php echo $record->name; ?></h3>
                                        </a>
                                        <div class="price-box">
                                            <p class="old-price">
                                                <span class="price"><?php echo number_format($record->price,0,',','.'); ?>₫</span>
                                            </p>
                                            <p class="special-price">
                                                <span class="price">
                                                    <?php 
                                                        if($record->discount > 0)
                                                        {
                                                            $newPrice = ($record->price * $record->discount)/100;
                                                            echo number_format($record->price - $newPrice,0,',','.');
                                                        }
                                                        else
                                                        {
                                                            echo number_format($record->price,0,',','.');
                                                        }
                                                     ?>
                                                ₫</span>
                                            </p>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>