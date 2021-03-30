@extends('layouts.base_website')
@section('title', 'Pendeta Jemaat')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center text-center">
      <div class="intro-info order-md-first order-last">

        <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>Pendeta Jemaat</strong></h2>
        <p style="color: black;"><strong>GPIB Jemaat Sejahtera Jakarta</strong></p>
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
      <div class="row text-center align-items-center wow bounceInUp">
      @php
        $i = 0
      @endphp
      @foreach($anggota as $data)
        @if($i === 0)
        <div class=" col-0 col-lg-4"></div>
        <div class="col-12 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="/images/pendeta/{{ $data->foto }}" style="height: 300px; width: 100%;" alt="Card image cap">
            <div class="card-body text-center">
              <h6><strong>{{ $data->nama }}</strong></h6>
              <p>{{ $data->gpib }} <br> Periode {{ $data->tahun_mulai }} - Sekarang</p>
              <p></p>
              @auth
              <div class="btn-group" role="group" aria-label="Basic example" style="width:100%;">
                <a href="{{ route('admin.direktori.pendeta.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
              </div>
              @endauth
            </div>
          </div>
        </div>
        <div class=" col-0 col-lg-4"></div>
        @else
        <div class=" col-12 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="/images/pendeta/{{ $data->foto }}" style="height: 300px; width: 100%;" alt="Card image cap">
            <div class="card-body text-center">
              <h6><strong>{{ $data->nama }}</strong></h6>
              <p>{{ $data->gpib }} <br> Periode {{ $data->tahun_mulai }} - {{ $data->tahun_selesai }}</p>
              @auth
              <div class="btn-group w-100" role="group" aria-label="Basic example">
                  <a href="{{ route('admin.direktori.pendeta.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                  <form method="POST" class="btn btn-danger" action="{{ route('admin.direktori.pendeta.delete') }}">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $data->id }}" />
                      <button type="submit" class="bg-transparent border-0 p-0 text-white"><i class="fa fa-trash"></i> Delete</button>
                  </form>
              </div>
              @endauth
            </div>
          </div>
        </div>
        @endif
        @php
          $i++
        @endphp
        @endforeach
        @auth
        <a href="{{ route('admin.direktori.pendeta.showCreateForm') }}">
        <div class="col-12 col-lg-4 wow bounceInUp">
          <div class="card border-0" style="width: 18rem;">
            <img class="card-img-top" src="/img/add-item.png" style="width: auto; height: 250px" alt="Card image cap">
          </div>
        </div>
        </a>
        @endauth
      </div>
    </div>

  </section><!-- #about -->
</main>

@endsection
