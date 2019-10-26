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

        @if(session('success'))
        <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session('success')}}
        </div> 
        @endif 

        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Data Pesan</h3>
              <div class="box-tools pull-right" style="margin-top:2px;">
                <!-- tambahan untuk add dll -->
              </div>
          </div>

          <div class="box-body table-responsive">
            <table id='pesan-table' class="table table-bordered table-list">
              <thead class="bg-green">
                <tr>
                  <th width="10px">No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Jam Dikirim</th>
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

@stop

@push('scripts')
<script type="text/javascript">

    var table = $('#pesan-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'pesan/apiPesan',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'subject', name: 'subject' },
            
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
</script>
@endpush