@extends('user.template.master')
@section('content')

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
        <center>
            <h1 class="white"><b>Profil Mitra Media</b></h1>
        </center>
    </div>
</section>

    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-img">
                        <img src="{{ url ('assets-user/images/about-img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Tentang Kami :</h2>
                        <p>www.mitra-media.com</p>
                        <p><b>Mitra Media</b> adalah Sebuah Lembaga Pendidikan yang bergerak pada bidang Pelatihan dan Kursus Komputer atau Teknik Komputer dan Jaringan.</p>
                        <p><b>MITRA MEDIA </b> membuka kursus web design, kursus web programming, kursus digital marketing, kursus desain grafis, kursus administrasi perkantoran, dan kursus komputer lainnya seperti kursus animasi dan Kursus Desktop Programming di Lampung.</p>
                        <p>Untuk informasi pendaftaran, Hubungi = <b>0812-8088-357</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content" class="shortcode-item">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <!-- <h2>Profile</h2> -->
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                        Visi dan Misi
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>

                                <div id="collapseOne1" class="panel-collapse in" style="height: auto;">
                                    <div class="panel-body">
                                        <div class="media accordion-inner">
                                        <!-- <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div> -->
                                        <div class="media-body">
                                             <h4>Visi</h4>
                                             <p>Menjadi mitra terdepan dan terbaik dalam penyelenggaraan program pelatihan teknik komputer dan jaringan bagi siswa dan siswi, serta dapat memberikan layanan secara profesional untuk menyiapkan SDM yang berdaya saing tinggi.</p>
                                        </div>
                                        <div class="media-body">
                                             <h4>Misi</h4>
                                             <p>Menjalin kerjsama dengan dunia kerja, pemerintah dan masyarakat umum untuk melaksanakan pelatihan dalam bidang Komputer maupun Jaringan dan menyelenggarakan berbagai pelatihan secara profesional dan mandiri untuk mengembangkan sumber daya manusia yang berdaya saing tinggi dan kompeten di bidangnya.</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo5">
                                        Logo LKP
                                        <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo5" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        <img src="{{ url ('assets-user/images/mitra.png') }}" style="height: 100px; width: 100px;" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                        Keunggulan
                                        <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo1" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        <p>1. Bersertifikat</p>
                                        <p>2. Pengajar dari ahlinya</p>
                                        <p>3. Siswa di didik dari nol</p>
                                        <p>4. Mendapatkan T-shirt</p>
                                        <p>5. Praktek langsung ke alat</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree3">
                                        Sambutan
                                        <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree3" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Assalamualaikum warahmarullahi wabarakatuh.

                                        Bismillah kami membangun suatu lkp ini demi untuk memajukan anak bangsa langkah utama untuk menghadapi era revolusi 4.0.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2">
                                        Fasilitas
                                        <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo2" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        <p>1. Alat yang memadai</p>
                                        <p>2. Akses Internet</p>
                                        <p>3. 1 siswa 1 alat</p>
                                        <p>4. Tempat strategis</p>
                                        <p>5. Modul dan Konsultasi</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo4">
                                        Peraturan Kursus
                                        <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo4" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        <p>Mengucapkan salam/menegur apabila bertemu dengan sesama teman, kepala lembaga pendidikan, instruktur, dan  karyawan lembaga pendidikan di mana saja.</p>
                                        <p>Hormat dan patuh terhadap kepala pimpinan pendidikan, instruktur dan karyawan lembaga pendidikan.</p>
                                        <p>Menjaga nama baik lembaga pendidikan dan pelatihan, pimpinan lembaga pendidikan, instruktur, karyawan dan peserta kursus/pelatihan MITRA MEDIA</p>
                                        <p>Saling menghormati antar sesama peserta, menghargai perbedaan pendapat, menghargai perbedaan agama dan latar belakang budaya masing-masing.</p>
                                        <p>Menghormati ide, pikiran, hak cipta dan hak milik orang lain, teman dan warga lembaga pendidikan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                        Kontak Mitra Media
                                        <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <p>
                                        <i class="fa fa-map-marker fa-lg"></i>&nbsp; Alamat Kantor : Jl. Mawar barat No.23 Kota Metro
                                    </p>
                                    <p>
                                        <i class="fa fa-phone fa-lg"></i>&nbsp; No Handphone : (+62) 812-8088-357 / (+62) 813-6614-4485
                                    </p>
                                    <p>
                                        <i class="fa fa-envelope fa-lg"></i>&nbsp; Email : mitramedia@gmail.com
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>

@endsection