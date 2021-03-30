@extends('layouts.base_website')
@section('title', 'Galeri')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center">
      <div class="intro-info order-md-first order-last text-center">
        <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>Galeri<br>GPIB Sejahtera Jakarta</strong></h2>
      </div>
    </div>

  </div>
</section><!-- #intro -->

<main id="main">

  <!--==========================
      About Us Section
    ============================-->
  <section id="about">

    <!-- Page Content -->
    <div class="container">
      @auth
        <a href="{{ route('admin.galeri.showCreateForm') }}" class="btn btn-success mb-4"><i class="fa fa-page"></i>Create</a>
      @endauth
    
      <h3 class="font-weight-light text-center mt-4 mb-0">Galeri GPIB Sejahtera Jakarta</h3>
    
      <hr class="mt-2 mb-5">
    
      <div id="lightgallery" class="row text-center text-lg-left">
        @foreach($galeri as $data)
        <div class="col-lg-3 col-md-4 col-6">
          <a class="item-lightgallery" href="/images/galeri/{{ $data->image }}" class="d-block mb-4">
            <img class="img-fluid img-thumbnail" src="/images/galeri/{{ $data->image }}" alt="{{ $data->image_description }}" style="width: 400px; height: 300px">
          </a>
        </div>
        @endforeach
      </div>
    
    </div>
    <!-- /.container -->

  </section><!-- #about -->
</main>

@endsection
