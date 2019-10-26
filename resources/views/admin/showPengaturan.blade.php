@extends('admin.template.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pengaturan
            <small>mitra media</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Pengaturan</a></li>
            <li class="active">Detail Pengaturan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
			<div class="box-header with-border">
                <h3 class="box-title">Detail Pengaturan</h3>
                <div class="box-tools pull-right" style="margin-top:2px;">
                  <a href="/pengaturan" class="btn btn-xs bg-blue">
                    <i class="fa fa-mail-reply"></i> Back
                  </a>
                </div>
            </div>

            <!-- Bagian Pertama -->
			<div class="row">
		        <div class="col-md-4">
		          <div class="box box-default">
		            <div class="box-header with-border">
		              <i class="fa fa-text-width"></i>

		              <h3 class="box-title">Visi Mitra</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		               <ul class="list-unstyled">
		                <li>{{ $pengaturans->visi }}</li>
		              </ul>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>
		        
		        <div class="col-md-4">
		          <div class="box box-default">
		            <div class="box-header with-border">
		              <i class="fa fa-text-width"></i>

		              <h3 class="box-title">Misi Mitra</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		               <ul class="list-unstyled">
		                <li>{{ $pengaturans->misi }}</li>
		              </ul>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>
		        
		        <div class="col-md-4">
		          <div class="box box-default">
		            <div class="box-header with-border">
		              <i class="fa fa-text-width"></i>

		              <h3 class="box-title">Kenggulan Mitra</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              <ul class="list-unstyled">
		                <li>{{ $pengaturans->keunggulan }}</li>
		              </ul>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>
		    </div>
		    <!-- End Bagian Pertama -->

		    <!-- Bagian Kedua -->
		    <div class="row">
		        <div class="col-md-4">
		          <div class="box box-default">
		            <div class="box-header with-border">
		              <i class="fa fa-text-width"></i>

		              <h3 class="box-title">Sambutan</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		               <ul class="list-unstyled">
		                <li>{{ $pengaturans->sambutan }}</li>
		              </ul>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>
		        
		        <div class="col-md-4">
		          <div class="box box-default">
		            <div class="box-header with-border">
		              <i class="fa fa-text-width"></i>

		              <h3 class="box-title">Gambar Home</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		               <ul class="list-unstyled">
		                <li><img src="{{ url ($pengaturans->gambar_home) }}" style="width: 150px; height=200px;"></li>
		              </ul>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>
		        
		        <div class="col-md-4">
		          <div class="box box-default">
		            <div class="box-header with-border">
		              <i class="fa fa-text-width"></i>

		              <h3 class="box-title">Gambar Profil</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              <ul class="list-unstyled">
		                <li><img src="{{ url ($pengaturans->gambar_profil) }}" style="width: 100px; height=200px;"></li>
		              </ul>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>
		    </div>
		    <!-- End Bagian Kedua -->

		    <!-- Bagian Deskripsi -->
		    <div class="row">
		        <div class="col-md-12">
		          <div class="box box-default">
		            <div class="box-header with-border">
		              <i class="fa fa-text-width"></i>

		              <h3 class="box-title">Deskripsi Mitra Media</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		               <ul class="list-unstyled">
		                <li>{!! $pengaturans->deskripsi !!}</li>
		              </ul>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>
		    </div>
		    <!-- End Bagian Deskripsi -->

		</div>
	</section>
</div>

@endsection