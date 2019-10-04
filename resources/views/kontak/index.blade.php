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
			            <h2>Kontak Kami</h2>
			            <div class="page_link">
			              	<p>Pertanyaan dan Tanggapan anda dapat menuliskan di bawah ini.</p>
			            </div>
			        </div>
		        </div>
		    </div>
	    </div>
	</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area section_gap">
	<div class="large-title text-center">
		<h2>Lokasi Strategis Bagi Anda</h2>
    </div>
    <div class="container">
        <iframe width="100%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Mawar%20barat%20No.23%20Kota%20Metro&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="2" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <br><br><br><br><br>

        @if(session('success'))
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session('success')}}
		</div> 
		@endif 

        <div class="row">
          	<div class="col-lg-4">
            	<div class="contact_info">
              		<div class="info_item">
                		<i class="ti-home"></i>
                		<h6>Jl. Mawar barat No.23 Kota Metro</h6>
                		<p>Lampung Indonesia</p>
              		</div>
              		
              		<div class="info_item">
                		<i class="ti-headphone"></i>
                		<h6><a href="#">0812-8088-357</a></h6>
                		<p>Senin-Sabtu, Jam 08.00-05.00</p>
              		</div>

              		<div class="info_item">
                		<i class="ti-email"></i>
                		<h6><a href="#">Mitramedia@gmail.com</a></h6>
                		<p>Send us your query anytime!</p>
              		</div>
            	</div>
          	</div>
          
          	<div class="col-lg-8">
            	<form class="" action="/kontak/kirim" method="post">
            		{{ csrf_field() }}
              		<div class="col-md-6">
                		<div class="form-group">
                  			<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required/>
                		</div>
                
                		<div class="form-group">
                  			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required/>
                		</div>
                
                		<div class="form-group">
                  			<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" required/>
                		</div>
              		</div>
              	
              		<div class="col-md-6">
                		<div class="form-group">
                  			<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea>
                		</div>
              		</div>

              		<div class="col-md-12 text-right">
                		<button type="submit" value="submit" class="btn primary-btn">
                  			Send Message
                		</button>
              		</div>
            	</form>
          	</div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->

@endsection