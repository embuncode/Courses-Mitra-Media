@extends('admin.template.master')
@section('content')

<div class="content-wrapper" style="min-height: 960px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      	<h1>
        	List Siswa
        	<small>mitra media</small>
      	</h1>
      	<ol class="breadcrumb">
      	  	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      	  	<li><a href="#">master data</a></li>
      	  	<li class="active">siswa</li>
      	</ol>
    </section>  

    <!-- Main content -->
    <section class="content animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Data Siswa</h3>
              <div class="box-tools pull-right" style="margin-top:2px;">
                <a href="/siswa/export-excel" class="btn btn-xs bg-blue">
                  <i class="fa fa-file-excel-o"></i> Excel
                </a>

                <a href="/siswa/export-pdf" target="_blank" class="btn btn-xs bg-blue">
                  <i class="fa fa-file-pdf-o"></i> Pdf
                </a>
                  
                <a onclick="addForm()" type="button" class="btn btn-xs bg-blue">
                  <i class="fa fa-plus-circle"></i> Add
                </a>  
              </div>
          </div>

          <div class="box-body table-responsive">
            <table id='siswa-table' class="table table-bordered table-list">
              <thead class="bg-green">
                <tr>
                  <th width="10px">No</th>
                  <th>Picture</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Agama</th>
                  <th>Gender</th>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="true">
                ×
                </button>
                <h4 class="modal-title"></h4>
            </div>

            <div class="modal-body">
            <form method="post" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}

                <input type="hidden" class="form-control" id="id" name="id">

                <div class="form-group">
                    <label for="code">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama" value="{{ old('nama') }}" required>
                </div>


                <div class="form-group col-md-6">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" id="nis" name="nis" placeholder="Nis" value="{{ old('nis') }}" required>
                </div> 

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                </div> 

                <div class="form-group col-md-6">
                    <label for="tmpt_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="Tempat lahir" value="{{ old('tmpt_lahir') }}" required>
                </div> 

                <div class="form-group col-md-6">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="Agama">Agama</label>
                    <select class="form-control" id="agama" name="agama" required>
                        <option value="">--- Pilih Agama ---</option>
                        <option value="islam" @if (old('agama') == "islam") {{ 'selected' }} @endif>Islam</option>
                        <option value="hindu" @if (old('agama') == "hindu") {{ 'selected' }} @endif>Hindu</option>
                        <option value="budha" @if (old('agama') == "budha") {{ 'selected' }} @endif>Budha</option>
                        <option value="kristen" @if (old('agama') == "kristen") {{ 'selected' }} @endif>Kristen</option>
                        <option value="konghucu" @if (old('agama') == "konghucu") {{ 'selected' }} @endif>Konghucu</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputFile">Picture</label>
                  <input type="file" class="form-control file-upload" name="picture" id="picture">
                </div>


                <div class="form-group col-md-6">
                    <label for="no_telepon">No Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Enter telepon" value="{{  old('no_telepon') }}" required>
                </div> 

                <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="">--- Pilih Gender ---</option>
                        <option value="laki-laki" @if (old('gender') == "laki-laki") {{ 'selected' }} @endif>laki-laki</option>
                        <option value="perempuan" @if (old('gender') == "perempuan") {{ 'selected' }} @endif>perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter alamat" value="{{  old('alamat') }}" required></textarea>
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

    var table = $('#siswa-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'siswa/apiSiswa',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'show_picture', name: 'show_picture' },
            { data: 'nama', name: 'nama' },
            { data: 'tmpt_lahir', name: 'tmpt_lahir' },
            { data: 'agama', name: 'agama' },
            { data: 'gender', name: 'gender' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    function addForm() {
        save_method = "add";
        $('input[name = _method]').val('POST');
        $('#modal-form').modal('show');
        $('#modal-form form')[0].reset();
        $('.modal-title').text('Tambah Siswa');
    }

    function editForm(id) {
        save_method = 'edit';
        $('input[name=_method]').val('PATCH');
        $('#modal-form form')[0].reset();
        $.ajax({
            url : "{{ url('siswa') }}" + '/' + id + "/edit",
            type : "GET",
            dataType : "JSON",
            success : function(data) {
                $('#modal-form').modal('show');
                $('.modal-title').text('Edit Siswa');

                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nis').val(data.nis);
                $('#email').val(data.email);
                $('#tmpt_lahir').val(data.tmpt_lahir);
                $('#tgl_lahir').val(data.tgl_lahir);
                $('#no_telepon').val(data.no_telepon);
                $('#agama').val(data.agama);
                $('#alamat').val(data.alamat);
                $('#gender').val(data.gender);
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
                url : "{{ url('siswa') }}" + '/' + id,
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
                if (save_method == 'add') url = "{{ url ('/siswa') }}";
                else url = "{{ url('siswa') . '/' }}" + id;
    
            $.ajax({
                url : url,
                type : "POST",
                // data : $('#modal-form form').serialize(),
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