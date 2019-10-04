@extends('admin.template.master')
@section('content')

<div class="content-wrapper" style="min-height: 960px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      	<h1>
        	List Kegiatan
        	<small>mitra media</small>
      	</h1>
      	<ol class="breadcrumb">
      	  	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      	  	<li><a href="#">master data</a></li>
      	  	<li class="active">kegiatan</li>
      	</ol>
    </section>  

    <!-- Main content -->
    <section class="content animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Data Kegiatan</h3>
              <div class="box-tools pull-right" style="margin-top:2px;">
                  
                <a onclick="addForm()" type="button" class="btn btn-xs bg-blue">
                  <i class="fa fa-plus-circle"></i> Add
                </a>  
              </div>
          </div>

          <div class="box-body table-responsive">
            <table id='kegiatan-table' class="table table-bordered table-list">
              <thead class="bg-green">
                <tr>
                  <th width="10px">No</th>
                  <th>Nama Kegiatan</th>
                  <th>Kegiatan</th>
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

<!-- Modal Add-->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="true">
                ×
                </button>
                <h4 class="modal-title"></h4>
            </div>

            <div class="modal-body">
            <form method="post">
                {{ csrf_field() }} {{ method_field('POST') }}

                <input type="hidden" class="form-control" id="id" name="id">

                <div class="form-group">
                    <label for="nama">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Enter kegiatan" value="{{ old('kegiatan') }}" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Kegiatan</label>
                  <input type="file" class="form-control file-upload" name="picture" id="picture">
                </div>

                <button type="submit" class="btn btn-primary">
                    <span class='glyphicon glyphicon-check'></span> Submit
                </button>
                <button style="float: right;" type="button" class="btn btn-danger" data-dismiss="modal">
                    <span class='glyphicon glyphicon-remove'></span> Cancel
                </button>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Add-->

</div>
<!-- /.content -->
@stop

@push('scripts')
<script type="text/javascript">

    var table = $('#kegiatan-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'kegiatan/apiKegiatan',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'nama_kegiatan', name: 'nama_kegiatan' },
            { data: 'show_picture', name: 'show_picture' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    function addForm() {
        save_method = "add";
        $('input[name = _method]').val('POST');
        $('#modal-form').modal('show');
        $('#modal-form form')[0].reset();
        $('.modal-title').text('Tambah Kegiatan');
    }
    
    function editForm(id) {
        save_method = 'edit';
        $('input[name=_method]').val('PATCH');
        $('#modal-form form')[0].reset();
        $.ajax({
            url : "{{ url('kegiatan') }}" + '/' + id + "/edit",
            type : "GET",
            dataType : "JSON",
            success : function(data) {
                $('#modal-form').modal('show');
                $('.modal-title').text('Edit Kegiatan');

                $('#id').val(data.id);
                $('#nama_kegiatan').val(data.nama_kegiatan);
            },

            error :function() {
                alert("Nothing Data");
            }
        });
    }


    function deleteData(id) {
        var csrf_token = $('meta[name="_token"]').attr('content');
        swal({
            title : 'Are you sure?',
            text : "You won't be able to revert this!",
            type : 'warning',
            showCancelButton : true,
            cancelButtonColor : '#d33',
            confirmButtonColor : '#3085d6',
            confirmButtonText : 'Yes, delete it!'

        }).then(function () {

            $.ajax({
                url : "{{ url('kegiatan') }}" + '/' + id,
                type : "POST",
                data : {'_method' : 'DELETE', '_token' : csrf_token},
                success : function(data) {
                    table.ajax.reload();
                    swal({
                        title : 'Success!',
                        text : 'Data has been deleted!',
                        type : 'success',
                        timer : '1500'
                    })
                },

                error : function () {
                   swal({
                        title : 'Ooops!',
                        text : 'Something went wrong!',
                        type : 'error',
                        timer : '1500'
                    }) 
                }
            });
        });
    }


    $(function() {
        $('#modal-form form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id').val();
                if (save_method == 'add') url = "{{ url ('/kegiatan') }}";
                else url = "{{ url('kegiatan') . '/' }}" + id;
    
            $.ajax({
                url : url,
                type : "POST",
                data : new FormData($('#modal-form form')[0]),
                contentType : false,
                processData : false,
                success : function($data) {
                    $('#modal-form').modal('hide');
                    table.ajax.reload();
                    swal({
                        title : 'Success!',
                        text : 'Data has been created!',
                        type : 'success',
                        timer : '1500'
                    })
                },
                
                error : function() {
                    alert('Ooops! Something error');
                }
            });
            
            return false;    
            }
        });
    });

</script>
@endpush
