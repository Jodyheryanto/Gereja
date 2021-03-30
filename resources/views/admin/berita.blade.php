@extends('layouts.admin_base')
@section('title', 'Berita')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Data Berita</h6>
    <div class="element-content">
        <a href="{{ route('home') }}" target="_blank" class="btn btn-primary mb-4">Live Preview & Edit</a>
        <a href="{{ route('admin.berita.showCreateForm') }}" class="btn btn-success mb-4"><i class="fa fa-page"></i>Create</a>
        <div class="element-box">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Isi Berita</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach($berita as $data)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ str_limit($data->news_title, $limit = 20, $end = '...') }}</td>
                        <td><img class="card-img-top" src="/images/berita/{{ $data->news_image }}" style="width: auto; height: 50px" alt="Card image cap"></td>
                        <td>{{ str_limit(strip_tags($data->news_description), $limit = 150, $end = '...') }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('admin.berita.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                <form method="POST" class="btn btn-danger" action="{{ route('admin.berita.delete') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $data->id }}" />
                                    <button type="submit" class="bg-transparent border-0 p-0 text-white"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection