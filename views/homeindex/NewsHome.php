<div class="container">
    <div class="row-p">
        <div class="text-center">
            <h2 class="title">Tin tức công nghệ</h2>
        </div>
    </div>
    <?php
        $data = DB::fetchAll("SELECT * FROM news WHERE hot=1 ORDER BY id DESC LIMIT 0,3");
    ?>
    <?php foreach ($data as $rows) : ?>
	    <div class="blog-content">
	        <div class="col-xs-12 col-12 col-sm-6 col-md-4 col-lg-4">
	            <div class="latest">
	                <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>">
	                    <div class="tempvideo">
	                        <img width="98%" src="assets/upload/products/<?php echo $rows->photo; ?>">
	                    </div>
	                    <h3 style="color: #999; font-size:20px;"><?php echo $rows->name; ?></h3>
	                </a>
	            </div>
	        </div>
	    </div>
	<?php endforeach; ?>
</div>