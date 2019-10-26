<!--================ Start Header Menu Area =================-->
<header class="header_area white-header">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
          	<div class="container">
            	<form class="d-flex justify-content-between" method="" action="">
              		<input type="text" class="form-control" id="search_input" placeholder="Search Here"/>
              			<button type="submit" class="btn"></button>
              		<span class="ti-close" id="close_search" title="Close Search"></span>
            	</form>
          	</div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          	<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html">
              	<img class="logo-2" src="{{ url ('mitra/img/logo2.png') }}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              	<span class="icon-bar"></span> <span class="icon-bar"></span>
              	<span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              	<ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/paket-kursus">Paket Kursus</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="/profil">Profil Mitra Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/siswa">Siswa Mitra Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/pengajar">Guru Mitra Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/alumni">Alumni Mitra Media</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kegiatan">Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link search" id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->