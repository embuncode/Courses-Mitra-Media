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
                <h2>Kegiatan</h2>
                <div class="page_link">
                  <a href="/">Home</a>
                  <a href="#">Kegiatan</a>
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
		              	<h2 class="mb-3">Kegiatan Mitra Media</h2>
		              	<p>
		                	Kegiatan siswa yang kursus di Mitra Media
		              	</p>
		            </div>
		        </div>
	        </div>
	
    		<div class="section-top-border">
				<div class="row gallery-item">

					@foreach($kegiatans as $post)
					<div class="col-md-4">
						<a href="{{ URL ( $post->picture)}}" class="img-gal">
							<div class="single-gallery-image" style="background: url({{ URL ( $post->picture)}});"></div>
						</a>
					</div>
					@endforeach
					
				</div>
			</div>
			<div class="col-md-12">
				<ul class="pagination justify-content-center pagination-sm">
	                {!! $kegiatans->render() !!}
	            </ul>
	        </div>
	    </div>
    </section>

@endsection