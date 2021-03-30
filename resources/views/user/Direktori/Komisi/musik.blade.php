@extends('layouts.base_website')
@section('title', 'Home')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro_page" class="clearfix">
  <div class="container text-middle h-100">
    <div class="row justify-content-center align-self-center text-center">
      <div class="intro-info order-md-first order-last text-center">

        <h2 style="color: black; -webkit-text-stroke: 1px white;"><strong>Komisi Musik Gerejawi<br>GPIB Sejahtera Jakarta</strong></h2>
        <p style="color: black;"><strong>Komisi</strong></p>
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
      <div class="align-items-center text-center">
        <h2>SUSUNAN PENGURUS</h2>

        <table class="table table-striped text-center">
          <thead>
            <tr class="table-primary">
              <th scope="col" colspan="@auth 3 @endauth @guest 2 @endguest">Musik Gerejawi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($anggota as $data)
              <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->jabatan }}</td>
                @auth
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{ route('admin.direktori.komisi.musik-gerejawi.showEditForm', $data->id) }}" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                      <form method="POST" class="btn btn-danger" action="{{ route('admin.direktori.komisi.musik-gerejawi.delete') }}">
                          {{ csrf_field() }}
                          <input type="hidden" name="id" value="{{ $data->id }}" />
                          <button type="submit" class="bg-transparent border-0 p-0 text-white"><i class="fas fa-trash"></i> Delete</button>
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

  </section><!-- #about -->
</main>

@endsection
