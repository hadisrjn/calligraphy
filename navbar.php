<?php
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="arillo is responsive html real estate theme">
    <meta name="author" content="afriq yasin ramadhan">
    <title>آموزش خوشنویسی</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!--header-->
<div class="header">
    <div class="welcoming ">
        <p class="register-header">به فروشگاه ما خوش آمدید<a href="register.html" class="signup" data-toggle="modal" data-target="#modal-signup">ثبت نام</a>
            <a href="#modal-signin"  class="signin" data-toggle="modal" data-target="#modal-signin">ورود به سایت</a></p>
        <h3 class="header-name">آموزش خوشنویسی</h3>
        <div class="nav navbar-nav navbar-left header-two-left">
            <div class="header-left cart">
                <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                <h4><a href="pages/checkout.php">
                        <span class="simpleCart_total"> 0,0 ریال </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)
                    </a></h4>
                <div class="cart-box">
                    <p><a href="pages/checkout.php" class="simpleCart_empty">
                            سبد خرید خالی</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default navbar-fixed page-nav" role="navigation" style="margin-top: 6rem">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-top">
            <ul class="nav navbar-nav">
                <li><a href="iindex.php">صفحه اصلی</a></li>
                <li><a href="#partner  exercise">تمرین آنلاین</a></li>
                <li><a href="pages/packages.php" >پکیج های آموزشی</a></li>
                <li><a href="pages/films.php" >فیلم های آموزشی</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="modal fade" id="modal-signin" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ورود</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="emailAddress">ایمیل</label>
                        <input type="email" class="form-control input-lg" placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                        <label for="password">کلمه عبور</label>
                        <input type="password" class="form-control input-lg" placeholder="کلمه عبور">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="forget"> مرا بخاطر بسپار
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p>آیا ثبت نام نکرده اید ? <a href="#modal-signup"  data-toggle="modal" data-target="#modal-signup">ثبت نام</a></p>
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="ورود به سایت">
            </div>
        </div>
    </div>
</div>
<!-- end:modal-signin -->

<!-- begin:modal-signup -->
<div class="modal fade" id="modal-signup" tabindex="-1" role="dialog" aria-labelledby="modal-signup" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ثبت نام</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="ایمیل" class="form-control input-lg" placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                        <input type="کلمه عبور" class="form-control input-lg" placeholder="کلمه عبور">
                    </div>
                    <div class="form-group">
                        <input type="تکرار کلمه عبور" class="form-control input-lg" placeholder="تکرار کلمه عبور">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="agree"> آیا با قوانین <a href="#">سایت ما موافق هستید؟</a>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p>آیا ثبت نام کرده اید؟ <a href="#modal-signin" data-toggle="modal" data-target="#modal-signin">ورود به سایت.</a></p>
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="ثبت نام">
            </div>
        </div>
    </div>
</div>
<!-- end:modal-signup -->
</body>
</html>

