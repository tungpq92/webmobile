<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ TH-Mobile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <script  src="js/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/category.css">
    <link rel="icon" type="image/x-icon" href="public/images/cart2.png">
    <link href="public/css/owl.carousel.min.css" rel="stylesheet">
    <script src="public/js/jquery-2.2.3.min.js"></script>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Về đầu trang">&#9650;</button>
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- HEADER AND MENu -->
        <?php
            include "views/home/header.php";
            include "views/home/menu.php"
        ?>
        <!-- PRODUCT VIEW -->
        <section id="product-all" class="collection">
            <div class="banner-product">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="public/images/sp.png">
                    </div>
                </div>
            </div>
            <div class="slider">
                <?php echo $this->view; ?>
            </div>
        </section>
         <!-- FOOTER -->
        <?php include "views/home/footer.php"; ?>
    </div>
    <!-- End wrapper-->
    <script src="public/js1/index.js"></script>
    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/owl.carousel.js"></script>
    <script src="public/js/jquery.jcarousel.js"></script>
    <script src="public/js/jcarousel.connected-carousels.js"></script>
    <script src="public/js/custom-owl.js"></script>
    <script src="public/js/jquery.flexslider.js"></script>
    
</body>
</html>