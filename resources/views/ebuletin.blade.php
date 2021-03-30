@extends('layouts.base_website')
@section('title', 'E-Buletin')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center text-center">
      <div class="intro-info order-md-first order-last text-center">

        <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>E-Buletin<br>GPIB Sejahtera Jakarta</strong></h2>
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
          <h2>E-BULETIN</h2>
          <table class="table text-center">
            <thead>
              @php
                $i=1
              @endphp
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Jenis File</th>
                <th>Tanggal Upload</th>
                <th>Download</th>
                @auth
                <th>Aksi</th>
                @endauth
            </thead>
            <tbody>
              @foreach($ebuletin as $data)
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->jenis }}</td>
                <td>{{ $data->tanggal_upload }}</td>
                <td><a href="/file/ebuletin/{{ $data->nama_file }}" target="_blank">Unduh</a></td>
                @auth
                <td><a href="{{ route('admin.ebuletin.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                @endauth
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

  </section><!-- #about -->
</main>

@endsection
