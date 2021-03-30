@extends('layouts.admin_base')
@section('title', 'Tambah Anggota Majelis Jemaat')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Tambah Anggota Majelis Jemaat</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.direktori.majelis-jemaat.create') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <h5 class="form-header">Form Anggota Majelis Jemaat</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Nama</label>
                            <input class="form-control" name="nama" data-error="Nama tidak boleh kosong" placeholder="Masukkan nama" required="required">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Sektor Pelayanan</label>
                            <input class="form-control" name="jabatan" data-error="Sektor Pelayanan tidak boleh kosong" placeholder="Masukkan jabatan" required="required">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                </div>
                Masa Bakti<hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Tahun Mulai</label>
                            <input class="form-control" name="awal" data-error="Awal Masa Bakti tidak boleh kosong" placeholder="Masukkan masa bakti" required="required">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Tahun Selesai</label>
                            <input class="form-control" name="akhir" data-error="Akhir Masa bakti tidak boleh kosong" placeholder="Masukkan akhir masa bakti" required="required">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="form-buttons-w">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection