<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h2>ISI DATA KARYAWAN</h2>
            </div>

            <div class="col-12">
                <!--entyp bagaimana data form dikirim -->
                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No</label>
                        <input type="text" class="form-control" name="no" id="exampleInputEmail1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="xampleInputEmail1" required>
                    </div>

                    <div class="mb-3">

                        <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1" required <option value="">Pilih Jenis Kelamin</option>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">

                        <select class="form-control" name="status" id="exampleFormControlSelect1" required>
                            <option value="">Pilih Status</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label datepicker">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="ttl" id="exampleInputEmail1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" required>
                    </div>
                    <label for="gambar">Pilih Foto</label>
                    <div class="form-group">
                        <input type="file" name="gambar" id="gambar" class="dropify" data-height="190" required>
                    </div>
                    <br>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Tambah</a>

                    </div>
                </form>
            </div>


        </div>
    </div>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</body>


</html>