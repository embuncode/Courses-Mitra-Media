@extends('user.template.master')
@section('content')

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
        <center>
            <h1 class="white"><b>KEGIATAN</b></h1>
            <h3 class="white">Kegiatan dari siswa mitra media.</h3>
        </center>
    </div>
</section>
<br>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="portfolio-items isotope" style="position: relative; overflow: hidden;">
                @foreach($kegiatans as $post)
                <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 single-work" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{ URL ( $post->picture)}}" style="height: 250px; width: 300px;" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="{{ URL ( $post->picture)}}" rel="prettyPhoto">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-12 text-center">
            <ul class="pagination pagination-lg">
                {!! $kegiatans->render() !!}
            </ul>
        </div>

    </div>
</section>

@endsection