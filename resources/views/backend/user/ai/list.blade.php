@extends('backend.layout.content')
@section('title', __('List of generators'))

@section('content')
  <div class="card bg-label-secondary shadow-none rounded-2 mb-4">
    @include('backend.user.ai._partials.search-mapper')
  </div>

  <div class="row">
    @include('backend.user.ai._partials.list')
  </div>
@endsection
