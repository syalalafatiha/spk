@extends('layouts.main')

@section('main_content')
    <p class="mb-4">Data pada tabel aspek ini dikelola oleh admin</a></p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Aspek Penilaian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <p class="mb-4">Aspek Penilaian ini digunakan untuk mengelompokkan kriteria penilaian yang harus dipenuhi
                    oleh mahasiswa pengaju Beasiswa Scientist</a></p>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Aspek Penilaian</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Aspek Penilaian</th>
                            <th>Bobot</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Aspek Prestasi</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
