@extends('layouts.admin_base')
@section('title', 'Edit Koordinator Sektor')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit Koordinator Sektor</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.direktori.koordinator-sektor.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $anggota->id }}">
                <h5 class="form-header">Form Koordinator Sektor</h5>
                <div class="form-group">
                    <label for=""> Sektor Pelayanan</label>
                    <input class="form-control" name="sektor" data-error="Sektor tidak boleh kosong" placeholder="Masukkan sektor" required="required" type="text" value="{{ $anggota->sektor_pelayanan }}">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                Koordinator Sektor<hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Nama</label>
                            <input class="form-control" name="nama_ketua" data-error="Nama tidak boleh kosong" placeholder="Masukkan nama" required="required" value="{{ $anggota->nama_ketua }}">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Telepon/handphone</label>
                            <input class="form-control" name="nomor_ketua" data-error="Telepon/Handphone tidak boleh kosong" placeholder="Masukkan telepon/handphone" required="required" value="{{ $anggota->telepon_ketua }}">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                </div>
                Wakil Koordinator Sektor<hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Nama</label>
                            <input class="form-control" name="nama_wakil" data-error="Nama tidak boleh kosong" placeholder="Masukkan nama" required="required" value="{{ $anggota->nama_wakil }}">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Telepon/handphone</label>
                            <input class="form-control" name="nomor_wakil" data-error="Telepon/Handphone tidak boleh kosong" placeholder="Masukkan telepon/handphone" required="required" value="{{ $anggota->telepon_wakil }}">
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