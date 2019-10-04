<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{ url ('assets-user/images/mitra.png') }}">
    <title>Selamat Datang di LKP Mitra Media</title>

    <!-- core CSS -->
    <link href="{{ url ('assets-user/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url ('assets-user/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url ('assets-user/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url ('assets-user/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ url ('assets-user/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url ('assets-user/css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ url ('assets-user/css/main.css') }}" rel="stylesheet">
    <link href="{{ url ('assets-user/css/responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body class="homepage">

	<!-- Include Header -->
    @include('user.template.include.header')
    <!-- /End Include Header -->

    <!-- Include Content -->
    @yield('content')
    <!-- /End Include Content -->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Memiliki pertanyaan atau tanggapan?</h2>
                            <p>Silahkan hubungi admin mitra media di nomor ini 0812-8088-357 / 0813-6614-4485 atau dapat langsung mengklik Icon WA yang ada di pojok kanan bawah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section>

    <!-- Include Footer -->
	@include('user.template.include.footer')
	<!-- /End Include Footer -->

    <script src="{{ url ('assets-user/js/share.js') }}"></script>
    <script src="{{ url ('assets-user/js/jquery.js') }}"></script>
    <script src="{{ url ('assets-user/js/bootstrap.min.js') }}"></script>
    <script src="{{ url ('assets-user/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url ('assets-user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url ('assets-user/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ url ('assets-user/js/main.js') }}"></script>
</body>

</html>