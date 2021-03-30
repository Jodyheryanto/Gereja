@extends('layouts.admin_base')
@section('title', 'Dashboard')

@section('content')

<div class="element-wrapper">
    <h6 class="element-header">Data Tata Ibadah</h6>
    <div class="element-content">
        <a href="{{ route('admin.tata-ibadah.showCreateForm') }}" class="btn btn-success mb-4"><i class="fa fa-page"></i>Create</a>
        <div class="element-box">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Data File</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach($tata_ibadah as $data)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $data->judul_tata_ibadah }}</td>
                        <td><a href="/file/tata_ibadah/{{ $data->nama_file }}">{{ $data->nama_file }}</a></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('admin.tata-ibadah.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                <form method="POST" class="btn btn-danger" action="{{ route('admin.tata-ibadah.delete') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $data->id }}" />
                                    <button type="submit" class="bg-transparent border-0 p-0 text-white"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </td>
                        @if($i === 1)
                            <td><p class="badge badge-success">Active Now</p></td>
                        @else
                            <td></td>
                        @endif
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