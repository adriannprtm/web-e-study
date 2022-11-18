@extends ('master')
@section ('konten')
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Intro</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <section class="content">
        <div class="container-fluid">
            <div class="box-body">
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th colspan="2" style="text-align: center">Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $intro ['image'] }}</td>
                        <td>{{ $intro ['title'] }}</td>
                        <td>{{ $intro ['desc'] }}</td>
                        <td style="text-align:center"><a href="#"><i style="color:white;" class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

@endsection