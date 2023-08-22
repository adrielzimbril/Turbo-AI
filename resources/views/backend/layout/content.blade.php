@extends('backend.layout.app' )

@section('layout')
  <div id="swup" class="layout-wrapper layout-content-navbar">
    @if (!Request::routeIs('404') && !Request::routeIs('login') && !Request::routeIs('register') && !Request::routeIs('forgot.password') && !Request::routeIs('password.reset') && !Request::routeIs('dashboard.user.ai.chat.index'))

      <div class="layout-container">
        @if (!Request::routeIs('dashboard.user.ai.chat.index'))
          @include('backend.layout.menu')
        @endif

        @if (!Request::routeIs('dashboard.user.ai.chat.index'))
          <div class="layout-page">
            @include('backend.layout.navbar')
            <div class="content-wrapper">
              <div class="container-fluid flex-grow-1 container-p-y">

                @yield('content')

                @include('_partials._modals._prompts')
              </div>

              @include('backend.layout.footer')
            </div>
          </div>
          <div class="layout-overlay layout-menu-toggle"></div>
        @else
          <div class="w-100">
            @yield('content')
          </div>
        @endif
      </div>

      <div class="content-backdrop fade"></div>
      <div class="drag-target"></div>
    @else
      @yield('content')
    @endif
  </div>
@endsection
