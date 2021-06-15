<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>


  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div  id="app">

  <!-- Navbar -->
  <nav class=" navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <router-link to="/dashboard" class="brand-link">
            <img src="{{ asset('/images/logo.svg') }}" alt="The Logo" style="opacity: .8">
            <span class="brand-text font-weight-light"></span>
          </router-link>
      </li>
    </ul>


        {{-- <router-link to="/profile">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ auth()->user()->photo }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">

                    {{ Auth::user()->name }}
                    <span class="d-block text-muted">
                        {{ Ucfirst(Auth::user()->type) }}
                    </span>
                </div>
            </div>
        </router-link> --}}


    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
  </nav>



{{-- Content Wrapper. Contains page content --}}
<div >
      @include('layouts.horizontal-menu')





    <!-- Main content -->
    <router-view></router-view>

    <vue-progress-bar></vue-progress-bar>

    {{-- /.content --}}
  </div>
  {{-- /.content-wrapper --}}

  {{-- Main Footer --}}

</div>
{{-- ./wrapper --}}

@auth
<script>
    window.user = @json(auth()->user())
</script>
@endauth
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
