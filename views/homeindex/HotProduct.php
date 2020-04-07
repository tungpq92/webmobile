<div class="container">
    <?php foreach ($data as $rowsCategory) : ?>
        <div class="list-product">
            <div class="list-header">
                <h2><a href="index.php?controller=products&action=categories&catid=<?php echo $rowsCategory->id; ?>" style="text-decoration: none;"><?php echo $rowsCategory->name; ?> nổi bật</a></h2>
                <ul class="sub-category">
                    <?php
                        //lay cac danh muc cap con
                        $subCategory = DB::fetchAll("SELECT * FROM categories WHERE parent_id = ".$rowsCategory->id." ORDER BY id");
                        foreach($subCategory as $subRows):
                    ?>
                    <li>
                        <a href="index.php?controller=products&action=categories&catid=<?php echo $subRows->id; ?>" title="<?php echo $subRows->name; ?>" class="ws-nw overflow ellipsis"><?php echo $subRows->name; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="product-container">
                <?php
                    $dataProduct = DB::fetchAll("SELECT * FROM products WHERE hot = 1 AND category_id = $rowsCategory->id ORDER BY id DESC LIMIT 0,5");
                ?>
                <?php foreach ($dataProduct as $rowsProduct) : ?>
                    <div class="p-box-5">
                        <div class="product-lt">
                            <div class="lt-product-image">
                                <a href="index.php?controller=products&action=detail&id=<?php echo $rowsProduct->id; ?>" title="Samsung Galaxy S10+ (Plus) Green">
                                    <img class="img-p" src="assets/upload/products/<?php echo $rowsProduct->photo; ?>" alt="">
                                </a>
                                <div class="discount">
                                    <span class="text-discount">Giảm 10%</span>
                                </div>
                            </div>
                            <div class="lt-product-info">
                                <a href="index.php?controller=products&action=detail&id=<?php echo $rowsProduct->id; ?>" style="text-align: left;">
                                    <h3><?php echo $rowsProduct->name; ?></h3>
                                </a>
                                <div class="price-box">
                                    <p class="old-price">
                                        <span class="price"><?php echo number_format($rowsProduct->price,0,',','.'); ?>₫</span>
                                    </p>
                                    <p class="special-price">
                                        <span class="price">
                                            <?php
                                            if($rowsProduct->discount > 0)
                                            {
                                                $newPrice = ($rowsProduct->price * $rowsProduct->discount)/100;
                                                echo number_format($rowsProduct->price - $newPrice,0,',','.');
                                            }
                                            else
                                            {
                                                echo number_format($rowsProduct->price,0,',','.');
                                            }
                                         ?>₫
                                     </span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>