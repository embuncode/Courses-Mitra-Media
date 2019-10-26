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
                <h2>Pengajar</h2>
                <div class="page_link">
                  <a href="/">Home</a>
                  <a href="#">Pengajar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

	<section class="trainer_area section_gap_top">
	    <div class="container">
	        <div class="row justify-content-center">
		        <div class="col-lg-5">
		            <div class="main_title">
		              	<h2 class="mb-3">Pengajar Mitra Media</h2>
		              	<p>
		                	Berikut adalah pengajar kursus di mitra media
		              	</p>
		            </div>
		        </div>
	        </div>
	        <div class="row justify-content-center d-flex align-items-center">

	        	@foreach ($pengajars as $post)
		        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
		            <div class="thumb d-flex justify-content-sm-center">
		              	@if ($post->picture == null)
                            <img class="img-fluid" src="/admin/image/pengajar/animation.gif">
                        @else  
                            <img class="img-fluid" style="width: 300px; height: 280px;" src="{{ $post->picture }}" alt="">
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
		       	<div class="col-md-12">
					<ul class="pagination justify-content-center pagination-sm">
	                    {!! $pengajars->render() !!}
	                </ul>
	            </div>

	        </div>
	    </div>
    </section>

@endsection