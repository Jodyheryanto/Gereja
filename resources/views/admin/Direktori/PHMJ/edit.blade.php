@extends('layouts.admin_base')
@section('title', 'Edit Anggota PHMJ')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit Anggota PHMJ</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.direktori.phmj.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $anggota->id }}">
                <h5 class="form-header">Form Edit Anggota PHMJ</h5>
                <div class="form-group">
                    <label for=""> Nama</label>
                    <input class="form-control" name="nama" data-error="Nama tidak boleh kosong" placeholder="Masukkan nama" required="required" type="text" value="{{ $anggota->nama }}">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Jabatan</label>
                    <input class="form-control" name="jabatan" data-error="Jabatan tidak boleh kosong" placeholder="Masukkan jabatan" required="required" value="{{ $anggota->jabatan }}">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label for=""> Foto</label>
                    <input type="file" id="imgInp" class="form-control" name="foto">
                    <img id="img-pre" src="/images/phmj/{{ $anggota->foto }}" style="width: auto; height: 200px;" alt="your image" />
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-buttons-w">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection