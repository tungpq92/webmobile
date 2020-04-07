<?php 
    $layout = "Layout_Category.php";
 ?>
 <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <?php
            //load mvc bang tay
            include "controllers/IncCategoriesController.php";
            $obj = new IncCategoriesController();
            $obj->index();
        ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content">
       <div class="product-wrap">
            <div class="collection-title">
                <h1>
                    <span>
                        <?php
                             $catid = isset($_GET["catid"]) ? $_GET["catid"] : 0;
                        ?>
                       Tìm Kiếm
                    </span>
                </h1>
                <div class="collection-filter" id="list-product">
                    <div class="category-products clearfix">
                        <div class="products-grid clearfix">
                            <?php foreach ($data as $rows) : ?>
                                <div class="col-md-3 col-lg-3 col-xs-6 col-6">
                                    <div class="product-lt">
                                        <div class="lt-product-image">
                                            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                                                <img class="img-p" src="assets/upload/products/<?php echo $rows->photo; ?>" alt="">
                                            </a>
                                            <div class="discount">
                                                <span class="text-discount">Giảm <?php echo $rows->discount; ?>%</span>
                                            </div>
                                        </div>
                                        <div class="lt-product-info">
                                            <a href="">
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
                                                        ?>₫
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="clearfix"></div>
                            <div class="text-center pull-right">
                                <ul class="pagination">
                                    <li class="hidden-xs">
                                        <a>Trang</a>
                                    </li>
                                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                                        <li class="page-item"><a href="index.php?controller=productss&action=categories&catid=<?php echo $catid ?>&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>