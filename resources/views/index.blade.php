@extends('layouts.base_website')
@section('title', 'Home')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro" class="clearfix">
  <div class="container d-flex h-100">
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
            <h2 style="color: black; -webkit-text-stroke: 1px white;">{!! $post->post_title !!}</h2>
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
        <a href="{{ route('warta-jemaat') }}" class="btn centered-left">Warta Jemaat</a>
        <a href="{{ route('tentang-kami.ebuletin') }}" class="btn centered-right" style="background-color: #A49907">E-Buletin</a>
      </div>

      <!-- <div class="col-md-6 intro-img order-md-last order-first">
        <img src="/assetsU/img/intro-img.svg" alt="" class="img-fluid">
      </div> -->
    </div>

  </div>
</section><!-- #intro -->

<main id="main">
  <!--==========================
      Services Section
    ============================-->
  <section id="services" class="section-bg">
    <div class="container">
      <header class="section-header">
          <h3>Rhema Pagi</h3>
        </header>
        @auth
        <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-secondary active" data-toggle="tab" href="#home1"><i class="fa fa-file-text-o"></i></a>
          <a class="btn btn-secondary" data-toggle="tab" href="#menu1"><i class="fa fa-pencil"></i></a>
        </div>
        @endauth

        <div class="tab-content">
          <div id="home1" class="tab-pane active">
            <div class="embed-responsive embed-responsive-21by9">
              <iframe class="embed-responsive-item" src="{{ $post->link }}" allowfullscreen></iframe>
            </div>
          </div>
          @auth
          <div id="menu1" class="tab-pane fade">
            <form method='post' action="{{ route('update') }}"> 
              @csrf 
              <input type="hidden" name="id" value="{{ $post->id }}">
              <input type="text" name="post_link" value="{{ $post->link }}">
              <input type="submit" name="submit" value="Submit">
            </form>
          </div>
          @endauth
        </div>
    </div>
  </section><!-- #services -->

  <!--==========================
      About Us Section
    ============================-->
  <section id="about">

    <div class="container">
        <header class="section-header">
          <h3>Ibadah Live Streaming</h3>
        </header>
        @auth
        <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-secondary active" data-toggle="tab" href="#home2"><i class="fa fa-file-text-o"></i></a>
          <a class="btn btn-secondary" data-toggle="tab" href="#menu2"><i class="fa fa-pencil"></i></a>
        </div>
        @endauth

        <div class="tab-content">
          <div id="home2" class="tab-pane active">
            <div class="embed-responsive embed-responsive-21by9">
              <iframe class="embed-responsive-item" src="{{ $post->link2 }}" allowfullscreen></iframe>
            </div>
          </div>
          @auth
          <div id="menu2" class="tab-pane fade">
            <form method='post' action="{{ route('update') }}"> 
              @csrf 
              <input type="hidden" name="id" value="{{ $post->id }}">
              <input type="text" name="post_link2" value="{{ $post->link2 }}">
              <input type="submit" name="submit" value="Submit">
            </form>
          </div>
          @endauth
        </div>
    </div>

  </section><!-- #about -->

  <!--==========================
      Services Section
    ============================-->
  <section id="services" class="section-bg">
    <div class="container">

      <header class="section-header">
        <h3>Berita dan Kegiatan</h3>
      </header>

      <!-- <div class="owl-carousel owl-theme"> -->
      <div class="row">
        <div class="col-6">
          @auth
          <a href="{{ route('admin.berita.showCreateForm') }}" class="btn btn-success mb-4"><i class="fa fa-page"></i>Create</a>
          @endauth
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php
                      $i = 1
                    @endphp
                    @foreach($news as $data)
                    @if($i === 1)
                      <div class="carousel-item active">
                        <div class="row">
                    @elseif($next_item === true)
                      <div class="carousel-item">
                        <div class="row">
                    @endif
                          <div class="col-md-12 mb-3 d-flex">
                              <div class="card">
                                <a href="#" data-toggle="modal" data-target="#modal_tengah{{ $data->id }}"><img class="card-img-top" src="/images/berita/{{ $data->news_image }}" style="height: 450px; width: 100%;" alt="Card image cap"></a>
                                @auth
                                <div class="card-footer">
                                  <div class="btn-group mt-4" role="group" aria-label="Basic example" style="width: 100%">
                                      <a href="{{ route('admin.berita.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                      <form method="POST" class="btn btn-danger" action="{{ route('admin.berita.delete') }}">
                                          {{ csrf_field() }}
                                          <input type="hidden" name="id" value="{{ $data->id }}" />
                                          <button type="submit" class="bg-transparent border-0 p-0 text-white"><i class="fa fa-trash"></i> Delete</button>
                                      </form>
                                  </div>
                                </div>
                                @endauth
                              </div>
                          </div>
                          <div class="modal fade" id="modal_tengah{{ $data->id }}">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                              
                                <!-- Ini adalah Bagian Header Modal -->
                                <div class="modal-header">
                                  <h4 class="modal-title" style="word-wrap: break-word;">{{ $data->news_title }}</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Ini adalah Bagian Body Modal -->
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div>
                                        <img alt="Web Studio" class="img-fluid" src="/images/berita/{{ $data->news_image }}" style="height: 350px; width: 100%;" />
                                      </div>
                                    </div>
                                    <div class="col-lg-6 d-flex" style="word-wrap: break-word;">
                                      <div>
                                        <p class="margin-top-s text-justify">{!! $data->news_description !!}</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <!-- Ini adalah Bagian Footer Modal -->
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                    @php
                      $next_item = false;
                    @endphp
                    @if($i % 1 == 0)
                        @php
                          $next_item = true;
                        @endphp
                        </div>
                    </div>
                    @endif
                    @php
                      $i++
                    @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
      <!-- </div> -->
    </div>
  </section><!-- #services -->

  <!--==========================
      About Us Section
    ============================-->
  <section id="about">

    <div class="container">
        @auth
        <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-secondary active" data-toggle="tab" href="#home3"><i class="fa fa-file-text-o"></i></a>
          <a class="btn btn-secondary" data-toggle="tab" href="#menu3"><i class="fa fa-pencil"></i></a>
        </div>
        @endauth

        <div class="tab-content">
          <div id="home3" class="tab-pane active">
            <div class="row">
              <div class="col-lg-5 col-md-6">
                <div class="about-img" style="width: 80%; height: auto">
                  <img src="https://shop.indonesian.bible/wp-content/uploads/2015/02/p_1_4_1_141-TB-052-TI-Wisuda-Cover.jpg" alt="" >
                </div>
              </div>

              <div class="col-lg-7 col-md-6">
                <div class="about-content text-center">
                  {!! $post->post_content !!}
                </div>
              </div>
            </div>
          </div>
          @auth
          <div id="menu3" class="tab-pane fade">
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

  </section><!-- #about -->


  <!--==========================
      Services Section
    ============================-->
  <section id="services" class="section-bg">
    <div class="container">

      <header class="section-header">
        <h3>Our Content</h3>
      </header>

      <div class="row">

        <div class="col-12 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <a target="_blank" href="https://www.youtube.com/channel/UCm2QSs3L8xfC4Uc7GtBawYg">
                <div class="icon" style="background: #fceef3;"><i class="ion-ios-play-outline" style="color: #ff689b;"></i></div>
                <h4 class="title">Our Youtube</h4>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <a href="{{ route('warta-jemaat') }}">
                <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                <h4 class="title">Warta Jemaat</h4>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <a href="{{ route('tata-ibadah') }}">
                <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-star-outline" style="color: #3fcdc7;"></i></div>
                <h4 class="title">Tata Ibadah</h4>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #services -->

  <!--==========================
      Frequently Asked Questions Section
    ============================-->
  <section id="faq">
    <div class="container">
      <header class="section-header">
        <h3>Cegah Covid-19</h3>
      </header>

      <div class="row">

        <div class="col-12 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <img src="https://www.gpibgibeon.or.id/wp-content/uploads/2020/06/Cegah-Penularan-COVID-19-di-Lingkungan-Rumah-01-819x1024.jpeg" style="width: 100%; height: auto;">
          </div>
        </div>
        <div class="col-12 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <img src="https://www.gpibgibeon.or.id/wp-content/uploads/2020/06/Cegah-Penularan-COVID-19-di-Lingkungan-Rumah-02-819x1024.jpeg" style="width: 100%; height: auto;">
          </div>
        </div>
        <div class="col-12 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <img src="https://www.gpibgibeon.or.id/wp-content/uploads/2020/06/Cegah-Penularan-COVID-19-di-Lingkungan-Rumah-03-819x1024.jpeg" style="width: 100%; height: auto;">
          </div>
        </div>

      </div>
    </div>
  </section><!-- #faq -->

</main>

@endsection
