@extends('layouts.admin_base')
@section('title', 'Tambah Pendeta')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Tambah Pendeta Jemaat</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.direktori.pendeta.create') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <h5 class="form-header">Form Validation</h5>
                <div class="form-group">
                    <label for=""> Nama</label>
                    <input class="form-control" name="nama" data-error="Nama tidak boleh kosong" placeholder="Masukkan nama" required="required" type="text">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label for=""> Bagian</label>
                    <input class="form-control" name="bagian" data-error="Asal tidak boleh kosong" placeholder="Masukkan bagian" required="required" type="text">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                Masa Bakti<hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Tahun Mulai</label>
                            <input class="form-control" name="awal" data-error="Awal Masa Bakti tidak boleh kosong" placeholder="Masukkan masa bakti" required="required">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Tahun Selesai</label>
                            <input class="form-control" name="akhir" data-error="Akhir Masa bakti tidak boleh kosong" placeholder="Masukkan akhir masa bakti" required="required">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
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