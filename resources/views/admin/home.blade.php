@extends('admin.template.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  	<section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
  	</section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $siswas }}</h3>
                        <p>Jumlah Siswa</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                        <a href="/siswa" class="small-box-footer">More info 
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $alumnis }}</h3>
                        <p>Jumlah Alumni</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                        <a href="/alumni" class="small-box-footer">More info 
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ $pengajars }}</h3>
                        <p>Jumlah Pengajar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                        <a href="/pengajar" class="small-box-footer">More info 
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ $beritas }}</h3>
                        <p>Jumlah Berita</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info 
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>
</div>

@endsection