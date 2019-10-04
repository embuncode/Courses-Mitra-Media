@extends('admin.template.master')
@section('content')

<div class="content-wrapper" style="min-height: 960px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      	<h1>
        	List Berita
        	<small>mitra media</small>
      	</h1>
      	<ol class="breadcrumb">
      	  	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      	  	<li><a href="#">master data</a></li>
      	  	<li class="active">berita</li>
      	</ol>
    </section>  

    <!-- Main content -->
    <section class="content animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Data Berita</h3>
              <div class="box-tools pull-right" style="margin-top:2px;">
                <a href="/add-berita" type="button" class="btn btn-xs bg-blue">
                  <i class="fa fa-plus-circle"></i> Add
                </a>
              </div>
          </div>

          <div class="box-body table-responsive">
            <table id='berita-table' class="table table-bordered table-list">
              <thead class="bg-green">
                <tr>
                  <th width="10px">No</th>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Author</th>
                  <th width="180px">Action</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal Delete-->
@foreach ($beritas as $key => $get)
<div class="modal fade in" id="modalDelete{{$get->id}}" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="true">
                ×
                </button>
                <h4 class="modal-title" id="modalDeleteLabel">Warning</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure delete data {{$get->judul}}?</p>
            </div>
            
            <div class="modal-footer">
                <a href="/berita/destroy/{{$get->id}}" class="btn btn-primary">Delete</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal -->

@stop

@push('scripts')
<script type="text/javascript">

    var table = $('#berita-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'berita/apiBerita',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'show_picture', name: 'show_picture' },
            { data: 'judul', name: 'judul' },
            { data: 'author', name: 'author' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

</script>
@endpush