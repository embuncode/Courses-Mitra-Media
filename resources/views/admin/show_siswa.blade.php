@extends('admin.template.master')
@section('content')

<div class="content-wrapper" style="min-height: 960px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      	<h1>
        	Detail Siswa
        	<small>mitra media</small>
      	</h1>
      	<ol class="breadcrumb">
      	  	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      	  	<li><a href="#">master data</a></li>
      	  	<li class="active">detail-siswa</li>
      	</ol>
    </section>  

    <!-- Main content -->
    <section class="content animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Siswa</h3>
              <div class="box-tools pull-right" style="margin-top:2px;">
                <a href="/siswa" class="btn btn-xs bg-blue">
                  <i class="fa fa-mail-reply"></i> Back
                </a>
              </div>
          </div>

            <div class="box-body">
                <div class="col-md-4">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title"></h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <img src="{{ url ($siswas->picture) }}" width="250px" height="300px">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="box box-success">
                        <div class="box-body">
                            <div class="row">
                                <ul class="list-group col-md-4">
                                    <li class="list-group-item">Nama</li>
                                    <li class="list-group-item">Nis</li>
                                    <li class="list-group-item">Email</li>
                                    <li class="list-group-item">Tempat Lahir</li>
                                    <li class="list-group-item">Tanggal Lahir</li>
                                    <li class="list-group-item">No Telepon</li>
                                    <li class="list-group-item">Agama</li>
                                    <li class="list-group-item">Jenis Kelamin</li>
                                    <li class="list-group-item">Alamat</li>
                                </ul>
                                <ul class="list-group col-md-8">
                                    <li class="list-group-item">{{ $siswas->nama }}</li>
                                    <li class="list-group-item">{{ $siswas->nis }}</li>
                                    <li class="list-group-item">{{ $siswas->email }}</li>
                                    <li class="list-group-item">{{ $siswas->tmpt_lahir }}</li>
                                    <li class="list-group-item">{{ $siswas->tgl_lahir }}</li>
                                    <li class="list-group-item">{{ $siswas->no_telepon }}</li>
                                    <li class="list-group-item">{{ $siswas->agama }}</li>
                                    <li class="list-group-item">{{ $siswas->gender }}</li>
                                    <li class="list-group-item">{{ $siswas->alamat }}</li>
                                </ul>
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