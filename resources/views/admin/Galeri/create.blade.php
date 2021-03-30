@extends('layouts.admin_base')
@section('title', 'Tambah Gambar')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Tambah Gambar</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.galeri.create') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <h5 class="form-header">Form Tambah Gambar</h5>
                <div class="form-group">
                    <label for=""> Gambar</label>
                    <input type="file" id="imgInp" class="form-control" name="gambar" data-error="Gambar tidak boleh kosong" placeholder="Masukkan gambar (png/jpg/jpeg)" required="required">
                    <img id="img-pre" src="/img/example-image.jpg" style="width: auto; height: 200px;" alt="your image" />
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Deskripsi Gambar</label>
                    <textarea class="form-control" name="deskripsi_gambar" data-error="Deskripsi tidak boleh kosong" placeholder="Masukkan deskripsi gambar" required="required" rows="3"></textarea>
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