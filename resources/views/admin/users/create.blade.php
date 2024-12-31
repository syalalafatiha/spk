@extends('layouts.main')

@section('main_content')
    <p class="mb-4">Formulir Data Pengguna sistem hanya dapat dikelola oleh admin</a></p>
    <div class="modal-footer">
        <a class="btn btn-primary" href="datamhs.html">Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pengguna Sistem Seleksi</h6>
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
                                <td><label for="posisi" class="form-label">Posisi</label></td>
                                <td><input class="form-control" type="text" name="posisi" id="posisi" size="20"
                                        required></td>
                            </tr>

                            <tr>
                                <td><label for="prodi" class="form-label">Email</label></td>
                                <td><input class="form-control" type="email" name="email" id="email" size="20"
                                        required>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="username" class="form-label">Username</label></td>
                                <td><input class="form-control" type="text" name="username" id="username" size="30"
                                        required>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="password" class="form-label">Password</label></td>
                                <td><input class="form-control" type="text" name="password" id="password" size="30"
                                        required>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="level" class="form-label">Role / Level</label></td>
                                <td>
                                    <select class="form-control" name="level" id="level" required>
                                        <option value="">--Pilih--</option>
                                        <option value="2">Guru</option>
                                    </select>
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
