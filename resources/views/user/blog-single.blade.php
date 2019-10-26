@extends('user.template.master')
@section('content')

<section id="blog">
    <div class="blog container">
        <div class="row">
            <div class="col-md-8">

                <div class="blog-item">
                    <a href="#"><img class="img-responsive img-blog" src="{{ url ($beritas->image) }}" width="100%" alt=""></a>
                    
                    <div class="blog-content">
                        <a href="#" class="blog_cat">Pendidikan</a>
                            <h2><a href="blog-item.html">{{ $beritas->judul }}</a></h2>
                            <div class="post-meta">
                                <p>By <a href="#">{{ $beritas->author }}</a></p>
                                <p><i class="fa fa-clock-o"></i> <a href="#">{{ $beritas->created_at }}</a></p>
                                <!-- <p><i class="fa fa-comment"></i> <a href="#">32</a></p> -->
                                <p>
                                    share:
                                    <div class="btn btn-xs bg-blue">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fqodr.or.id&title=Link+description" class="social-button" id=""><span class="fa fa-facebook-official"></span></a>
                                    </div>

                                    <div class="btn btn-xs bg-blue">
                                    <a href="https://plus.google.com/share?url=http%3A%2F%2Fqodr.or.id" class="social-button" id=""><span class="fa fa-google-plus"></span></a>
                                    </div>
                                    
                                    <div class="btn btn-xs bg-blue">
                                    <a href="https://twitter.com/intent/tweet?text=my share text&amp;url=http://qodr.or.id" class="social-button " id=""><span class="fa fa-twitter"></span></a>
                                    </div>

                                    <div class="btn btn-xs bg-blue">
                                    <a href="https://wa.me/?text=http://qodr.or.id" class="social-button " id=""><span class="fa fa-whatsapp"></span></a>
                                    </div>
                                </p>
                            </div>
                            <h3>{!! $beritas->deskripsi !!}</h3>
                            <br>
                            
                            <div class="inner-meta">
                                <ul class="tags">
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Donation</a></li>
                                    <li><a href="#">Sponsor</a></li>
                                    <li><a href="#">People</a></li>
                                </ul>
                                <div class="social-btns">
                                    <a href="#"> <i class="fa fa-heart"></i> Like</a>
                                    <a href="#"> <i class="fa fa-twitter"></i> tweet</a>
                                    <a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> facebook</a>
                                </div>
                            </div>
                            
                            <div class="comments">
                                <h2>Komentar</h2>
                                @foreach($komentars as $komentar)
                                <div class="single-comment">
                                    <div class="comment-img">
                                        <img src="{{ url ('assets-user/images/blog/avatar2.png') }}" style="height: 100px; width: 100px;" alt="author">
                                    </div>
                                    <div class="comment-content" style="border-color: blue;">
                                        <h5>{{ $komentar->nama }}</h5>
                                        <p>{{ $komentar->komentar }}</p>
                                    </div>
                                    <div class="comment-count">
                                        <a href="#"><i class="fa fa-heart"></i> 15</a>
                                    </div>
                                </div>
                                @endforeach

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <ul class="pagination pagination-lg">
                                            {!! $komentars->render() !!}
                                        </ul>
                                        <!--/.pagination-->
                                    </div>
                                </div>
                            </div>

                            <div class="single-comment">
                                <h3><b>Tambahkan Komentar :</b></h3>

                                <div class="comment-content comment-form">
                                    <form action="/user/komentar" method="POST">
                                        
                                        {{ csrf_field() }}

                                        <input type="hidden" name="berita_id" value="{{ $beritas->id }}">                                        
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" name="nama" style="border-color: red;" class="form-control" required="required" placeholder="Enter nama">
                                        </div>

                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input type="email" name="email" style="border-color: red;" class="form-control" required="required" placeholder="Enter email">
                                        </div>

                                        <div class="form-group">
                                            <label>Komentar *</label> 
                                            <textarea name="komentar" class="form-control" style="border-color: red; padding-top: 7px;" placeholder="Enter komentar"></textarea>
                                        </div>

                                        <input type="submit" value="Comment =>">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>


                    <!-- <div class="widget archieve">
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
                    </div> -->

                    <div class="widget popular_post">
                        <h3>Popular Post</h3>
                        <ul>
                            @foreach($posts as $po)
                            <li>
                                <a href="#">
                                    <img src="{{ url ($po->image)}}" alt="">
                                    <p>{{ $po->judul }}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

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

                    <div class="widget social_icon">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-github"></a>
                    </div>

                </aside>
            </div>
        </div>
    </section>

@endsection