@extends('layouts.admin_base')
@section('title', 'Edit Berita')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit Warta Jemaat</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.warta-jemaat.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $warta_jemaat->id }}">
                <h5 class="form-header">Form Warta Jemaat</h5>
                <div class="form-group">
                    <label for=""> Judul Warta Jemaat</label>
                    <input class="form-control" name="judul_warta_jemaat" data-error="Judul tidak boleh kosong" placeholder="Masukkan judul" required="required" type="text" value="{{ $warta_jemaat->judul_warta_jemaat }}">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Data Warta Jemaat (pdf/doc/docx/odt)</label>
                    <input type="file" class="form-control" name="nama_file">
                    <br>
                    <a target="_blank" href="/file/warta_jemaat/{{ $warta_jemaat->nama_file }}" id="pdf-embed">Preview old data</a>
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