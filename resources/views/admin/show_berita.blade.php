@extends('admin.template.master')
@section('content')

<div class="content-wrapper" style="min-height: 960px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      	<h1>
        	Detail Berita
        	<small>mitra media</small>
      	</h1>
      	<ol class="breadcrumb">
      	  	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      	  	<li><a href="#">master data</a></li>
      	  	<li class="active">siswa</li>
      	</ol>
    </section>  

    <!-- Main content -->
    <section class="content animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Judul = {{ $berita->judul }}</h3>
              <div class="box-tools pull-right" style="margin-top:2px;">
              	<a href="/berita" class="btn btn-xs bg-blue">
                  <i class="fa fa-mail-reply"></i> Back
                </a>
              </div>
          </div>

          	<div class="box-body">
          		<div class="col-md-6">
          			<div class="box box-success">
            			<div class="box-header">
              				<h3 class="box-title">Gambar</h3>
            			</div>
            			<div class="box-body">
                    <div class="form-group">
             				 <img src="{{ url ($berita->image) }}" width="495px" height="332px">
                    </div>
                    <div class="form-group">
                      <label>Author</label>
                        <input type="text" class="form-control" placeholder="{{ $berita->author }}
                        " disabled="">
                    </div>
             			</div>
          			</div>

        		</div>
        		<div class="col-md-6">
          			<div class="box box-primary">
            			<div class="box-header">
              				<h3 class="box-title">Deskripsi</h3>
            			</div>
                  <div class="box-body">
                  <div class="form-group">
                    <textarea class="form-control" rows="16" disabled="">{{ $berita->deskripsi }}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                      <input type="text" class="form-control" placeholder="{{ $berita->kategori_id }}
                        " disabled="">
                    </div>
                  </div>
          			</div>

        		</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection