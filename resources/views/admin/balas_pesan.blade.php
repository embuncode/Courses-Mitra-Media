@extends('admin.template.master')
@section('content')

<div class="content-wrapper" style="min-height: 960px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          List Pesan
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

          <div class="box box-info">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Kirim Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                  	<a href="/pesan" class="btn btn-xs bg-blue">
                  		<i class="fa fa-mail-reply"></i> Back
                	</a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="/pesan/kirim-email" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email to</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="judul">Subject</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter judul" value="{{ old('judul') }}" required>
                </div>

                <div class="form-group">
                    <label for="pesan">Message</label>
                    <textarea type="text" style="height: 170px; width: 100%;" class="form-control" id="pesan" name="pesan" placeholder="Enter pesan" value="{{  old('pesan') }}" required></textarea>
                </div>

                <div class="box-footer clearfix">
                  <button type="submit" class="pull-right btn btn-default">Send
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>

              </form>
            </div>
            
          </div>

      </div>
    </div>
  </section>
</div>


@endsection