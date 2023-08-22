<!DOCTYPE html>
<html data-scheme="light" dir="ltr" lang="{{ session()->get('locale') ?? app()->getLocale() }}">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @if(getSetting('meta_description') !== null)
    <meta name="description" content="{{getSetting('meta_description')}}">
  @endif
  @if(getSetting('meta_keywords') !== null)
    <meta name="keywords" content="{{getSetting('meta_keywords')}}">
  @endif

  <meta property="og:image" content="{{asset('media/img/cover.png')}}">
  <meta property="og:url" content="{{url('')}}">
  <meta property="og:title" content="{{__('Home')}} | {{getSetting('site_name')}}">

  <link rel="icon" href="{{asset(getSetting('favicon'))}}">
  <title>{{__('Home')}} | {{getSetting('site_name')}}</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link href="{{asset('frontend/css/app.bundle.css')}}" rel="stylesheet" />
  @if(getFrontSection('custom_css') != null)
    <link rel="stylesheet" href="{{getFrontSection('custom_css')}}" />
  @endif
</head>

<body class="overflow-x-hidden text-slate-500 font-body">


@include('layout.header')

<main data-bs-offset="0" data-bs-spy="scroll" data-bs-target="#navbar">
  @yield('content')
</main>

@include('layout.footer')

<script src="{{asset('frontend/js/app.bundle.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
@if(getFrontSection('custom_js') != null)
  <script src="{{getFrontSection('custom_js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
@endif

</body>

</html>
