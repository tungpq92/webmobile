<div id="header">
    <div id="header-top">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-6" id="header-link">
                    <a class="fa fa-facebook" id="facebook"></a>
                    <a class="fa fa-twitter" id="twitter"></a>
                    <a class="fa fa-google" id="google"></a>
                    <a class="fa fa-youtube" id="youtube"></a>
                </div>
                <div class="col-md-6">
                    <nav id="header-nav-top">
                        <ul class="list-inline pull-right" id="headermenu">
                            <li><a href=""><i class="fa fa-user"></i>Đăng ký</a></li>
                            <li><a href="index.php?controller=contact&action=categories&catid=<?php echo $rows->id; ?>"><i class="fa fa-unlock"></i>Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- End header-top -->
    <div class="clearfix"></div>
    <div class="container">
        <div class="row" id="header-main">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="logo">
                <a href="index.php" title="Trang chủ cửa hàng điện thoại TH company" alt="Trang chủ cửa hàng điện thoại TH company">
                    <img src="public/img/logo-1.jpg">
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 search">
                <script type="text/javascript">
                    function search()
                    {
                        key = document.getElementById("key").value;
                        location.href = "index.php?controller=search&key=" + key;
                        return false;
                    }
                    function searchForm(event)
                    {
                        //neu keypress la enter
                        if (event.keyCode == 13)
                        {
                            key = document.getElementById("key").value;
                            //alert(key);
                            location.href = "index.php?controller=search&key=" + key;
                        }
                        return false;
                    }
                </script>
                    <div class="contact-row">
                        <form action="" method="get" role="form">
                            <div class="input-search">
                                <input type="text" onkeypress="searchForm(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
                                <button type="submit" onclick="return search();"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                <div class="tags">
                    <strong>Từ khóa:
                        <a >Samsung</a>
                        <a >iPhone</a>
                        <a >Oppo</a>
                        <a >LG</a>
                    </strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="tools-member">
                <div class="member">
                    <a href="" id="btnTaiKhoan">
                        <i class="fa fa-user"></i>
                        Tài khoản
                    </a>
                </div><!-- End Member -->
                <div class="cart">
                    <a href="index.php?controller=cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                        <span class="cart-number">
                        <?php
                            if(isset($_SESSION["cart"]))
                            {
                                echo count($_SESSION["cart"]);
                            }
                            else
                            {
                                echo "0";
                            }
                        ?>
                        </span>
                    </a>
                </div>
            </div>
        </div><!-- header-main -->
    </div>
</div><!-- End header -->