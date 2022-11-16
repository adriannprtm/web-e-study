@extends ('master')
@section ('konten')

<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Pengguna</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="container-fluid">
            <a href="/pengguna"><button type="button" class="btn btn-dark">Kembali</button></a>
        </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <form action="/pengguna/store" method="post">
            {{ csrf_field() }}
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" name="age" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="j_kel" class="form-select" >
                        <option hidden>Silakan Pilih Disini</option>
                        <option value="Laki Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tl" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
                <br>
                <br>
        </form>
    </div>
</div>

@endsection