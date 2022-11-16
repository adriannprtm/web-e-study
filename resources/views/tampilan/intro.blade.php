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
        <div class="container-fluid">
            <button type="button" class="btn btn-dark">Create</button>
        </div>
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
                        <th scope="col">Url</th>
                        <th scope="col">Status</th>
                        <th colspan="2" style="text-align: center">Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="/dist/img/kemerdekaan.jpg"></td>
                        <td>Kemerdekaan</td>
                        <td>Kemerdekaan adalah hak segala bangsa</td>
                        <td>https://kemerdekaan.com</td>
                        <td class="text-danger">Draft</td>
                        <td style="text-align:center"><a href="#"><i style="color:white;" class="bi bi-pencil-square"></i></a></td>
                        <td style="text-align:center"><a href="#"><i style="color:white;" class="bi bi-trash-fill"></i></a></td>
                    </tr>
                    <tr>
                        <td><img src="/dist/img/sumpah-pemuda.jpg"></td>
                        <td>Sumpah Pemuda</td>
                        <td>Sumpah Pemuda adalah janji para pemuda</td>
                        <td>https://sumpahpemuda.com</td>
                        <td class="text-success">Publish</td>
                        <td style="text-align:center"><a href="#"><i style="color:white;" class="bi bi-pencil-square"></i></a></td>
                        <td style="text-align:center"><a href="#"><i style="color:white;" class="bi bi-trash-fill"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="modal fade" id="Hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Hapus</button>
            </div>
            </div>
        </div>
        </div>

@endsection