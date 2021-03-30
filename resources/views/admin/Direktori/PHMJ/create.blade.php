@extends('layouts.admin_base')
@section('title', 'Tambah Anggota PHMJ')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Tambah Anggota PHMJ</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.direktori.phmj.create') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <h5 class="form-header">Form Tambah Anggota PHMJ</h5>
                <div class="form-group">
                    <label for=""> Nama</label>
                    <input class="form-control" name="nama" data-error="Nama tidak boleh kosong" placeholder="Masukkan nama" required="required" type="text">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Jabatan</label>
                    <input class="form-control" name="jabatan" data-error="Jabatan tidak boleh kosong" placeholder="Masukkan jabatan" required="required">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label for=""> Foto</label>
                    <input type="file" id="imgInp" class="form-control" name="foto" data-error="Foto tidak boleh kosong" placeholder="Masukkan foto (png/jpg/jpeg)" required="required">
                    <img id="img-pre" src="/img/example-image.jpg" style="width: auto; height: 200px;" alt="your image" />
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