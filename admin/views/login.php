<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ShopDienThoai</title>
    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">
    <!-- App CSS -->
    <link type="text/css" href="public/css/app.css" rel="stylesheet">
    <link type="text/css" href="public/css/app.rtl.css" rel="stylesheet">
    <!-- Simplebar -->
    <link type="text/css" href="public/vendor/simplebar.css" rel="stylesheet">
</head>
<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable" style="overflow-y: auto;" data-simplebar data-simplebar-force-enabled="true">


            <div class="container h-vh d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <a href="index.html" class="drawer-brand-circle mr-2">S</a>
                    <h2 class="ml-2 text-bg mb-0"><strong>Shop Dien Thoai</strong></h2>
                </div>
                <div class="row w-100 justify-content-center">
                    <div class="card card-login mb-3">
                        <div class="card-body">
                            <form action="index.php?controller=login&action=checkLogin" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>

                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">account_circle</i>
                                        </div>
                                        <input type="email" class="form-control" name="email" value="" placeholder="phamquangtung04041992@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex">
                                        <label>Password</label>
                                    </div>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="********">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Đăng Nhập" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function() {
            'use strict';

            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit();
        });
    </script>
</body>
</html>