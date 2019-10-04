@extends('user.template.master')
@section('content')

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
        <center>
            <h1 class="white"><b>Berita Mitra Media</b></h1>
        </center>
    </div>
</section>

    <section id="blog">

        <div class="blog container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                        @foreach($beritas as $post)
                        <a href="#"><img class="img-responsive img-blog" src="{{ url ($post->image) }}" width="680px" alt="" /></a>
                        <div class="blog-content">
                            <!-- <a href="#" class="blog_cat">UI/UX DESIGN</a> -->
                            <h2><a href="/user/blog-single/{{($post->id) }}">{{ $post->judul }}</a></h2>
                            <h3> {!! str_limit(strip_tags($post->deskripsi), 200) !!} </h3>
                            @if (strlen(strip_tags($post->deskripsi)) > 200)
                                <a class="btn btn-primary" href="/user/blog-single/{{($post->id) }}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            @endif
                        </div>
                        @endforeach
                    </div>
                    <!--/.blog-item-->
                    
                </div>
                <!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form action="/user/cari" method="GET">
                            <!-- {{ csrf_field() }} -->
                            <input type="text" class="form-control search_box" name="cari" placeholder="Search Here" value="{{ old('cari') }}">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--/.search-->
                    

                    <div class="widget archieve">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#">December 2013 <span class="pull-right">(97)</span></a></li>
                                    <li><a href="#">November 2013 <span class="pull-right">(32)</span></a></li>
                                    <li><a href="#">October 2013 <span class="pull-right">(19)</span></a></li>
                                    <li><a href="#">September 2013 <span class="pull-right">(08)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.archieve-->

                    <div class="widget popular_post">
                        <h3>Popular Post</h3>
                        <ul>
                            @foreach($beritas as $po)
                            <li>
                                <a href="#">
                                    <img src="{{ url ($po->image)}}" alt="">
                                    <p>{{ $po->judul }}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--/.archieve-->
                    

                    <div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        <ul class="sidebar-gallery clearfix">
                            @foreach($images as $g)
                            <li>
                                <a href="#"><img src="{{ url ($g->image) }}" alt="" /></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--/.blog_gallery-->
                    
                    <div class="widget social_icon">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-github"></a>
                    </div>
                    
                </aside>
            </div>
            <!--/.row-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination pagination-lg">
                        {!! $beritas->render() !!}
                    </ul>
                    <!--/.pagination-->
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->

@endsection