@extends('layouts.base_website')
@section('title', 'Visi dan Misi')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center">
      <div class="intro-info order-md-first order-last">
        @auth
        <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-secondary active" data-toggle="tab" href="#view"><i class="fa fa-file-text-o"></i></a>
          <a class="btn btn-secondary" data-toggle="tab" href="#edit"><i class="fa fa-pencil"></i></a>
        </div>
        @endauth

        <div class="tab-content">
          <div id="view" class="tab-pane active">
            <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>{!! $post->post_title !!}</strong></h2>
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
      <div class="row">

        <div class="col-lg-5 col-md-6">
          <div class="about-img" style="width: 80%; height: auto">
            <img src="https://shop.indonesian.bible/wp-content/uploads/2015/02/p_1_4_1_141-TB-052-TI-Wisuda-Cover.jpg" alt="" >
          </div>
        </div>

        <div class="col-lg-7 col-md-6">
          @auth
          <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-secondary active" data-toggle="tab" href="#home"><i class="fa fa-file-text-o"></i></a>
            <a class="btn btn-secondary" data-toggle="tab" href="#menu1"><i class="fa fa-pencil"></i></a>
          </div>
          @endauth

          <div class="tab-content">
            <div id="home" class="tab-pane active">
              <div class="about-content text-center">
                {!! $post->post_content !!}
              </div>
            </div>
            @auth
            <div id="menu1" class="tab-pane fade">
              <form method='post' action="{{ route('update') }}"> 
                @csrf 
                <input type="hidden" name="id" value="{{ $post->id }}">
                <textarea id='post_content' name='post_content' >{!! $post->post_content !!}</textarea><br>
                <input type="submit" name="submit" value="Submit">
              </form>
            </div>
            @endauth
          </div>
        </div>
      </div>
    </div>

  </section><!-- #about -->
</main>

@endsection
