@extends('layouts.admin_base')
@section('title', 'Edit Berita')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit Formulir</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.formulir.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $formulir->id }}">
                <input type="hidden" name="judul_formulir" value="{{ $formulir->judul_formulir }}">
                <h5 class="form-header">Form Formulir</h5>
                <div class="form-group">
                    <label for=""> Judul Formulir</label>
                    <input class="form-control" data-error="Judul tidak boleh kosong" placeholder="Masukkan judul" required="required" type="text" value="{{ $formulir->judul_formulir }}" disabled>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Data Formulir (pdf/doc/docx/odt)</label>
                    <input type="file" class="form-control" id="fileInp" name="data_formulir">
                    <br>
                    <a target="_blank" href="/file/formulir/{{ $formulir->data_formulir }}" id="pdf-embed">Preview old data</a>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label for=""> Tata Cara Formulir</label>
                    <textarea class="form-control" name="tata_cara" data-error="Tata cara tidak boleh kosong" placeholder="Masukkan tata cara formulir" required="required" rows="3">{{ $formulir->tata_cara }}</textarea>
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