@extends('user.template.master')
@section('content')

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url({{ url ('assets-user/images/slider/bg1.png') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">LKP.MITRA MEDIA</h1>
                                    <div class="animation animated-item-2">
                                        Lembaga Kursus dan Pelatihan Komputer dan Jaringan.
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="#feature">Learn More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url({{ url ('assets-user/images/slider/bg2.jpg') }}">
                    
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url({{ url ('assets-user/images/slider/bg3.jpg') }}">
                  
                </div>
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <div class="wrap-hubungi-daftar">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="isi-hubungi-daftar">
                        <h3>"Sarana Menggapai Cita - Cita dengan 100% Praktek"</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btn-hubungi-daftar">
                        <a href="https://www.mitra-media.com/contact-us" title="Hubungi Mitra Media">Kontak Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="feature">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Paket Kursus</h2>
                <p class="lead"> www.mitra-media.com <br> Mitra Media menyediakan beberapa paket kursus diantaranya sebagai berikut;</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <img src="{{ url ('assets-user/images/services/paket1.png') }}">
                            </div>
                            <h2><b>PAKET 1</b></h2> 
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <img src="{{ url ('assets-user/images/services/paket2.png') }}">
                            </div>
                            <h2><b>PAKET 2</b></h2> 
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <img src="{{ url ('assets-user/images/services/paket3.png') }}">
                            </div>
                                <h2><b>PAKET 3</b></h2>                           
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <img src="{{ url ('assets-user/images/services/paket4.png') }}">
                            </div>
                                <h2><b>PAKET 4</b></h2> 
                        </div>
                    </div>
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->

            <div class="center fadeInDown">
                <h3>Untuk lebih jelasnya silahkan klik tombol button di bawah ini.</h3>
                <a href="/user/kursus" class="btn btn-primary">Show More</a>
            </div>

        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

    

    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Testimoni</h2>
                <p class="lead">Inilah testimoni dari para alumni dari LKP Mitra media</p>
            </div>
            <div class="testimonial-slider owl-carousel">
                @foreach ($alumni as $p)
                <div class="single-slide">
                    <div class="team-img">
                        <img src="{{ url ($p->picture) }}" style="height: 250px; width: 300px;" alt="">
                    </div>
                    <br>
                    <div class="content">
                        <p>{{ $p->testimoni }}</p>
                        <h4>{{ $p->nama }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

   @endsection