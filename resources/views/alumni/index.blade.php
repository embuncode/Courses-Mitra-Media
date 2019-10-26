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
                <h2>Alumni</h2>
                <div class="page_link">
                  <a href="/">Home</a>
                  <a href="#">Alumni</a>
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
		              	<h2 class="mb-3">Alumni Mitra Media</h2>
		              	<p>
		                	Alumni yang telah menyelesaikan kursus di Mitra Media
		              	</p>
		            </div>
		        </div>
	        </div>
	        <div class="row justify-content-center d-flex align-items-center">

	        	@foreach ($alumnis as $key)
		        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
		            <div class="thumb d-flex justify-content-sm-center">
		              	@if ($key->picture == null)
                            <img style="width: 300px; height: 280px;" src="/admin/image/alumni/animation.gif">
                        @else  
                            <img style="width: 300px; height: 280px;" src="{{ URL ( $key->picture)}} ">
                        @endif
		            </div>
		            <div class="meta-text text-sm-center">
		              	<h4>{{ $key->nama }}</h4>
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
	                    {!! $alumnis->render() !!}
	                </ul>
	            </div>

	        </div>
	    </div>
    </section>

@endsection