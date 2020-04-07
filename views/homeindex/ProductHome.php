<div class="container" style="margin-top: 20px;">
    <div class="sale-title">
        <span>SẢN PHẨM KHUYẾN MÃI HOT</span>
    </div>
</div>
<div class="container" style="margin-bottom: 20px;">
    <?php
        //san pham noi bat
        $data = DB::fetchAll("SELECT * FROM products WHERE hot=1 ORDER BY id DESC LIMIT 0,10");
    ?>
    <div class="owl-carousel owl-carousel-product owl-theme" style="border: 1px solid #0f9ed8;">
        <?php foreach ($data as $rows) : ?>
        <div class="item" style="margin: 0px;">
            <div class="products-sale">
                <div class="lt-product-image">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" title="">
                        <img class="img-p" src="assets/upload/products/<?php echo $rows->photo; ?>" alt="">
                    </a>
                    <div class="discount">
                        <span class="text-discount">Giảm <?php echo $rows->discount; ?>%</span>
                    </div>
                </div>
                <div class="lt-product-info">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" title="" style="text-align: left;">
                        <h3><?php echo $rows->name; ?></h3>
                    </a>
                    <div class="price-box">
                        <p class="old-price">
                            <span class="price"><?php echo number_format($rows->price,0,',','.'); ?>₫</span>
                        </p>
                        <p class="special-price">
                            <span class="price">
                                <?php
                                if($rows->discount > 0)
                                {
                                    $newPrice = ($rows->price * $rows->discount)/100;
                                    echo number_format($rows->price - $newPrice,0,',','.');
                                }
                                else
                                {
                                    echo number_format($rows->price,0,',','.');
                                }
                                ?>
                            ₫</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                    <div class="danhGiaSanpham">
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star"></i></a>
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star"></i></a>
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star"></i></a>
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star"></i></a>
                       <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=5"> <i class="fa fa-star"></i></a><span>Đánh giá sản phẩm</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container" style="margin-top: 20px;">
    <div class="sale-title">
        <span>SẢN PHẨM BÁN CHẠY</span>
    </div>
</div>
<div class="container" style="margin-bottom: 20px;">
    <?php
        //san pham noi bat
        $data = DB::fetchAll("SELECT * FROM products  ORDER BY id DESC LIMIT 0,10");
    ?>
    <div class="owl-carousel owl-carousel-product owl-theme" style="border: 1px solid #0f9ed8;">
        <?php foreach ($data as $rows) : ?>
        <div class="item" style="margin: 0px;">
            <div class="products-sale">
                <div class="lt-product-image">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" title="">
                        <img class="img-p" src="assets/upload/products/<?php echo $rows->photo; ?>" alt="">
                    </a>
                    <div class="discount">
                        <span class="text-discount">Giảm <?php echo $rows->discount; ?>%</span>
                    </div>
                </div>
                <div class="lt-product-info">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" title="" style="text-align: left;">
                        <h3><?php echo $rows->name; ?></h3>
                    </a>
                    <div class="price-box">
                        <p class="old-price">
                            <span class="price"><?php echo number_format($rows->price,0,',','.'); ?>₫</span>
                        </p>
                        <p class="special-price">
                            <span class="price">
                                <?php
                                if($rows->discount > 0)
                                {
                                    $newPrice = ($rows->price * $rows->discount)/100;
                                    echo number_format($rows->price - $newPrice,0,',','.');
                                }
                                else
                                {
                                    echo number_format($rows->price,0,',','.');
                                }
                                ?>
                            ₫</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                    <div class="danhGiaSanpham">
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star"></i></a>
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star"></i></a>
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star"></i></a>
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star"></i></a>
                       <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>&star=5"> <i class="fa fa-star"></i></a><span>Đánh giá sản phẩm</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

