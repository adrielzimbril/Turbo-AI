@extends('backend.layout.content')
@section('title', __('Translation Strings'))

@section('content')

  @include('langs::includes.nav')
  @include('langs::includes.messages')

  @yield('content_translation')
@endsection
@section('page-script')
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
        rel="stylesheet" />
  <script
    src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  @yield('scripts')
@endsection
