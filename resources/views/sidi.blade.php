@extends('layouts.base_website')
@section('title', 'SIDI')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center text-center">
      <div class="intro-info order-md-first order-last text-center">

        <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>{{ $formulir->judul_formulir }}<br>GPIB Sejahtera Jakarta</strong></h2>
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
        <div class="col-12 col-lg-12 align-items-center text-center">
          <h2>FORM {{ $formulir->judul_formulir }}</h2>
        </div>
        <div class="col-12 col-lg-12">
            {!! $formulir->tata_cara !!}
        </div>
        <div class="col-12 col-lg-12">
          <h4>UNDUH FORMULIR {{ $formulir->judul_formulir }}</h4>
          <table class="table text-center">
            <thead>
              <tr>
                <th>Nama Form</th>
                <th>Download</th>
                @auth
                <th>Aksi</th>
                @endauth
            </thead>
            <tbody>
              <tr>
                <td>Formulir {{ $formulir->judul_formulir }}</td>
                <td><a href="/file/formulir/{{ $formulir->data_formulir }}">Unduh</a></td>
                @auth
                <td><a href="{{ route('admin.formulir.showEditForm', $formulir->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                @endauth
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </section><!-- #about -->
</main>

@endsection
