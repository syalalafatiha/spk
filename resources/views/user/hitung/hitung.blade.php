@extends('layouts.main')

@section('main_content')
    <p class="mb-4">Pengisian formulir seleksi persyaratan Beasiswa Scientist dapat dilakukan oleh pihak yang berwenang
        dalam proses seleksi penerima Beasiswa</a>
    </p>
    <div class="modal-footer">

    </div>
    <!-- DataTales Example -->
    <div class="container">
        <form>
            <div class="mb-3">
                <label class="form-label" for="pegawai">Nama Mahasiswa</label>
                <select class="custom-select">
                    <option selected>Pilih Nama Mahasiswa</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="verbalisasi_ide" class="form-label">Syarat Kependudukan</label>
                <select class="custom-select">
                    <option selected>Pilih Status Kependudukan</option>
                    <option value="1">Warga Ber-KTP Bojonegoro</option>
                    <option value="2">Warga Tidak Ber-KTP Bojonegoro</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="verbalisasi_ide" class="form-label">Syarat Jenjang Pendidikan</label>
                <select class="custom-select">
                    <option selected>Pilih Jenjang Pendidikan</option>
                    <option value="1">S1 PTN</option>
                    <option value="2">D4 PTN</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="verbalisasi_ide" class="form-label">Syarat Prestasi</label>
                <select class="custom-select">
                    <option selected>Pilih Tingkatan Prestasi</option>
                    <option value="1">Tingkat Internasional</option>
                    <option value="2">Tingkat Nasional</option>
                    <option value="3">Tingkat Provinsi</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="verbalisasi_ide" class="form-label">Syarat Program Studi</label>
                <select class="custom-select">
                    <option selected>Pilih Program Studi</option>
                    <option value="1">Prodi Fakultas Teknik</option>
                    <option value="2">Prodi Fakultas Pertanian, Peternakan, dan Perikanan</option>
                    <option value="3">Prodi Kedokteran Umum</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="verbalisasi_ide" class="form-label">Syarat Nilai IP</label>
                <select class="custom-select">
                    <option selected>Pilih Nilai IP</option>
                    <option value="1">3.00 - 3.25</option>
                    <option value="2">3.26 - 3.75</option>
                    <option value="3">3.75</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="verbalisasi_ide" class="form-label">Syarat Jalur Masuk Universitas</label>
                <select class="custom-select">
                    <option selected>Pilih Jalur Masuk</option>
                    <option value="1">SNBP</option>
                    <option value="2">SNBT</option>
                    <option value="3">TES/Mandiri</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Seleksi</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
@endsection
