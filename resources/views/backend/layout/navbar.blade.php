<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="container-fluid">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link rounded-3 bg-label-secondary px-2 me-xl-4" href="javascript:void(0)">
        {!! get_svg_icon('menu-dots-square', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
      </a>
    </div>

    <div class="position-relative navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <div class="navbar-nav align-items-center d-none d-md-block">
        <div class="nav-item navbar-search-wrapper mb-0">
          <a class="nav-item nav-link search-toggler d-flex align-items-center rounded-pill bg-label-dark px-2"
             href="javascript:void(0);">
            <input type="text" class="form-control search-input container-fluid border-0 p-0 ps-1"
                   placeholder="Search..."
                   aria-label="Search...">
            <span class="badge bg-secondary px-2">Search (Ctrl+/)</span>
          </a>
        </div>
      </div>

      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <li class="nav-item dropdown-language dropdown me-2">
          <a class="nav-link rounded-2 bg-label-secondary dropdown-toggle hide-arrow px-2" href="javascript:void(0);"
             data-bs-toggle="dropdown">
            <i class='fi fi-us fis rounded-3 me-1 fs-3'></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <li>
                <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                  <span class="align-middle">{{$properties['native']}}</span>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="nav-item me-2 d-md-block">
          <a class="d-flex align-items-center nav-link rounded-2 bg-label-secondary px-2 cursor-pointer"
             data-bs-toggle="modal" data-bs-target="#prompts_modal">
            {!! get_svg_icon('ai', 'me-1 fs-4', 'mb-1', '', ['height' => '20' , 'width' => '20'])!!}
            <span class="d-none d-xl-block">{{__('Create Document')}}</span>
          </a>
        </li>

        <li class="nav-item me-2 d-none d-md-block">
          <a class="d-flex align-items-center nav-link rounded-2 bg-label-secondary px-2"
             href="{{route('dashboard.user.payment.subscription')}}">
            {!! get_svg_icon('rocket-3', 'me-1 fs-4', 'mb-1', '', ['height' => '18' , 'width' => '18'])!!}
            {{__('Upgrade')}}
          </a>
        </li>

        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link rounded-2 bg-label-secondary dropdown-toggle hide-arrow px-2" href="javascript:void(0);"
             data-bs-toggle="dropdown">
            <div class="avatar">
              <img
                src="{{asset(Auth::user()->avatar) ?? 'media/img/defaults/avatar.png'}}"
                alt="{{Auth::user()->fullName()}}"
                class="h-auto rounded-3">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item bg-label-secondary"
                 href="{{route('dashboard.user.settings.index')}}">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img
                        src="{{asset(Auth::user()->avatar ?? 'media/img/defaults/avatar.png')}}"
                        alt="{{Auth::user()->fullName()}}" class="h-auto rounded-3">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">
                      {{Auth::user()->fullName()}}
                    </span>
                    <small class="text-muted">{{Auth::user()->email}}</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="d-flex align-items-center dropdown-item" href="{{route('dashboard.user.subscriptions.index')}}">
                {!! get_svg_icon('wallet-2', 'me-2 fs-4', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
                {{__('Orders')}} </a>
            </li>
            <li>
              <a class="d-flex align-items-center dropdown-item"
                 href="{{route('dashboard.user.payment.subscription')}}">
                {!! get_svg_icon('magic-stick', 'me-2 fs-4', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
                {{__('Plan')}} </a>
            </li>
            <li>
              <a class="d-flex align-items-center dropdown-item"
                 href="{{route('dashboard.user.settings.index')}}">
                {!! get_svg_icon('settings-minimalistic', 'me-2 fs-4', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
                {{__('Settings')}}
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="d-flex align-items-center dropdown-item bg-label-secondary" href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-me').submit();">
                {!! get_svg_icon('exit', 'me-2 fs-4', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
                <span class="align-middle">Logout</span>
              </a>
            </li>
            <form method="POST" id="logout-me" action="{{ route('logout') }}">
              @csrf
            </form>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
