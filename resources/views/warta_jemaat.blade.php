@extends('layouts.base_website')
@section('title', 'Warta Jemaat')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center text-center">
      <div class="intro-info order-md-first order-last text-center">

        <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>Warta Jemaat<br>GPIB Sejahtera Jakarta</strong></h2>
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
      <div class="row align-items-center text-center">
        <div class="col-12 col-lg-12">
          <h2>UNDUH WARTA JEMAAT</h2>
          <table class="table text-center">
            <thead>
              @php
                $i=1
              @endphp
              <tr>
                <th>Warta Jemaat</th>
                <th>Download</th>
                @auth
                <th>Aksi</th>
                @endauth
            </thead>
            <tbody>
              @foreach($warta_jemaat as $data)
              @if($i === 1)
              <tr>
                <td>{{ $data->judul_warta_jemaat }}</td>
                <td><a href="/file/warta_jemaat/{{ $data->nama_file }}">Unduh</a></td>
                @auth
                <td><a href="{{ route('admin.warta-jemaat.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                @endauth
              </tr>
            </tbody>
          </table>
          <h2>Warta Jemaat Minggu Ini</h2>
          <iframe src ="/file/warta_jemaat/{{ $data->nama_file }}" class="filter-image" style="width: 100%" width="500px" height="600px"></iframe>
          @endif
          @php
            $i++
          @endphp
          @endforeach
          <h2 class="mt-5">UNDUH WARTA JEMAAT SEBELUMNYA</h2>
          <table class="table text-center">
            <thead>
              <tr>
                <th>Warta Jemaat</th>
                <th>Download</th>
                @auth
                <th>Aksi</th>
                @endauth
            </thead>
            <tbody>
              @php
                $i=1
              @endphp
              @foreach($warta_jemaat as $data)
              @if($i !== 1)
              <tr>
                <td>{{ $data->judul_warta_jemaat }}</td>
                <td><a href="/file/warta_jemaat/{{ $data->nama_file }}">Unduh</a></td>
                @auth
                <td><a href="{{ route('admin.warta-jemaat.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                @endauth
              </tr>
              @endif
              @php
                $i++
              @endphp
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </section><!-- #about -->
</main>

@endsection
