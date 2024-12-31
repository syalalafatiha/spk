@extends('layouts.main')

@section('main_content')
    <p class="mb-4">Formulir Data Aspek Penilaian ini dikelola oleh admin</a></p>
    <div class="modal-footer">
        <a class="btn btn-primary" href="datamhs.html">Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Data Aspek Penilaian</h6>
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
                                <td><label for="aspek" class="form-label">Aspek Penilaian</label></td>
                                <td><input class="form-control" type="text" name="aspek" id="aspek" size="20"
                                        required></td>
                            </tr>

                            <tr>
                                <td><label for="level" class="form-label">Bobot Aspek</label></td>
                                <td>
                                    <select class="form-control" name="level" id="level" required>
                                        <option value="">--Pilih--</option>
                                        <option value="2">10</option>
                                        <option value="2">15</option>
                                        <option value="2">20</option>
                                        <option value="2">25</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input class="btn btn-success" type="submit" name="tambah_aspek" value="Simpan">
                                    <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                                </td>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>
        </div>
    @endsection
