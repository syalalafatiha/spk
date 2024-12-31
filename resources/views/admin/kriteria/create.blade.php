@extends('layouts.main')

@section('main_content')
    <p class="mb-4">Formulir Data Kriteria Penilaian ini dikelola oleh admin</a></p>
    <div class="modal-footer">
        <a class="btn btn-primary" href="datamhs.html">Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Tambah Data Kriteria Penilaian</h4>
                    </div>
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
                                <td><label for="aspek" class="form-label">Aspek</label></td>
                                <td>
                                    <select class="form-control" name="aspek" id="aspek" required>
                                        <option value="">--Pilih--</option>
                                        <option value="1">Aspek Kependudukan</option>
                                        <option value="2">Aspek Jenjang Pendidikan</option>
                                        <option value="3">Aspek Prestasi Akademik</option>
                                        <option value="4">Aspek Nilai</option>
                                        <option value="5">Aspek Program Studi</option>
                                        <option value="2">Aspek Jalur Masuk</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="kriteria" class="form-label">Kriteria Penilaian</label></td>
                                <td><input class="form-control" type="text" name="kriteria" id="kriteria" size="20"
                                        required>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="nilai" class="form-label">Nilai Kriteria</label></td>
                                <td><input class="form-control" type="number" name="nilai" id="nilai" size="20"
                                        required>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="type" class="form-label">Tipe</label></td>
                                <td>
                                    <select class="form-control" name="type" id="type" required>
                                        <option value="">--Pilih--</option>
                                        <option value="1">Core Factor</option>
                                        <option value="2">Secondary Factor</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input class="btn btn-success" type="submit" name="tambah_kriteria" value="Simpan">
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
