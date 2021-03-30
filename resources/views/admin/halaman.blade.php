@extends('layouts.admin_base')
@section('title', 'Halaman')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Data Isi Halaman</h6>
    <div class="element-content">
        <a href="{{ route('home') }}" target="_blank" class="btn btn-primary mb-4"><i class="fa fa-pencil"></i> Live Preview & Edit</a>
        <div class="element-box">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Isi Halaman</th>
                        <th scope="col">Halaman di Web</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach($halaman as $data)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ str_limit(strip_tags($data->post_title), $limit = 50, $end = '...') }}</td>
                        <td>{{ str_limit(strip_tags($data->post_content), $limit = 150, $end = '...') }}</td>
                        <td>{{ $data->page }}</td>
                        <td>
                            <a href="{{ route('admin.halaman.showEditForm', $data->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
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