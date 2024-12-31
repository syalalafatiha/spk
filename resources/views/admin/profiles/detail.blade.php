@extends('layouts.main')

@section('main_content')
    <form action="../aksi.php" method="POST">
        <table cellpadding="8" class="w-100">

            <tr>
                <td><label for="id" class="form-label">ID</label></td>
                <td><input class="form-control" type="text" name="id" id="id" size="30" required></td>

            </tr>

            <tr>
                <td><label for="nama" class="form-label">Nama</label></td>
                <td><input class="form-control" type="text" name="nama" id="nama" size="30" required></td>

            </tr>

            <tr>
                <td><label for="univeristas" class="form-label">Universitas Asal</label></td>
                <td><input class="form-control" type="text" name="univeristas" id="univeristas" size="20" required>
                </td>
            </tr>

            <tr>
                <td><label for="prodi" class="form-label">Program Studi</label></td>
                <td><input class="form-control" type="text" name="prodi" id="prodi" size="20" required>
                </td>
            </tr>

            <tr>
                <td><label for="alamat" class="form-label">Alamat</label></td>
                <td><input class="form-control" type="text" name="alamat" id="alamat" size="30" required>
                </td>
            </tr>
        </table>
    </form>

    <div class="modal-footer">
        <a class="btn btn-primary" href="datamhs.html">Kembali</a>
    </div>
@endsection
