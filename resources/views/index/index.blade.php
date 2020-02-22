<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<!-- header & Banner -->
{{--<div class="header">--}}
{{--    <nav class="navbar navbar-default">--}}
{{--        <div class="container">--}}
{{--            <!-- Brand and toggle get grouped for better mobile display -->--}}
{{--            <div class="navbar-header">--}}
{{--                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
{{--                    <span class="sr-only">Toggle navigation</span>--}}
{{--                    <span class="icon-bar"></span>--}}
{{--                    <span class="icon-bar"></span>--}}
{{--                    <span class="icon-bar"></span>--}}
{{--                </button>--}}
{{--                <h1><a class="navbar-brand" href="#">ROVE</a></h1>--}}
{{--            </div>--}}

{{--            <!-- Collect the nav links, forms, and other content for toggling -->--}}
{{--            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
{{--                <ul class="nav navbar-nav">--}}
{{--                    <li><a href="#">Home</a></li>--}}
{{--                    <li><a href="#aboutus" class="page-scroll">About Us</a></li>--}}
{{--                    <li><a href="#team" class="page-scroll">Team</a></li>--}}
{{--                    <li><a href="#services" class="page-scroll">Services</a></li>--}}
{{--                    <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>--}}
{{--                    <li><a href="#gallery" class="page-scroll">Gallery</a></li>--}}
{{--                    <li><a href="#contactus" class="page-scroll">Contact Us</a></li>--}}
{{--                </ul>--}}

{{--                <ul class="nav navbar-nav navbar-right">--}}
{{--                    <ul class="nav pull-right">--}}
{{--                        <li class="dropdown" id="menuLogin">--}}
{{--                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>--}}
{{--                            <div class="dropdown-menu">--}}
{{--                                <form action="#" method="post">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" name="name" placeholder="Username" required="">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="password" name="password" placeholder="Password" required=""><br>--}}
{{--                                    </div>--}}
{{--                                    <button type="submit" id="btnLogin" class="btn">Login</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                </ul>--}}
{{--            </div><!-- /.navbar-collapse -->--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </nav>--}}
{{--</div>--}}

<div class="w3banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="/images/2.jpg" class="img-responsive" alt="First slide">

            </div>
            <div class="item">
                <img src="/images/1.jpg" class="img-responsive" alt="Second slide">

            </div>
            <div class="item">
                <img src="/images/3.jpg" class="img-responsive" alt="Third slide">

            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <div class="main-text">
        <div class="w3l_bannerinfo">
            <h3>
{{--                偷别人的架子我也就只能做成这了--}}
            </h3>
            <h3>
{{--                祝手术成功--}}
            </h3>
        </div>
    </div>
</div>

<!-- /header & Banner -->

<!-- popup for sign up form -->
<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="small-dialog2" class="mfp-hide book-form">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Sign Up</h3>
                <form action="#" method="post">
                    <input type="text" name="Name" placeholder="Your Name" required="" />
                    <input type="email" name="Email" class="email" placeholder="Email" required="" />
                    <input type="password" name="Password" id="password1" class="password" placeholder="Password" required="" />
                    <input type="password" name="Password" id="password2" class="password" placeholder="Confirm Password" required="" />
                    <input type="submit" value="Sign Up">
                </form>
            </div>
        </div>
    </div>
</div>

<!--Contact-->
<div class="contactUs" id="contactus">
    <h2 style="text-align: center"> 目前仅支持邮箱邮件 </h2>
    <div style="text-align: center">
        <image src ="/images/1111.jpg"></image>
    </div>

    <section id="contact">
        <div class="container">
            <div class="col-md-6 agile_contact">
                <form action="{{'/index/send'}}" method="post">

                    <div class="form-group" style="margin-top: 50px;">
                        <label>邮箱</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder=" 请输入邮箱 " required="">

                    </div>

            </div>
            <div class="col-md-6 agile_contact">
                <div class="form-group">
                    <label> 内容</label>
                    <textarea name="text" placeholder="说点什么？"></textarea>
                </div>
                <div>
                    <input type="submit" value="Send Message">
                </div>

            </div>
            <div class="clearfix"></div>
            </form>
        </div>


    </section>
</div>
<!--/Contact-->
<!---<div class="map">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509915.939484077!2d-123.79728565006775!3d37.1843152587944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C+USA!5e0!3m2!1sen!2sin!4v1509946591019" style="border:0" allowfullscreen></iframe>
 </div>--->

<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/move-top.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/grayscale.js"></script>
<script src="/js/SmoothScroll.min.js"></script>
<script src="/js/jquery.flexslider.js"></script>

<!--Start-slider-script-->
<script type="text/javascript">

    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
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

<!--gallery-js -->
<script src="/js/jquery.picEyes.js"></script>
<script>
    $(function(){
        //picturesEyes($('.demo li'));
        $('.demo li').picEyes();
    });
</script>
<!--//gallery-js -->


</body>
</html>