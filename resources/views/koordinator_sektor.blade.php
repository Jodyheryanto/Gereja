@extends('layouts.base_website')
@section('title', 'Korsek & Wakorsek')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center text-center">
      <div class="intro-info order-md-first order-last">

        <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>Pengurus Sektor<br>GPIB Sejahtera Jakarta</strong></h2>
      </div>
    </div>

  </div>
</section><!-- #intro -->

<main id="main">

  <!--==========================
      About Us Section
    ============================-->
  <section id="about">

    <div class="container">
       <div class="row">
        <div class="col-lg-12 col-12">
          <h3><strong>Korsek & Wakorsek</strong></h3>
          <div style="overflow-x:auto;">
            @auth
            <a href="{{ route('admin.direktori.koordinator-sektor.showCreateForm') }}" class="btn btn-success mb-4"><i class="fa fa-page"></i>Create</a>
            @endauth
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Sektor Pelayanan</th>
                  <th scope="col">Koordinator</th>
                  <th scope="col">Wakil Koordinator</th>
                  @auth
                  <th scope="col">Aksi</th>
                  @endauth
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
                  @auth
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('admin.direktori.koordinator-sektor.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                        <form method="POST" class="btn btn-danger" action="{{ route('admin.direktori.koordinator-sektor.delete') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $data->id }}" />
                            <button type="submit" class="bg-transparent border-0 p-0 text-white"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                  </td>
                  @endauth
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td>{{ $data->telepon_ketua }}</td>
                  <td>{{ $data->telepon_wakil }}</td>
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
    </div>
  </section><!-- #about -->
</main>

@endsection
