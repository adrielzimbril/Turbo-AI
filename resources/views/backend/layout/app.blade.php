<!DOCTYPE html>

<html lang="{{ session()->get('locale') ?? app()->getLocale() }}"
      data-template="light" class="h-100 mh-100">

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, interactive-widget=resizes-content"/>

  <link rel="icon" href="{{asset(getSetting('favicon'))}}">
  <title>@yield('title') | {{getSetting('site_name')}}</title>

  @if(getSetting('google_analytics_code') !== null)
    <!-- Google tag (gtag.js) -->
    <script async
            src="https://www.googletagmanager.com/gtag/js?id={{getSetting('google_analytics_code')}}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }

      gtag("js", new Date());

      gtag("config", '{{getSetting('google_analytics_code')}}');
    </script>
  @endif

  @include('backend.layout.styles')
</head>

<body>
@yield('layout')

@include('backend.layout.scripts')
</body>

</html>
