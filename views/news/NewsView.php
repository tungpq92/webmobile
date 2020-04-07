<?php 
	$layout = "Layout_Category.php";
 ?>
<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <?php
            //load mvc bang tay
            include "controllers/NewsCategoriesController.php";
            $obj = new NewsCategoriesController();
            $obj->index();
        ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content" id="list-content">
	    <div class="product-wrap">
	        <div class="news-boxs">
	        	<?php 
	        		$data = DB::fetchAll("SELECT * FROM news WHERE hot = 1 ORDER BY id DESC LIMIT 0,3")
	        	 ?>
	        	 <?php foreach($data as $rows) : ?>
	            <div class="list-news clearfix">
	                <div class="list-news-group">
	                    <a class="list-news-img" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>">
	                    <img src="assets/upload/products/<?php echo $rows->photo; ?>">
	                    </a>
	                    <div class="list-news-info">
	                        <h3><a class="list-news-tit" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" title=""><?php echo $rows->name; ?></a></h3>
	                        <div class="list-news-txt"></div>
	                        <p class="list-news-bot">
	                            <span><?php echo $rows->create_at; ?></span>
	                        </p>
	                    </div>
	                </div>
	            </div>
	        	<?php endforeach; ?>
	        </div>
	    </div>
	</div>
</div>