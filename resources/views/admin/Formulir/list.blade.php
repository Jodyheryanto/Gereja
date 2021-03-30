@extends('layouts.admin_base')
@section('title', 'Dashboard')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Data Formulir</h6>
    <div class="element-content">
        <div class="element-box">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Data File</th>
                        <th scope="col">Tata cara</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach($formulir as $data)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ str_limit($data->judul_formulir, $limit = 20, $end = '...') }}</td>
                        <td><a href="/file/formulir/{{ $data->data_formulir }}">{{ $data->data_formulir }}</a></td>
                        <td>{{ str_limit(strip_tags($data->tata_cara), $limit = 150, $end = '...') }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('admin.formulir.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
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