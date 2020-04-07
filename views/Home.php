<?php
    // Load layout index
    $layout = "Layout_Index.php";
?>
<section id="menu-slider" style="border-top:1px solid #fff;">
    <!-- SLIDER -->
    <?php
    include "controllers/C_Home/SlidersHomeController.php";
        $obj = new SlidersHomeController();
        $obj->index();
    ?>
    <!-- end slider -->
    <!-- --------------------------------------------------------------- -->

    <!-- PRODUCT SALE HOME -->
    <?php
    include "controllers/C_Home/ProductHomeController.php";
        $obj = new ProductHomeController();
        $obj->index();
    ?>
</section>

<!-- HOT PRODUCT HOME -->
<div id="content">
    <?php
    include "controllers/C_Home/HotProductController.php";
        $obj = new HotProductController();
        $obj->index();
    ?>
</div>
<!-- END PRODUCT HOME -->
<!-- NEWS HOME -->
<div class="home-blog">
    <?php
    include "controllers/C_Home/NewsHomeController.php";
        $obj = new NewsHomeController();
        $obj->index();
    ?>
</div>
<!-- END NEWS HOME -->