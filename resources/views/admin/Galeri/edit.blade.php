@extends('layouts.admin_base')
@section('title', 'Edit Gambar')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit Gambar</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.galeri.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $galeri->id }}">
                <h5 class="form-header">Form Edit Gambar</h5>
                <div class="form-group">
                    <label for=""> Gambar Berita</label>
                    <input type="file" class="form-control" id="imgInp" name="gambar">
                    <img id="img-pre" src="/images/galeri/{{ $galeri->image }}" style="width: auto; height: 200px;" alt="your image" />
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Deskripsi Gambar</label>
                    <textarea class="form-control" name="deskripsi_gambar" data-error="Deskripsi tidak boleh kosong" placeholder="Masukkan deskripsi gambar" required="required" rows="3">{{ $galeri->image_description }}</textarea>
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