<div class="panel-left" style="background: #0f9ed8;">
    <!--MOBILE-->
    <nav class="navbar navbar-default hidden-md hidden-lg" role="navigation">
        <div class="container-fluid" style="background-color: #0f9ed8;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar primary-color"></span>
                    <span class="icon-bar primary-color"></span>
                    <span class="icon-bar primary-color"></span>
                </button>
                <a class="navbar-brand" style="color: #fff;" href="#">Danh mục sản phẩm</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse hidden-md hidden-lg">
                <ul class="nav navbar-nav">
                    <?php foreach ($data as $rows) : ?>
                    <li class="dropdown">
                        <a href="index.php?controller=products&action=categories&catid=<?php echo $rows->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $rows->name; ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            //lay cac danh muc cap con
                                $subCategory = DB::fetchAll("SELECT * FROM categories WHERE parent_id = ".$rows->id." ORDER BY id");
                                foreach($subCategory as $subRows):
                             ?>
                            <li><a href="index.php?controller=products&action=categories&catid=<?php echo $subRows->id; ?>"><?php echo $subRows->name; ?></a></li>
                            <?php endforeach ; ?>
                        </ul>
                    </li>
                    <?php endforeach ; ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!--MD LG-->
</div>
<div class="col-md-12 col-lg-12 panel-right hidden-xs text-center" style="background: #0f9ed8;">
    <ul class="menu-right" style="display: inline-block;">
        <li class="pull-left"><a href="index.php">Trang chủ</a></li>
        <li class="pull-left"><a href="/collections/all">Sản phẩm</a></li>
        <?php foreach($data as $rows): ?>
            <li class="pull-left"><a href="index.php?controller=products&action=categories&catid=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
        <?php endforeach; ?>
        <li class="pull-left"><a href="index.php?controller=news&action=categories&catid=<?php echo $rows->id; ?>">Tin tức</a></li>
        <!-- <li class="pull-left"><a href="">Giới thiệu</a></li>
        <li class="pull-left"><a href="index.php?controller=contact&action=categories&catid=<?php echo $rows->id; ?>">Liên hệ</a></li> -->
    </ul>
</div>


