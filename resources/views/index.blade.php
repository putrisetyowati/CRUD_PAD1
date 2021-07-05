<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="print">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h1>DATA KARYAWAN</h1>

                <h1>putri setyowati</h1>

                
            </div>

            <div class="container mb-3">
                <a href="tambah" class="btn btn-primary" style="float:right">CREATE</a>
            </div>
        </div>
        <div class="container">
            <form action="/karyawan/cari" method="GET">
                <input type="submit" style="float:right" value="Search">
                <input type="text" style="float:right" name="cari" placeholder="Mencari..." value="{{ old('cari') }}">

                <br>
                <br>
            </form>
        </div>





        <table class="table">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>STATUS</th>
                <th>TTL</th>
                <th>ALAMAT</th>
                <th>FOTO</th>
                <th>Action</th>
            </tr>

            @foreach($karyawan as $data)

            <tr>
                <td>{{$data->no}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->status}}</td>
                <td>{{$data->ttl}}</td>
                <td>{{$data->alamat}}</td>
                <td style="width: 120px;">
                    <img src="{{asset('img/foto/'. $data->gambar)}}" width="120" alt="Foto">
                </td>
                <td style="width: 120px;">
                    @method('EDIT')
                    <a href="/karyawan/{{$data->id}}/edit" class="btn btn-sm btn-primary btn-circle " style="float:left">Edit</a>
                    <form action="/karyawan/{{$data->id}}" method="post">

                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger btn-circle" style="float:right" onclick="return confirm('anda yakin ingin menghapus data?');">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</body>


</html>