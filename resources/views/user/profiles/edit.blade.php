@extends('layouts.main')

@section('main_content')
    <p class="mb-4">Formulir Data mahasiswa ini dapat dikelola oleh admin, dan dapat ditambahkan oleh user</a></p>
    <div class="modal-footer">
        <a class="btn btn-primary" href="datamhs.html">Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Data Mahasiswa</h6>
                </div>
                <div class="card-body">
                    <!-- // Form -->
                    <form action="../aksi.php" method="POST">
                        <table cellpadding="8" class="w-100">

                            <tr>
                                <td><label for="id" class="form-label">ID</label></td>
                                <td><input class="form-control" type="text" name="id" id="id" size="30"
                                        required></td>

                            </tr>

                            <tr>
                                <td><label for="nama" class="form-label">Nama</label></td>
                                <td><input class="form-control" type="text" name="nama" id="nama" size="30"
                                        required></td>

                            </tr>

                            <tr>
                                <td><label for="univeristas" class="form-label">Universitas Asal</label></td>
                                <td><input class="form-control" type="text" name="univeristas" id="univeristas"
                                        size="20" required></td>
                            </tr>

                            <tr>
                                <td><label for="prodi" class="form-label">Program Studi</label></td>
                                <td><input class="form-control" type="text" name="prodi" id="prodi" size="20"
                                        required>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="alamat" class="form-label">Alamat</label></td>
                                <td><input class="form-control" type="text" name="alamat" id="alamat" size="30"
                                        required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input class="btn btn-success" type="submit" name="tambah_mhs" value="Simpan">
                                    <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                                </td>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
