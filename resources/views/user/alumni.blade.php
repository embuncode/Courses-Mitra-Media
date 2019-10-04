@extends('user.template.master')
@section('content')

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
        <center>
            <h1 class="white"><b>Alumni</b></h1>
            <h3 class="white">Mitra media sudah memiliki banyak siswa yang mengikuti Kursus dan Pelatihan.</h3>
        </center>
    </div>
</section>

<section id="team-area">
        <div class="container">
            <div class="center fadeInDown">
                <!-- <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
            
            <div class="row">
                @foreach ($alumnis as $key)
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            @if ($key->picture == null)
                                <img style="width: 300px; height: 280px;" src="/admin/image/alumni/animation.gif">
                            @else  
                                <img style="width: 300px; height: 280px;" src="{{ URL ( $key->picture)}} ">
                            @endif
                        </div>
                        <div class="team-content">
                            <h4>{{ $key->nama }}</h4>
                            <!-- <span class="desg">UI/UX Designer</span> -->
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div> 
                    </div>
                </div>
                @endforeach
                <div class="col-md-6">
                    {!! $alumnis->render() !!}
                </div>
            </div>
        </div>
    </section>

@endsection