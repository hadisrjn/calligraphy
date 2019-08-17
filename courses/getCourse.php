<?php
/**
 * Created by PhpStorm.
 * User: Silver laptop
 * Date: 8/12/2019
 * Time: 17:54
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="arillo is responsive html real estate theme">
    <meta name="author" content="afriq yasin ramadhan">


    <title>Arillo</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
    <style>
        *{
            margin:0;padding:0;font-family:sans-serif;color: #957539;
        }
        canvas{
            background-image: url("../img/alefba/آ.png");
            margin-right: 29rem;
        }

    </style>
</head>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<body id="top">

<!-- begin:navbar -->
<?php require_once 'coursesNav.php'?>
<!-- end:navbar -->

<!-- begin:content -->
<div id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-9 col-md-push-3">
                <div class="row">
                    <div class="col-md-12">
                        <canvas width="80" height="80" id="canvas" type="hidden">canvas</canvas>
                        <script>
                            var canvas = document.querySelector( 'canvas' ),
                                c = canvas.getContext( '2d' ),
                                mouseX = 0,
                                mouseY = 0,
                                width = 400,
                                height = 400,
                                colour = 'black',
                                mousedown = false;

                            // resize the canvas
                            canvas.width = width;
                            canvas.height = height;

                            function draw() {
                                if (mousedown) {
                                    // set the colour
                                    c.fillStyle = colour;
                                    // start a path and paint a circle of 20 pixels at the mouse position
                                    c.beginPath();
                                    c.arc( mouseX, mouseY, 5 , 0, Math.PI*2, true );
                                    c.closePath();
                                    c.fill();
                                }
                            }

                            // get the mouse position on the canvas (some browser trickery involved)
                            canvas.addEventListener( 'mousemove', function( event ) {
                                if( event.offsetX ){
                                    mouseX = event.offsetX;
                                    mouseY = event.offsetY;
                                } else {
                                    mouseX = event.pageX - event.target.offsetLeft;
                                    mouseY = event.pageY - event.target.offsetTop;
                                }
                                // call the draw function
                                draw();
                            }, false );

                            canvas.addEventListener( 'mousedown', function( event ) {
                                mousedown = true;
                            }, false );
                            canvas.addEventListener( 'mouseup', function( event ) {


                                mousedown = false;
                            }, false );

                            var link = document.createElement('a');
                            document.body.appendChild(link);
                        </script>
                    </div>
                </div>
            </div>
        <!--begin sidebar -->
                <?php require_once 'coursesidebar.php'?>
         <!--begin sidebar -->
        </div>
    </div>
</div>
<!-- begin:footer -->
<?php require_once 'coursefooter.php'?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="../js/gmap3.min.js"></script>
<script src="../js/jquery.easing.js"></script>
<script src="../js/jquery.jcarousel.min.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/masonry.pkgd.min.js"></script>
<script src="../js/jquery.backstretch.js"></script>
<script src="../js/jquery.nicescroll.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->

