@extends('user.template.master')
@section('content')

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
        <center>
            <h1 class="white"><b>Kontak Kami</b></h1>
            <h3 class="white">Terkait dengan pertanyaan dan tanggapan anda dapat menuliskan di bawah ini.</h3>
        </center>
    </div>
</section>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>Lokasi Strategis Bagi Anda</h2>
                <p><b>Alamat Kantor : Jl. Mawar barat No.23 Kota Metro</b></p>
                <p><b>No Handphone : (+62) 812-8088-357 / (+62) 813-6614-4485</b></p>

                @if(session('success'))
                <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{session('success')}}
                </div> 
                @endif 
                
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form method="post" action="/pesan/store">
                    {{ csrf_field() }}
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company" class="form-control">
                        </div>
                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section class="detail-service ptb-60">
    <div class="container">
        <header class="large-title text-center">        
            <h2>Lokasi Mitra Media</h2>
        </header>

        <div class="row masonry-grid" style="position: relative; height: 500px; margin-top: -30px;
    margin-left: -30px;">      
            <div class="col col-12" style="position: absolute; left: 0px; top: 10px; width: 1190px;">
                
               <iframe width="100%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Mawar%20barat%20No.23%20Kota%20Metro&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="2" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>     
        </div> 
                    
        </div>
    </div>
</section>

@endsection