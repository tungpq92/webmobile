<div class="slider">
    <div class="container">
        <?php
            //san pham noi bat
            $data = DB::fetchAll("SELECT * FROM sliders WHERE hot=1 ORDER BY id ASC LIMIT 0,5");
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 slider-main pull-left">
            <div class="owl-carousel-slider owl-carousel owl-theme">
                <?php foreach ($data as $rows) : ?>
                    <div class="item"><img src="assets/upload/products/<?php echo $rows->photo; ?>"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>