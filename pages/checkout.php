<?php
/**
 * Created by PhpStorm.
 * User: Silver laptop
 * Date: 8/14/2019
 * Time: 12:52
 */?>
<!DOCTYPE html>
<html>
<head>
    <title>قالب سایت فروشگاهی</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//for-mobile-apps -->
    <!--Custom Theme files -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//Custom Theme files -->
    <!--js-->
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/modernizr.custom.js"></script>
    <!--//js-->
    <!--cart-->
    <script src="../js/simpleCart.min.js"></script>
    <!--cart-->
    <!--web-fonts-->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
    <!--web-fonts-->
    <!--animation-effect-->

    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->


</head>
<body>
<!-- begin:navbar -->
<?php require_once '../courses/coursesNav.php'?>
<!-- end:navbar -->

<!--cart-items-->
<div class="cart-items">
    <div class="container">
        <h3>
            سبد خرید من (2)</h3>
        <div>
            <div class="alert-close"> </div>
            <div class="cart-sec simpleCart_shelfItem">
                <div class="cart-item cyc">
                    <a href="store.php"><img src="../img/package.png" class="img-responsive" alt=""></a>
                </div>
                <div class="cart-item-info">
                    <h3 ><a  href="store.php" class="package-seller" style="color: #353F61">پکیج آموزش خط نستعلیق</a></h3>
                    <ul class="qty">
                        <li><p>قیمت : </p></li>
                    </ul>
                    <div class="delivery">
                        <p>
                            هزینه ارسال: 7000 تومان</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div>
            <div class="alert-close"> </div>
            <div class="cart-sec simpleCart_shelfItem">
                <div class="cart-item cyc">
                    <a href="store.php"><img src="../img/package.png" class="img-responsive" alt=""></a>
                </div>
                <div class="cart-item-info">
                    <h4><a class="package-seller" href="store.php" class="package-seller" style="color: #353F61">پکیج آموزش خط نستعلیق</a></h4>
                    <ul class="qty">
                        <li><p>قیمت : </p></li>
                    </ul>
                    <div class="delivery">
                        <p>
                            هزینه ارسال: 7000 تومان</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--//cart-items-->
<!-- begin:footer -->
<?php require_once '../courses/coursefooter.php'?>
<!-- END:footer -->

<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!--search jQuery-->
<script src="../js/main.js"></script>
<!--//search jQuery-->
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--//smooth-scrolling-of-move-up-->
<!--Bootstrap core JavaScript
================================================== -->
<!--Placed at the end of the document so the pages load faster -->
<script src="../js/bootstrap.js"></script>
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</html>
