<div class="card shadow-none mb-3">
  <div class="d-flex align-items-center justify-content-end bg-white rounded-2 py-2">
    <a href="{{route('amamarul.translations.home')}}" class="btn btn-label-secondary me-3">
      {!! get_svg_icon('pen-alt-2', 'fs-5 me-2', '', '', ['height' => '20' , 'width' => '20'])!!}
      <span>{{__('All Locations')}}</span>
    </a>
    <a href="{{route('amamarul.translations.lang.publishAll')}}" class="btn btn-label-secondary">
      {!! get_svg_icon('pen-alt-2', 'fs-5 me-2', '', '', ['height' => '20' , 'width' => '20'])!!}
      <span>{{__('Generate JSON File')}}</span>
    </a>
  </div>
</div>

<div class="card bg-label-secondary shadow-none rounded-2 mb-5">
  <div class="card-body p-2 pb-3">
    <div class="alert alert-primary d-flex align-items-center mt-3" role="alert">
                 <span class="alert-icon alert-icon-lg text-primary me-2">
                         {!! get_svg_icon('info-circle-fill', 'fs-5', '', '', ['height' => '20' , 'width' => '20'])!!}
                  </span>
      {{__('If you have previously created or edited a language file (JSON), the Generate process will overwrite those files. Take a backup before process.')}}
    </div>

    <div class="align-items-center rounded-2 bg-white py-1 px-2 mb-3">
      <form action="{{route('amamarul.translations.lang.search')}}"
            class="d-flex align-items-center rounded-2 bg-white py-1 px-2" method="GET">
        <input type="text" class="form-control h-px-40 border-0" name="search" id="new-search"
               placeholder="{{__('Search')}}">
        <button type="submit" class="btn btn-primary">
          {!! get_svg_icon('magnifier', 'fs-4 me-2', '', '', ['height' => '22' , 'width' => '22'])!!}
          {{__('Search')}}
        </button>
      </form>
    </div>

    <div class="row mx-0">
      <div class="col-xl-6 mb-3">
        <form action="{{route('amamarul.translations.lang.newString')}}"
              class="d-flex align-items-center rounded-2 bg-white py-1 px-2" method="GET">
          <input type="text" class="form-control border-0" name="newString" id="new-string"
                 placeholder="{{__('Ex. Hello')}}">
          <button type="submit" class="btn btn-primary">
            {!! get_svg_icon('magnifier', 'fs-4 me-2', '', '', ['height' => '22' , 'width' => '22'])!!}
            {{__('New String')}}
          </button>
        </form>
      </div>
      <div class="col-xl-6 mb-3">
        <form action="{{route('amamarul.translations.lang.newLang')}}"
              class="d-flex align-items-center rounded-2 bg-white py-1 px-2" method="GET"
              onSubmit="if(!confirm('{{__('Are you sure you want to create a new language?')}}')){return false;}">
          <input type="text" class="form-control border-0"
                 placeholder="{{__('lang code Ex. es')}}" name="newLang" id="new-lang">
          <button type="submit" class="btn btn-primary">
            {!! get_svg_icon('magnifier', 'fs-4 me-2', '', '', ['height' => '22' , 'width' => '22'])!!}
            {{__('New Language')}}
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
