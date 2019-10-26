@extends('template.layouts.app')
@section('content')


 <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content">
                <h2 class="text-uppercase">
                  LKP. MITRA MEDIA
                </h2>
                <p class="text-uppercase mt-4 mb-5">
                  LEMBAGA KURSUS DAN PELATIHAN KOMPUTER DAN JARINGAN
                </p>
                <div>
                  <a href="#" class="primary-btn2 mb-3 mb-sm-0">Kontak Kami</a>
                  <a href="#" class="primary-btn ml-sm-3 ml-0">Lihat Kursus</a>
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
              <h2 class="mb-3">Fasilitas Mitra Media</h2>
              <p>
                Mitra Media memiliki banyak fasilitas demi kenyamanan belajar.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><img src="{{ url ('mitra/fonts/responsive.svg') }}" height="50px" width="50px" alt=""></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Alat Yang Memadai</h4>
                <p>
                  Peralatan yang disediakan sudah memadai
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><img src="{{ url ('mitra/fonts/css.svg') }}" height="50px" width="50px" alt=""></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Modul dan Konsultasi</h4>
                <p>
                  Memiliki Modul serta dapat konsultasi ke mentor
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><img src="{{ url ('mitra/fonts/house.svg') }}" height="50px" width="50px" alt=""></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Tempat Strategis</h4>
                <p>
                  Tempat yang nyaman dan tepat untuk belajar
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><img src="{{ url ('mitra/fonts/wifi.svg') }}" height="50px" width="50px" alt=""></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Akses Internet</h4>
                <p>
                  Mendapatkan akses internet gratis dan cepat
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><img src="{{ url ('mitra/fonts/editor.svg') }}" height="50px" width="50px" alt=""></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">1 Siswa 1 Alat Praktek</h4>
                <p>
                  Setiap peserta mendapatkan 1 alat untuk praktek
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon text-center"><img src="{{ url ('mitra/fonts/medal.svg') }}" height="50px" width="50px" alt=""></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Bersertifikat</h4>
                <p>
                  Bersertifikat bukti telah menyelesaikan kursus
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

    <!-- <div class="wrap-hubungi-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="center"><strong>Siapa yang dapat mengikuti Kursus di <span class="redcolor">Mitra Media</span> ?</strong></h2>
                  <div class="row">
                      <div class="col-md-3">
                          <div class="feature-box">
                              <div class="feature-box-info">
                                  <div class="center">
                                      <img src="http://technolab.id/templates/technolab/img/icon-mahasiswa.png">
                                  </div>
                                  <h4 class="shorter center">Mahasiswa &amp; Pelajar</h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="feature-box">
                              <div class="feature-box-info">
                                  <div class="center">
                                      <img src="http://technolab.id/templates/technolab/img/icon-business.png">
                                  </div>
                                  <h4 class="shorter center">Pemilik Bisnis</h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="feature-box">
                              <div class="feature-box-info">
                                  <div class="center">
                                      <img src="http://technolab.id/templates/technolab/img/icon-karyawan.png">
                                  </div>
                                  <h4 class="shorter center">Karyawan Perusahaan</h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="feature-box">
                              <div class="feature-box-info">
                                  <div class="center">
                                      <img src="http://technolab.id/templates/technolab/img/icon-umum.png">
                                  </div>
                                  <h4 class="shorter center">Umum</h4>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div> -->
    
    <!-- ======================== Start Trainers Mitra Media ====================== -->
    <section class="trainer_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Pengajar Mitra Media</h2>
              <p>
                Mitra Media Memiliki Pengajar Yang Ahli Di Bidangnya
              </p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center d-flex align-items-center">
          @foreach ($pengajars as $post)
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              @if ($post->picture == null)
                <img style="width: 223px; height: 263px;" src="/admin/image/pengajar/animation.gif">
              @else  
                  <img class="img-fluid" style="width: 290px; height: 250px;" src="{{ $post->picture }}">
              @endif
            </div>
            <div class="meta-text text-sm-center">
              <h4>{{ $post->nama_lengkap }}</h4>
              <p class="designation">{{ $post->keahlian }}</p>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        </div>
      </div>
    </section>

@endsection