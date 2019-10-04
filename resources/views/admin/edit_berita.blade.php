@extends('admin.template.master')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      	<h1>
      	  	Edit Berita
      	  	<small></small>
      	</h1>
      	<ol class="breadcrumb">
      	  	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      	  	<li><a href="#">Post</a></li>
      	  	<li class="active">Edit Berita</li>
      	</ol>
    </section>

    <!-- Main content -->
    <section class="content">
      	<div class="box box-default">
      	  	<div class="box-header with-border">
      	  	  	<h3 class="box-title">Judul</h3>
                <div class="box-tools pull-right" style="margin-top:2px;">
                  <a href="/berita" class="btn btn-xs bg-blue">
                    <i class="fa fa-mail-reply"></i> Back
                  </a>
                </div>
      	  	</div>
		
			<form action="/berita/update/{{ $beritas->id }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
        	<!-- /.box-header -->
        	<div class="box-body">
        	  	<div class="row">
        	    	<div class="col-md-10">
        	      		<input type="text" name="judul" class="form-control" value="{{ $beritas->judul }}" placeholder="Judul berita atau artikel" required/>
            		</div>

            		<div class="col-md-2">
            	  		<div class="form-group">
                			<button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Publish</button>
            			</div>
          			</div>
        		</div>
       
      		</div>
	 	</div>

      	<div class="row">
        	<div class="col-md-8">
          		<div class="box box-danger">
	            	<div class="box-header">
              			<h3 class="box-title">Post</h3>
            		</div>
            		
            		<div class="box-body">
						<textarea id="materi" name="deskripsi" required>{!! $beritas->deskripsi !!}</textarea>	
            		</div>
          		</div>
        	</div>

        	<div class="col-md-4">
          		<div class="box box-primary">
            		<div class="box-header">
              			<h3 class="box-title">Pengaturan Lainnya</h3>
            		</div>
            		
            		<div class="box-body">
             			<div class="form-group">
                			<label>Author</label>
                			<input type="text" name="author" style="width: 100%;" value="{{ $beritas->author }}" required>
              			</div>

              			<div class="form-group">
			                <label>Kategori</label>
               	 				<select class="form-control select2" name="kategori" style="width: 100%;" required>
                  				<option value="">-Pilih-</option>
                
                 				@foreach($kategoris as $c)
                  				<option value="{{$c->id}}" {{(old('kategori')==$c->id ? 'selected = selected' : ' ')}}>{{$c->nama_kategori}}</option>
                 				@endforeach

                				</select>
              			</div>
			  
			  			      <div class="form-group">
              			  <label>Gambar</label>
              			  <input type="file" name="image" style="width: 100%;">
              			</div>
			
            		</div>
          		</div>
			</form>
        </div>
    </div>

</section>
</div>

@endsection