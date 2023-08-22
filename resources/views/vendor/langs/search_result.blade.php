@extends(config('amamarul-location.layout'))
@section(config('amamarul-location.content_section'))
  @include('langs::includes.tools')

  <h4 class="mb-4">
    {{__('Search Result for')}} '{{$search_value }}'
  </h4>
  <div class="card">
    <div class="card-body">
      @if (count($result) > 0)
        @foreach ($result as $element)
          <div class="row px-3">
            <div class="col-10">
              <span>{{$element->en}}</span>
              <br>
            </div>
            <div class="col-2 text-right">
              <a href="{{route('amamarul.translations.lang.string',$element->code)}}"
                 class="d-flex btn btn-icon btn-label-secondary mx-auto" title="{{__('Show')}}">
                {!! get_svg_icon('eye', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
              </a>
            </div>
          </div>
          <hr class="mt-2">
        @endforeach
      @else
        <div class="align-center">
          <h3>No results for {{ $search_value }}</h3>
        </div>
      @endif
    </div>
  </div>
@endsection
