@extends('user.template.master')
@section('content')

<!-- PERTAMA -->

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
      	<center>
      		<h1 class="white"><b>{{ $paket1->nama }}</b></h1>
      		<h3 class="white">{{ $paket1->tujuan }}</h3>
      	</center>
    </div>
</section>

<section class="bs-marketing-desc ptb-60">
    <div class="container">
      	<div class="bc-left-img">
        	<div class="bc-inner">
          		<div class="image"> 
            		<div class="newspaper">
              			<img alt="kursus website, kursus internet marketing, kursus SEO" src="{{ url ('assets-user/images/kursus/kursus-2.jpg') }}">
              			<a class="btn-zoom cboxElement" href="{{ url ('assets-user/images/kursus/kursus-2.jpg') }}">
                			<i class="fa fa-arrows-alt"></i>
              			</a>
            		</div>
          		</div>

              	<h4>
              	  Apa Yang akan Anda Pelajari Dari Kursus Ini.
              	</h4>
              	
              	<p>
                  {!! $paket1->materi !!}
              	</p>
              	
              	<p>
                	<strong>
                	    Jam Pertemuan :
                	</strong>
                	<br>
                		Waktu pembelajaran kursus adalah pukul 
                    {{ $paket1->mulai_jam }} - {{ $paket1->selesai_jam }}
                	<br>
                </p>

                <p>
  					<b style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 15px; line-height: normal;">
    					<font color="orange">
    					  "Masa Kursus Selama {{ $paket1->masa_kursus }}”
    					</font>
  					</b>
				</p>
            </div>
        </div>  
    </div>
</section>

<!-- KEDUA -->

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
      	<center>
      		<h1 class="white"><b>{{ $paket2->nama }}</b></h1>
      		<h3 class="white">{{ $paket2->tujuan }}</h3>
      	</center>
    </div>
</section>


<section class="bs-marketing-desc ptb-60">
    <div class="container">
      	<div class="bc-left-img">
        	<div class="bc-inner">
          		<div class="image"> 
            		<div class="newspaper">
              			<img alt="kursus website, kursus internet marketing, kursus SEO" src="{{ url ('assets-user/images/kursus/kursus-6.jpg') }}">
              			<a class="btn-zoom cboxElement" href="{{ url ('assets-user/images/kursus/kursus-6.jpg') }}">
                			<i class="fa fa-arrows-alt"></i>
              			</a>
            		</div>
          		</div>

              	<h4>
              	  Apa Yang akan Anda Pelajari Dari Kursus Ini.
              	</h4>
              	
              	<p>
                	 {!! $paket2->materi !!}
              	</p>
              	
              	<p>
                	<strong>
                	    Jam Pertemuan :
                	</strong>
                	<br>
                		Waktu pembelajaran kursus adalah pukul 
                    {{ $paket2->mulai_jam }} - {{ $paket2->selesai_jam }}
                	<br>
                </p>

                <p>
  					<b style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 15px; line-height: normal;">
    					<font color="orange">
    					  "Masa Kursus Selama {{ $paket2->masa_kursus }}”
    					</font>
  					</b>
				</p>
            </div>
        </div>  
    </div>
</section>

<!-- KETIGA -->

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
      	<center>
      		<h1 class="white"><b>{{ $paket3->nama }}</b></h1>
      		<h3 class="white">{{ $paket3->tujuan }}</h3>
      	</center>
    </div>
</section>


<section class="bs-marketing-desc ptb-60">
    <div class="container">
      	<div class="bc-left-img">
        	<div class="bc-inner">
          		<div class="image"> 
            		<div class="newspaper">
              			<img alt="kursus website, kursus internet marketing, kursus SEO" src="{{ url ('assets-user/images/kursus/kursus-5.jpg') }}">
              			<a class="btn-zoom cboxElement" href="{{ url ('assets-user/images/kursus/kursus-5.jpg') }}">
                			<i class="fa fa-arrows-alt"></i>
              			</a>
            		</div>
          		</div>

              	<h4>
              	  Apa Yang akan Anda Pelajari Dari Kursus Ini.
              	</h4>
              	
              	<p>
                	{!! $paket3->materi !!}
              	</p>
              	
              	<p>
                	<strong>
                	    Jam Pertemuan :
                	</strong>
                	<br>
                		Waktu pembelajaran kursus adalah pukul 
                    {{ $paket3->mulai_jam }} - {{ $paket3->selesai_jam }}
                	<br>
                </p>

                <p>
  					<b style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 15px; line-height: normal;">
    					<font color="orange">
    					  "Masa Kursus Selama {{ $paket3->masa_kursus }}”
    					</font>
  					</b>
				</p>
            </div>
        </div>  
    </div>
</section>

<!-- KEMPAT -->

<section class="bs-marketing-discount bg-blue ptb-30">
    <div class="container">
      	<center>
      		<h1 class="white"><b>{{ $paket4->nama }}</b></h1>
      		<h3 class="white">{{ $paket4->tujuan }}</h3>
      	</center>
    </div>
</section>


<section class="bs-marketing-desc ptb-60">
    <div class="container">
      	<div class="bc-left-img">
        	<div class="bc-inner">
          		<div class="image"> 
            		<div class="newspaper">
              			<img alt="kursus website, kursus internet marketing, kursus SEO" src="{{ url ('assets-user/images/kursus/kursus-3.jpg') }}">
              			<a class="btn-zoom cboxElement" href="{{ url ('assets-user/images/kursus/kursus-3.jpg') }}">
                			<i class="fa fa-arrows-alt"></i>
              			</a>
            		</div>
          		</div>

              	<h4>
              	  Apa Yang akan Anda Pelajari Dari Kursus Ini.
              	</h4>
              	
              	<p>
                	{!! $paket4->materi !!}
              	</p>
              	
              	<p>
                	<strong>
                	    Jam Pertemuan :
                	</strong>
                	<br>
                		Waktu pembelajaran kursus adalah pukul 
                    {{ $paket4->mulai_jam }} - {{ $paket4->selesai_jam }}
                	<br>
                </p>

                <p>
  					<b style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 15px; line-height: normal;">
    					<font color="orange">
    					  "Masa Kursus Selama {{ $paket4->masa_kursus }}”
    					</font>
  					</b>
				</p>
            </div>
        </div>  
    </div>
</section>

@endsection