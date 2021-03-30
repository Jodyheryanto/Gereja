@extends('layouts.base_website')
@section('title', 'PHMJ')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center text-center">
      <div class="intro-info order-md-first order-last">

        @auth
        <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-secondary active" data-toggle="tab" href="#view"><i class="fa fa-file-text-o"></i></a>
          <a class="btn btn-secondary" data-toggle="tab" href="#edit"><i class="fa fa-pencil"></i></a>
        </div>
        @endauth

        <div class="tab-content">
          <div id="view" class="tab-pane active text-center">
            <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>Pelaksana Harian Majelis Jemaat<br>GPIB Sejahtera Jakarta</strong></h2>
            <p style="color: black;"><strong>{!! $post->post_title !!}</strong></p>
          </div>
          @auth
          <div id="edit" class="tab-pane">
            <form method='post' action="{{ route('update') }}"> 
              @csrf 
              <input type="hidden" name="id" value="{{ $post->id }}">
              <input type="text" name="post_title" value="{!! $post->post_title !!}">
              <input type="submit" name="submit" value="Submit">
            </form>
          </div>
          @endauth
        </div>
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
      <div class="row text-center align-items-center">
        @foreach($anggota as $data)
        <div class=" col-12 col-lg-4 wow bounceInUp">
          <div class="card">
            <img class="card-img-top" src="/images/phmj/{{ $data->foto }}" style="height: 300px; width: 100%;" alt="Card image cap">
            <div class="card-body text-center">
              <h6><strong>{{ $data->nama }}</strong></h6>
              <p>{{ $data->jabatan }}</p>
              @auth
              <div class="btn-group w-100" role="group" aria-label="Basic example">
                  <a href="{{ route('admin.direktori.phmj.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                  <form method="POST" class="btn btn-danger" action="{{ route('admin.direktori.phmj.delete') }}">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $data->id }}" />
                      <button type="submit" class="bg-transparent border-0 p-0 text-white"><i class="fa fa-trash"></i> Delete</button>
                  </form>
              </div>
              @endauth
            </div>
          </div>
        </div>
        @endforeach
        @auth
        <a href="{{ route('admin.direktori.phmj.showCreateForm') }}">
        <div class="col-12 col-lg-4 wow bounceInUp">
          <div class="card border-0" style="width: 18rem;">
            <img class="card-img-top" src="/img/add-item.png" style="height: 300px; width: 100%;" alt="Card image cap">
          </div>
        </div>
        </a>
        @endauth
      </div>
    </div>

  </section><!-- #about -->
</main>

@endsection
