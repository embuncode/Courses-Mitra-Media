<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="{{ url ('mitra/img/favicon.png') }}" type="image/png" />
    <title>Mitra Media - Lembaga Kursus dan Pelatihan Komputer dan Jaringan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url ('mitra/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url ('mitra/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ url ('mitra/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ url ('mitra/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url ('mitra/vendors/nice-select/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ url ('mitra/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{ url ('mitra/css/style.css') }}" />
    </head>
    <body>

    <!-- Include header -->
        @include('template.layouts.includes.headers')
    <!-- End include header -->

    <!-- Include Content -->
        @yield('content')
    <!-- End include content -->    

    <!-- Include footer -->
        @include('template.layouts.includes.footer')
    <!-- End include footer -->    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url ('mitra/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url ('mitra/js/popper.js') }}"></script>
    <script src="{{ url ('mitra/js/bootstrap.min.js') }}"></script>
    <script src="{{ url ('mitra/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url ('mitra/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url ('mitra/js/owl-carousel-thumb.min.js') }}"></script>
    <script src="{{ url ('mitra/js/jquery.ajaxchimp.min.j') }}s"></script>
    <script src="{{ url ('mitra/js/mail-script.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ url ('mitra/js/gmaps.min.js') }}"></script>
    <script src="{{ url ('mitra/js/theme.js') }}"></script>
    </body>
</html>
