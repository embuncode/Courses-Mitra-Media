<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Laporan Siswa</title>
    <style type="text/css">

        .page-break {
            page-break-after: always;
        }

    </style>
</head>

    <body bgcolor="white">

        <center>
            <font face="Arial" color="black"> <br align="center"> LEMBAGA KURSUS DAN PELATIHAN </br></font>
            <font face="Arial" color="blue"> <br align="center"> <b> MITRA MEDIA </b></br></font>
            <font face="Arial" color="green"> <br align="center"> Sarana Untuk Menggapai Cita - Cita </br></font>
            <font face="Arial" color="black" size="3"> <br align="center"> Jl. Mawar barat No.23 Kota Metro </br></font>
        </center>
        
        <hr>

        <table class="table table-bordered table-list">
            <thead class="bg-green">
                <tr>
                    <th width="10px">No</th>
                    <!-- <th>Foto</th> -->
                    <th>NIS</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Tempat Lahir</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($siswa as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <!-- <td><img src="{{$p->picture}}" style="height: 50px; width: 50px;"></td> -->
                    <td>{{$p->nis}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->no_telepon}}</td>
                    <td>{{$p->tmpt_lahir}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- pembatas pindah halaman -->
        <div class="page-break"></div>

        <table class="table table-bordered table-list">
            <thead class="bg-green">
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($siswa as $p)
                <tr>
                    <td>{{$p->tgl_lahir}}</td>
                    <td>{{$p->agama}}</td>
                    <td>{{$p->gender}}</td>
                    <td>{{$p->alamat}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <hr>

        <footer><center><i> Mitra media </i></center></footer>
 </body>
</html>