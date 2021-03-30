@extends('layouts.admin_base')
@section('title', 'Edit Anggota PKLU')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit Anggota Persekutuan Kaum Lanjut Usia</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.direktori.pelayanan-kategorial.pklu.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $anggota->id }}">
                <h5 class="form-header">Form Anggota Persekutuan Kaum Lanjut Usia</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Nama</label>
                            <input class="form-control" name="nama" data-error="Nama tidak boleh kosong" placeholder="Masukkan nama" required="required" value="{{ $anggota->nama }}">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Jabatan</label>
                            <input class="form-control" name="jabatan" data-error="Jabatan tidak boleh kosong" placeholder="Masukkan jabatan" required="required" value="{{ $anggota->jabatan }}">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                </div>
                Masa Bakti<hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Tahun Mulai</label>
                            <input class="form-control" name="awal" data-error="Awal Masa Bakti tidak boleh kosong" placeholder="Masukkan masa bakti" required="required" value="{{ $anggota->tahun_mulai }}">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Tahun Selesai</label>
                            <input class="form-control" name="akhir" data-error="Akhir Masa bakti tidak boleh kosong" placeholder="Masukkan akhir masa bakti" required="required" value="{{ $anggota->tahun_selesai }}">
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