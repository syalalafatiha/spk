@extends('layouts.main')

@section('main_content')
    <div class="modal-footer">
        <a class="btn btn-primary" href="datamhs.html">Cetak Hasil</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penerima Beasiswa Scientist</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                    class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                        </div>
                    </div>
                </div>
                <br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Universitas Asal</th>
                            <th>Program Studi</th>
                            <th>Alamat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Universitas Asal</th>
                            <th>Program Studi</th>
                            <th>Alamat</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Niltal Amal</td>
                            <td>UIN Walisongo</td>
                            <td>Teknologi Informasi</td>
                            <td>Kudus</td>
                            <td>Memenuhi Persyaratan</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Syalisa Amani Fatiha</td>
                            <td>UIN Walisongo</td>
                            <td>Teknologi Informasi</td>
                            <td>Bojonegoro</td>
                            <td>Memenuhi Persyaratan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
