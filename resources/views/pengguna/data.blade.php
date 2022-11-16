@extends ('master')
@section ('konten')
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pengguna</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="container-fluid">
            <a href="/create_pengguna"><button type="button" class="btn btn-dark">Create</button></a>
        </div>
        </div>
        <section class="content">
        <div class="container-fluid">
            <div class="box-body">
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th colspan="3" style="text-align: center">Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                    <tr>
                        <td>{{$data->id()}}</td>
                        <td>{{$data ['name'] }}</td>
                        <td>{{$data ['gender'] }}</td>
                        <td style="text-align:center"><a href="#"><i style="color:white;" class="bi bi-three-dots"></i></a></td>
                        <td style="text-align:center"><a href="#"><i style="color:white;" class="bi bi-pencil-square"></i></a></td>
                        <td style="text-align:center"><i style="cursor:pointer;" data-toggle="modal" data-target="#Hapus" style="color:white;" class="bi bi-trash-fill"></a></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @foreach ($user as $data)
        <div class="modal fade" id="Hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Pengguna</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="/delete/pengguna/{{ $data->id() }}"><button type="button" class="btn btn-primary">Hapus</button></a>
            </div>
            </div>
        </div>
        </div>
        @endforeach

@endsection