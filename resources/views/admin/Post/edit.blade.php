@extends('layouts.admin_base')
@section('title', 'Edit Berita')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Edit Berita</h6>
    <div class="element-content">
        <div class="element-box">
            <form id="formValidate" action="{{ route('admin.halaman.update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $post->id }}">
                <h5 class="form-header">Form Validation</h5>
                <div class="form-group">
                    <label for=""> Judul Halaman</label>
                    <input class="form-control" name="post_title" data-error="Judul tidak boleh kosong" placeholder="Masukkan judul" required="required" type="text" value="{{ $post->post_title }}">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label> Isi Halaman</label>
                    <textarea id='post_content' name='post_content' >{!! $post->post_content !!}</textarea><br>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label for=""> Nama Halaman di Web</label>
                    <input class="form-control" name="judul" data-error="Judul tidak boleh kosong" placeholder="Masukkan nama web" required="required" type="text" value="{{ $post->page }}" disabled>
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