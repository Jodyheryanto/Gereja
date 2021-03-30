@extends('layouts.admin_base')
@section('title', 'Tambah Berita')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Tambah Berita</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.berita.create') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <h5 class="form-header">Form Tambah Berita</h5>
                <div class="form-group">
                    <label for=""> Judul Berita</label>
                    <input class="form-control" name="judul" data-error="Judul tidak boleh kosong" placeholder="Masukkan judul" required="required" type="text">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Isi Berita</label>
                    <textarea class="form-control" name="news_deskripsi" data-error="Isi Berita tidak boleh kosong" placeholder="Masukkan isi berita" required="required" rows="3"></textarea>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label for=""> Gambar Berita</label>
                    <input type="file" id="imgInp" class="form-control" name="gambar" data-error="Gambar tidak boleh kosong" placeholder="Masukkan gambar (png/jpg/jpeg)" required="required">
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