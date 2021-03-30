@extends('layouts.admin_base')
@section('title', 'Create Warta Jemaat')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Create Warta Jemaat</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.warta-jemaat.create') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <h5 class="form-header">Form Warta Jemaat</h5>
                <div class="form-group">
                    <label for=""> Judul Warta Jemaat</label>
                    <input class="form-control" data-error="Judul tidak boleh kosong" placeholder="Masukkan judul" required="required" type="text" name="judul_warta_jemaat">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Data Warta Jemaat</label>
                    <input type="file" class="form-control" name="nama_file" data-error="Data warta jemaat tidak boleh kosong" placeholder="Masukkan file (pdf/doc/docx/odt)" required="required">
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