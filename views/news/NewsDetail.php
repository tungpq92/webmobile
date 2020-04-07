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
	    <div class="product-wrap" id="info-content">
	        <?php foreach($data as $rows) : ?>
				<div class="content-ct">
					<div class="fs-ne2-it clearfix" style="padding-top: 5px">
						<div class="fs-ne2-it clearfix">
							<div class="entry-title">
								<h3><?php echo $rows->name; ?></h3>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="fa fa-calendar" style="margin-right: 5px"></i><?php echo $rows->create_at; ?></li>
							</ul>
						</div>
						<div class="introtext">
							<h4 style="font-size: 24px;"><?php echo $rows->description; ?></h4>
						</div>
						<div class="entry-content">
							<p><?php echo $rows->content; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
	    </div>
	</div>
</div>