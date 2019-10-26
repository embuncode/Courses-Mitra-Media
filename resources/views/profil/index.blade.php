@extends('template.layouts.apps')
@section('content')

<!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Profil</h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="about-us.html">Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start About Area =================-->
    <section class="about_area section_gap">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" style="width: 510px; height: 370px;" src="{{url ('mitra/img/about.png')}}" alt="" />
            </div>
          </div>

          @foreach ($pengaturans as $pengaturan)
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Selamat Datang di Mitra Media</h4>
                <p>
                    {!! $pengaturan->deskripsi !!}
                </p>
                <a class="primary-btn" href="/kontak">
                  Kontak Kami <i class="ti-arrow-right ml-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End About Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top title-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Visi Dan Misi</h2>
              <p>
                Mitra media memiliki Visi dan Misi sebagai berikut.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2 text-center">Visi</h4>
                <p>
                  {{ $pengaturan->visi }}
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2 text-center">Misi</h4>
                <p>
                  {{ $pengaturan->misi }}
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2 text-center">Keunggulan</h4>
                <p>
                  {{ $pengaturan->keunggulan }}
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2 text-center">Sambutan</h4>
                <p>
                  {{ $pengaturan->sambutan }}
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

    @endforeach

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Kerja Sama Mitra Media</h2>
              <p>
                Beberapa Perusahaan Yang Berkolaborasi Dengan Mitra Media
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">

            @foreach ($kerjasamas as $kerjasama)
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="{{ URL ($kerjasama->gambar) }}" style="width: 150px; height: 150px;" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text text-center">
                    <h4>{{ $kerjasama->nama }}</h4>
                    <p>
                      {{ $kerjasama->deskripsi }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
    <!--================ End Testimonial Area =================-->

@endsection