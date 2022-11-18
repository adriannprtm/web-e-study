@extends ('master')
@section ('konten')

<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Pengguna</h1>
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <a href="/pengguna"><button type="button" class="btn btn-dark">Kembali</button></a>
        </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <form action="/pengguna/update/{{$user->id()}}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{$user ['name'] }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$user ['email'] }}" required>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" name="age" class="form-control" value="{{$user ['age'] }}" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="j_kel" class="form-select" >
                        <option hidden>{{$user ['gender'] }}</option>
                        <option value="Laki Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" name="tl" class="form-control" value="{{$user ['ttl'] }}" required>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
                <br>
                <br>
        </form>
    </div>
</div>

@endsection