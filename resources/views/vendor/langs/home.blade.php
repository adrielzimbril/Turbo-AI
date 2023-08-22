@extends(config('amamarul-location.layout'))

@section(config('amamarul-location.content_section'))
  @include('langs::includes.tools')
  <h4 class="mb-2">
    {{__('Languages installed')}}
  </h4>
  <div class="row">
    @foreach ($langs as $lang)
      <div class="col-xl-4 col-sm-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-start">
              <span class="badge rounded bg-label-secondary p-2 me-3 rounded">
                {{__('Language')}}: {{ucfirst($lang)}} {{emojiFlag($lang)}}
              </span>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-3">
              <a href="{{route('amamarul.translations.lang',$lang)}}" class="btn btn-label-secondary me-3">
                {!! get_svg_icon('pen-alt-2', 'fs-5 me-2', '', '', ['height' => '20' , 'width' => '20'])!!}
                <span>{{__('Edit')}}</span>
              </a>
              <a href="{{route('amamarul.translations.lang.generateJson',$lang)}}" class="btn btn-label-secondary">
                {!! get_svg_icon('refresh', 'fs-5 me-2', '', '', ['height' => '20' , 'width' => '20'])!!}
                <span>{{__('Generate JSON File')}}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
