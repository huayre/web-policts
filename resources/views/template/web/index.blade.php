<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>JP | Irazola</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('template/web/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('template/web/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('template/web/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('template/web/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('template/web/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('template/web/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/web/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <style>
        .style-font {
            font-family: 'Luxurious Roman', cursive;
            font-size: 60px;
        }
    </style>
</head>
<!-- body -->

<body class="main-layout ">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('template/web/images/loading-jp.gif')}}" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header" style="border-bottom: #5cbf0a 4px solid;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo" style="padding: 0px;margin: 0px">
                                <a href="{{route('home-web')}}"><img src="{{asset('template/web/images/logo-jp.png')}}" style="height: 80px" alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="{{route('home-web')}}" class="style-font" style="font-size: 20px;font-weight: bold;">Inicio</a> </li>
                                    <li><a href="brand.html" class="style-font" style="font-size: 20px;font-weight: bold;">Conoce a Nelson Huayre</a></li>
                                    <li><a href="{{route('team-web')}}" class="style-font" style="font-size: 20px;font-weight: bold;">Regidores</a></li>
                                    <li><a href="contact.html" class="style-font" style="font-size: 20px;font-weight: bold;">Plan de Trabajo</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="location_icon_bottum">
                        <ul>
                            <li>Honestidad</li>
                            <li>Trabajo</li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<div>
    @yield('content')
</div>
<!-- end brand -->
<!-- clients -->
<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>what say our clients</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end clients -->
<!-- footer -->
<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-md-12 ">
                    <div class="footer-box">
                        <div class="headinga">
                            <h3>Address</h3>
                            <span>Healing Center, 176 W Streetname,New York, NY 10014, US</span>
                            <p>(+71) 8522369417
                                <br>demo@gmail.com</p>
                        </div>
                        <ul class="location_icon">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                        </ul>
                        <div class="menu-bottom">
                            <ul class="link">
                                <li> <a href="#">Home</a></li>
                                <li> <a href="#">About</a></li>

                                <li> <a href="#">Brand </a></li>
                                <li> <a href="#">Specials  </a></li>
                                <li> <a href="#"> Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>© 2019 All Rights Reserved. Design By<a href="https://html.design/"> Free Html Templates</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset('template/web/js/jquery.min.js')}}"></script>
<script src="{{asset('template/web/js/popper.min.js')}}"></script>
<script src="{{asset('template/web/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/web/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('template/web/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('template/web/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('template/web/js/custom.js')}}"></script>
<!-- javascript -->
<script src="{{asset('template/web/js/owl.carousel.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
</body>

</html>
