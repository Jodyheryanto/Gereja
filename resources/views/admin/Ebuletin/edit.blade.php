@extends('layouts.admin_base')
@section('title', 'Edit E-buletin')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit E-buletin</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.ebuletin.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $ebuletin->id }}">
                <h5 class="form-header">Form E-buletin</h5>
                <div class="form-group">
                    <label for=""> Judul</label>
                    <input class="form-control" name="judul" data-error="Judul tidak boleh kosong" placeholder="Masukkan judul" required="required" type="text" value="{{ $ebuletin->judul }}">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Data File</label>
                    <input type="file" class="form-control" name="nama_file">
                    <br>
                    <a target="_blank" href="/file/ebuletin/{{ $ebuletin->nama_file }}" id="pdf-embed">Preview old data</a>
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