@extends('user.template.master')
@section('content')

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
        <center>
            <h1 class="white"><b>Pengajar</b></h1>
            <h3 class="white">Mitra media memiliki Staf pengajar yang Profesional dan ahli di bidangnya.</h3>
        </center>
    </div>
</section>

<section id="team-area">
        <div class="container">
            <div class="center fadeInDown">
                <p class="lead"></p>
            </div>
            
            <div class="row">
                @foreach ($pengajars as $post)
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            @if ($post->picture == null)
                                <img style="width: 300px; height: 280px;" src="/admin/image/pengajar/animation.gif">
                            @else  
                                <img style="width: 300px; height: 280px;" src="{{ $post->picture }} ">
                            @endif
                        </div>
                        <div class="team-content">
                            <h4>{{ $post->nama_lengkap }}</h4>
                            <span class="desg">{{ $post->keahlian }}</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="https://www.facebook.com/sigit wasis subekti" target="_blank" title="kepoin aku"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div> 
                    </div>
                </div>
                @endforeach
                
                <div class="col-md-12 text-center">
                    <ul class="pagination pagination-lg">
                        
                    </ul>
                    <!--/.pagination-->
                </div>
            </div>
        </div>
    </section>

@endsection