@extends('template.layouts.app')
@section('content')


 <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <h2 class="text-uppercase">
                  LKP. MITRA MEDIA
                </h2>
                <p class="text-uppercase mt-4 mb-5">
                  LEMBAGA KURSUS DAN PELATIHAN KOMPUTER DAN JARINGAN
                </p>
                <div>
                  <a href="#" class="primary-btn2 mb-3 mb-sm-0">contact us</a>
                  <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->
<!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Awesome Feature</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Scholarship Facility</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Sell Online Course</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Global Certification</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

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

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Paket Kursus Mitra</h2>
                        <p>
                            Mitra Media menyelenggarakan paket Kursus dan Pelatihan diantaranya adalah : 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="row gallery-item">
                        
                        @foreach($paketkursus as $paket)
                        <div class="col-md-4">
                            <div class="single_course">
                                <div class="course_head">
                                    <img style="width: 350px; height: 140px;" class="img-fluid" src="{{ URL ( $paket->gambar)}}"/>
                                </div>
                                <div class="course_content">
                                    <span class="price">$25</span>
                                    <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.html">{{ $paket->judul_kursus }}</a>
                                        </h4>
                                        <p>
                                          {{ $paket->tujuan }}
                                        </p>
                                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                        <div class="authr_meta">
                                            <img src="img/courses/author1.png" alt="" />
                                            <span class="d-inline-block ml-2">Cameron</span>
                                        </div>
                                        <div class="mt-lg-0 mt-3">
                                            <span class="meta_info mr-4">
                                                <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                            </span>
                                            <span class="meta_info">
                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach   

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

@endsection