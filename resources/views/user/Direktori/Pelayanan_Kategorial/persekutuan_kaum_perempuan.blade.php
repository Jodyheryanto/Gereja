@extends('layouts.base_website')
@section('title', 'PKB')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center text-center">
      <div class="intro-info order-md-first order-last text-center">

        <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>Persekutuan Kaum Perempuan<br>GPIB Sejahtera Jakarta</strong></h2>
        <p style="color: black;"><strong>Pelayanan Kategorial</strong></p>
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
      <div class="row align-items-center">
        <div class="col-12 col-lg-8">
          <h2>SUSUNAN PENGURUS</h2>
          <h4>PELAYANAN KATEGORIAL (PELKAT) PERSEKUTUAN KAUM PEREMPUAN (PKP)</h4>
          @if($masa_bakti !== NULL)
          <p>PERIODE {{ $masa_bakti->tahun_mulai }} - {{ $masa_bakti->tahun_selesai }}</p>
          @else
          <p>PERIODE 0000 - 0000</p>
          @endif
          <p>GPIB Sejahtera Jakarta</p>
        </div>
        <div class="col-12 col-lg-4">
          <img src="/img/LOGO-PELKAT-PKP.png" alt="logo" class="filter-image" style="max-height: 300px; width: auto;">
        </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
              <a href="http://www.instagram.com/pkp.gpibsejahtera" target="_blank"><img id="img-pre" src="/images/pelayanan_kategorial/{{ $post->link }}" style="width: 100%; height: auto;" alt="your image" /></a>
                <table class="table text-center">
            <tbody>
              @foreach($anggota as $data)
                <tr>
                  <td style="border-top: 0;">{{ $data->nama }}</td>
                  <td style="border-top: 0;">:</td>
                  <td style="border-top: 0;">{{ $data->jabatan }}</td>
                  @auth
                  <td style="border-top: 0">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('admin.direktori.pelayanan-kategorial.pkb.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                        <form method="POST" class="btn btn-danger" action="{{ route('admin.direktori.pelayanan-kategorial.pkb.delete') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $data->id }}" />
                            <button type="submit" class="bg-transparent border-0 p-0 text-white"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                  </td>
                  @endauth
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </section><!-- #about -->
</main>

@endsection
