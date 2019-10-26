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
            <li class="active">Add Pengaturan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Profil dan Home</h3>
                <div class="box-tools pull-right" style="margin-top:2px;">
                  <a href="/pengaturan" class="btn btn-xs bg-blue">
                    <i class="fa fa-mail-reply"></i> Back
                  </a>
                </div>
            </div>

		
		    <form action="/pengaturan/update/{{ $pengaturans->id }}" method="post" enctype="multipart/form-data">
		    {{ csrf_field() }}

            <div class="box-body">
                <div class="row">

                    <input type="hidden" class="form-control" id="id" name="id">

                    <div class="form-group col-md-6">
                        <label>Visi Mitra Media</label>
                        <textarea type="text" name="visi" class="form-control" required/>{{ $pengaturans->visi }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Misi Mitra Media</label>
                        <textarea type="text" name="misi" class="form-control" required/>{{ $pengaturans->misi }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Sambutan</label>
                        <textarea type="text" name="sambutan" class="form-control" required/>{{ $pengaturans->sambutan }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Keunggulan</label>
                        <textarea type="text" name="keunggulan" class="form-control" required/>{{ $pengaturans->keunggulan }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Gambar Home</label>
                        <input type="file" name="gambar_home" class="form-control">
                        <span><i>Ukuran Gambar 850x478 px</i></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Gambar Profil</label>
                        <input type="file" name="gambar_profil" class="form-control">
                        <span><i>Ukuran Gambar 626x580 px</i></span>
                    </div>
                </div>
            </div>
        </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-default">
                            <div class="box-header">
                                <h3 class="box-title">Deskripsi</h3>
                            </div>
                            
                            <div class="box-body">			
        			             <textarea id="materi" name="deskripsi" required>{!! $pengaturans->deskripsi !!}</textarea>              
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Publish</button>
                        </div>
                    </div>
                </div>
		    </form>
    </section>
</div>

@endsection