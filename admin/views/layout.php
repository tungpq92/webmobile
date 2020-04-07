<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Trang Quản Trị</title>
        <?php
            include "views/home/meta.php";
            include "views/home/css.php";
        ?>
    </head>
    <body>
        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px" data-has-scrolling-region>
            <?php include "views/home/layout-content.php";?>
             <!-- content -->
            <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
                <!-- main content -->
                <?php echo $this->view; ?>
            </div>
            <?php include "views/home/navbar.php";?>
        </div>
        <!-- // END drawer-layout -->
        <!-- jQuery -->
        <?php include "views/home/js.php"; ?>
    </body>
</html>