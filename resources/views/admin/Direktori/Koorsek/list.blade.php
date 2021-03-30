@extends('layouts.admin_base')
@section('title', 'Korsek dan Wakorsek')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Data Korsek dan Wakorsek</h6>
    <div class="element-content">
        <a href="{{ route('direktori.koordinator-sektor') }}" target="_blank" class="btn btn-primary mb-4">Live Preview & Edit</a>
        <a href="{{ route('admin.direktori.koordinator-sektor.showCreateForm') }}" class="btn btn-success mb-4"><i class="fa fa-page"></i>Create</a>
        <div class="element-box">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sektor</th>
                        <th scope="col">Nama Koordinator Sektor</th>
                        <th scope="col">Nama Wakil Koordinator Sektor</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach($anggota as $data)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $data->sektor_pelayanan }}</td>
                        <td>{{ $data->nama_ketua }}</td>
                        <td>{{ $data->nama_wakil }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('admin.direktori.koordinator-sektor.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                <form method="POST" class="btn btn-danger" action="{{ route('admin.direktori.koordinator-sektor.delete') }}">
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