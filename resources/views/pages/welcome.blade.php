<!DOCTYPE html>
<html lang="en">

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Social Parking">
        <meta name="author" content="Tukang Parkir">

        <title>Parkirin - Indonesia's Sharing Parking</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css") }}">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset("css/stylish-portfolio.css") }}">

        <!-- Custom Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset("font-awesome/css/font-awesome.min.css") }}">
        <link rel="stylesheet" type="text/css" href="{{ asset("http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic") }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    </head>
    <body>
        <!-- Navigation -->
        <!--
        <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
        
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="#top"  onclick = $("#menu-close").click(); >Start Bootstrap</a>
                </li>
                <li>
                    <a href="#top" onclick = $("#menu-close").click(); >Home</a>
                </li>
                <li>
                    <a href="#about" onclick = $("#menu-close").click(); >About</a>
                </li>
                <li>
                    <a href="#services" onclick = $("#menu-close").click(); >Services</a>
                </li>
                <li>
                    <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
                </li>
                <li>
                    <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
                </li>
            </ul>
        </nav>
        -->

        <!-- Header -->
        <header id="top" class="header">
            <div class="text-vertical-center">
                <h1>Parkir<i>in</i></h1>
                <h3>Mencari tempat parkir tidak pernah semudah ini</h3>
                <br>
                <a href="#" class="btn btn-dark btn-lg">Register - Live 17 Agustus 2015</a>
            </div>
        </header>

        <!-- About -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Parkir<i>in</in>: <small><i>(kata kerja)</i> membantu memarkir kenderaan</small></h1>
                        <p class="lead">Kami menyediakan platform yang membantu Anda mencari tempat parkir</p>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <!-- Services -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

        <section id="services" class="services bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2>Layanan Parkir<i>in</i></h2>

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                                </span>
                                    <h4>
                                        <strong>Terawang</strong>
                                    </h4>
                                    <p>Cari tempat parkir yang terdekat dari posisi Anda</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-compass fa-stack-1x text-primary"></i>
                                </span>
                                    <h4>
                                        <strong>Dadakan</strong>
                                    </h4>
                                    <p>Setiap saat, kapanpun Anda butuhkan</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-flask fa-stack-1x text-primary"></i>
                                </span>
                                    <h4>
                                        <strong>Langganan</strong>
                                    </h4>
                                    <p>Sudah cocok dengan lokasinya? kenapa tidak berlangganan saja</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-shield fa-stack-1x text-primary"></i>
                                </span>
                                    <h4>
                                        <strong>Gratisan</strong>
                                    </h4>
                                    <p>Semakin sering parkir semakin untung</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <h4><strong>Hubungi kami</strong>
                        </h4>
                        <p>Punya pertanyaan tentang layanan kami? Ayo mengobrol, kami siap membantu</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-envelope-o fa-fw"></i><a href="mailto:teampemburuparkir@gmail.com">teampemburuparkir@gmail.com</a>
                            </li>
                        </ul>
                        <br>
                        <ul class="list-inline">
                            <li>
                                <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                            </li>
                        </ul>
                        <hr class="small">
                        <p class="text-muted">Copyright &copy; Abang Tukang Parkir 2015</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Scrolls to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
        </script>
    </body>
</html>