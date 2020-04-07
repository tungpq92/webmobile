
<div class="list-menu pull-left col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="widget" style="margin: 0px; min-height: 0px;">
        <p>Danh mục sản phẩm</p>
        <ul class="main-ul">
        	<?php foreach($data as $rows): ?>
            <li>
            	<a href="index.php?controller=products&action=categories&catid=<?php echo $rows->id; ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i></a>
                <ul class="sub">
                	<?php
    	                //lay cac danh muc cap con
                        $subCategory = DB::fetchAll("SELECT * FROM categories WHERE parent_id = ".$rows->id." ORDER BY id");
                        foreach($subCategory as $subRows):
    	            ?>
                    <li>
                    	<a href="index.php?controller=products&action=categories&catid=<?php echo $subRows->id; ?>" title="<?php echo $subRows->name; ?>"><?php echo $subRows->name; ?></a>
                    </li>
                	<?php endforeach; ?>
                </ul>
            </li>
        	<?php endforeach ; ?>
        </ul>
    </div>
    <div class="widget">
    <p>Bài viết mới nhất</p>
    <div class="tab-container ">
        <?php
            //sản phẩm khuyến mại hot
            $data = DB::fetchAll("SELECT * FROM news WHERE hot=1 ORDER BY id DESC LIMIT 0,3");
        ?>
        <?php foreach ($data as $rows) : ?>
        <div class="spost clearfix">
            <div class="entry-image e-img">
                <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="nobg a-circle">
                <img class="img-circle-custom" src="assets/upload/products/<?php echo $rows->photo; ?>" alt="<?php echo $rows->photo; ?>">
                </a>
            </div>
            <div class="entry-c">
                <div class="entry-title e-title">
                    <h4>
                        <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                    </h4>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
</div>
