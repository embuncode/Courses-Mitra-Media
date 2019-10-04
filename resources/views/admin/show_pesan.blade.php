@extends('admin.template.master')
@section('content')

<div class="content-wrapper" style="min-height: 960px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      	<h1>
        	Detail Pesan
        	<small>mitra media</small>
      	</h1>
      	<ol class="breadcrumb">
      	  	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      	  	<li><a href="#">master data</a></li>
      	  	<li class="active">pesan</li>
      	</ol>
    </section>  

    <!-- Main content -->
    <section class="content animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Pesan</h3>
                    <div class="box-tools pull-right" style="margin-top:2px;">
                      	<a href="/pesan" class="btn btn-xs bg-blue">
                            <i class="fa fa-mail-reply"></i> Back
                        </a>
                    </div>
                </div>

          	    <div class="box-body">
          		    <div class="col-md-6">
            			<div class="box-body">
                            <div class="form-group">
                                <label>Subject</label>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ $pesan->subject }}</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ $pesan->name }}</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ $pesan->email }}</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Number</label>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ $pesan->number }}</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ $pesan->company }}</li>
                                </ul>
                            </div>
             			</div>
        		    </div>

        		    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Pesan</label>
                                <ul class="list-group">
                                    <li class="list-group-item" style="height: 395px; width: 490px;">{{ $pesan->message }}</li>
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

@endsection