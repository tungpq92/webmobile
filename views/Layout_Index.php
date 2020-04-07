<!DOCTYPE html>
<html>
<head>
    <title>
        <?php 
            if(isset($title))
                echo $title;
            else
                echo "TH - Mobile - Điện thoại, Tablet, Phụ kiện chính hãng";
        ?>
    </title>
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
    <link rel="icon" type="image/x-icon" href="public/images/cart2.png">
    <link href="public/css/owl.carousel.min.css" rel="stylesheet">
    <script src="public/js/jquery-2.2.3.min.js"></script>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Về đầu trang">&#9650;</button>
    <!-- WRAPPER -->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5e5bb08ba89cda5a1888bbb2/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
    <div class="wrapper">
        <!-- HEADER AND MENu -->
        <?php
            include "views/home/header.php";
            include "views/home/menu.php"
        ?>
        <!-- PRODUCT HOME -->
        <?php
            echo $this->view;
        ?>
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