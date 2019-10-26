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
                <h2>Siswa</h2>
                <div class="page_link">
                  <a href="/">Home</a>
                  <a href="#">Siswa</a>
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
		              	<h2 class="mb-3">Siswa Mitra Media</h2>
		              	<p>
		                	Berikut adalah siswa yang sedang mengikuti kursus
		              	</p>
		            </div>
		        </div>
	        </div>
	        <div class="row justify-content-center d-flex align-items-center">

	        	@foreach ($siswas as $key)
		        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
		            <div class="thumb d-flex justify-content-sm-center">
		              	<img class="img-fluid" src="{{ URL ( $key->picture)}}" alt="">
		            </div>
		            <div class="meta-text text-sm-center">
		              	<h4>{{ $key->nama }}</h4>
		              	<!-- <p class="designation">Sr. web designer</p> -->
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
	                    {!! $siswas->render() !!}
	                </ul>
	            </div>

	        </div>
	    </div>
    </section>

@endsection