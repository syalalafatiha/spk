@extends('layouts.main')

@section('main_content')
    <p class="mb-4">Data pada tabel kriteria ini dikelola oleh admin</a></p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kriteria Penilaian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Aspek Penilaian</th>
                            <th>Kriteria Penilaian</th>
                            <th>Nilai Target</th>
                            <th>Tipe</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Aspek Penilaian</th>
                            <th>Kriteria Penilaian</th>
                            <th>Nilai Target</th>
                            <th>Tipe</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>C01</td>
                            <td>Aspek Jenjang Pendidikan</td>
                            <td>Mahasiswa S1 PTN</td>
                            <td>5</td>
                            <td>Core Factor</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
