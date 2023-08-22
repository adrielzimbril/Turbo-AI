<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('backend/fonts/flag-icons.css')}}" />
<link rel="stylesheet" href="{{asset('backend/libs/toastr/toastr.css')}}" />
<link rel="stylesheet" href="{{asset('backend/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('backend/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('backend/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{asset('backend/libs/node-waves/node-waves.css')}}" />

@if (Request::routeIs('dashboard.user.ai.image.index'))
  <link rel="stylesheet" href="{{asset('backend/libs/lightgallery/lightgallery.css')}}" />
@endif
@if (Request::routeIs('dashboard.user.ai.code.index') || Request::routeIs('dashboard.user.ai.documents.view'))
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism.min.css" />
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/line-numbers/prism-line-numbers.css" />
@endif
@if (Request::routeIs('login') || Request::routeIs('register') || Request::routeIs('forgot.password') || Request::routeIs('password.reset'))
  <link rel="stylesheet" href="{{asset('backend/libs/formvalidation/dist/css/formValidation.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/css/pages/auth.css')}}">
@endif

@yield('vendor-style')

<link rel="stylesheet" href="{{ asset('backend/css/app.bundle.css') }}" />

@yield('page-style')
