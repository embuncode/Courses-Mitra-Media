@extends('admin.template.master')
@section('content')

<div class="content-wrapper" style="min-height: 960px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      	<h1>
        	Detail Kursus
        	<small>mitra media</small>
      	</h1>
      	<ol class="breadcrumb">
      	  	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      	  	<li><a href="#">master data</a></li>
      	  	<li class="active">detail-kursus</li>
      	</ol>
    </section>  

    <!-- Main content -->
    <section class="content animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Paket Kursus</h3>
                    <div class="box-tools pull-right" style="margin-top:2px;">
                      <a href="/paket_kursus" class="btn btn-xs bg-blue">
                        <i class="fa fa-mail-reply"></i> Back
                      </a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12">
                        <div class="box-body">
                            <div class="form-group">
                                <img src="{{ url ($paketkursus->gambar) }}" style="margin-left: 300px" width="450px" height="280px">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="text-align: center;">Nama Paket</th>
                                        <th style="text-align: center;">Tujuan</th>
                                        <th style="text-align: center;">Pengajar</th>
                                        <th style="text-align: center;">Materi</th>
                                        <th style="text-align: center;">Kuota Siswa</th>
                                        <th style="text-align: center;">Jumlah Siswa</th>
                                        <th style="text-align: center;">Biaya</th>
                                        <th style="text-align: center;">Mulai Jam</th>
                                        <th style="text-align: center;">Selesai Jam</th>
                                        <th style="text-align: center;">Masa Kursus</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $paketkursus->judul_kursus }}</td>
                                        <td>{{ $paketkursus->tujuan }}</td>
                                        <td>{{ $paketkursus->pengajar_id }}</td>
                                        <td>{!! $paketkursus->materi !!}</td>
                                        <td>{{ $paketkursus->total_kursi }}</td>
                                        <td>{{ $paketkursus->jumlah_siswa }}</td>
                                        <td>{{ $paketkursus->biaya }}</td>
                                        <td>{{ $paketkursus->mulai_jam }}</td>
                                        <td>{{ $paketkursus->selesai_jam }}</td>
                                        <td>{{ $paketkursus->masa_kursus }}</td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>

@endsection