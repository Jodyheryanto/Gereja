@extends('layouts.admin_base')
@section('title', 'Edit Gambar PelKat')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit Gambar Pelayanan Kategorial</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.direktori.pelayanan-kategorial.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $anggota->id }}">
                <h5 class="form-header">Form Edit Gambar Pelayanan Kategorial</h5>
                @if(\Session::has('status'))
                    <div class="alert alert-success">
                        <div>{{Session::get('status')}}</div>
                    </div>
                @endif
                <div class="form-group">
                    <label for=""> Foto</label>
                    <input type="file" id="imgInp" class="form-control" name="foto">
                    <img id="img-pre" src="/images/pelayanan_kategorial/{{ $anggota->link }}" style="width: auto; height: 200px;" alt="your image" />
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