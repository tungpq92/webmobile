<div class="clearfix"></div>
<section id="menu-slider">
    <div class="menu-pri">
        <?php
            include "controllers/CategoriesController.php";
            $obj = new CategoriesController();
            $obj->index();
        ?>
    </div>
</section>