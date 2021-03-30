@extends('layouts.base_error')
@section('title', 'Forbidden')

@section('content')

<div id="app">
  <section class="section">
    <div class="container mt-5">
      <div class="page-error">
        <div class="page-inner">
          <h1>COMMING SOON</h1>
          <div class="page-description">
            The page you were looking is under development.
          </div>
          <div class="page-search">
            <div class="mt-3">
              <a href="{{ route('home') }}">Back to Home</a>
            </div>
          </div>
        </div>
      </div>
      <div class="simple-footer mt-5">
        Copyright &copy; GPIB Sejahtera Jakarta
      </div>
    </div>
  </section>
</div>

@endsection
