@extends('layouts.admin_base')
@section('title', 'Edit Tata Ibadah')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit Tata Ibadah</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.tata-ibadah.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $tata_ibadah->id }}">
                <h5 class="form-header">Form Tata Ibadah</h5>
                <div class="form-group">
                    <label for=""> Judul Tata Ibadah</label>
                    <input class="form-control" data-error="Judul tidak boleh kosong" placeholder="Masukkan judul" required="required" type="text" name="judul_tata_ibadah" value="{{ $tata_ibadah->judul_tata_ibadah }}">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Data Tata Ibadah (pdf/doc/docx/odt)</label>
                    <input type="file" id="fileInp" class="form-control" name="nama_file">
                    <br>
                    <a target="_blank" href="/file/tata_ibadah/{{ $tata_ibadah->nama_file }}" id="pdf-embed">Preview old data</a>
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