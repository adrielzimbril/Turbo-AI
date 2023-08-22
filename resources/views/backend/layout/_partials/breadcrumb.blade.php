<div class="page-header">
  <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
    <div class="page-breadcrumb">
      @isset($back)
        <div class="d-flex btn-list">
          <a href="{{route('dashboard.user.ai.documents.all') }}"
             class="d-flex align-items-center btn btn-label-secondary me-2">
            {!! get_svg_icon('documents', 'fs-4', 'me-2', '', ['height' => '20' , 'width' => '20'])!!}
            {{__('My Documents')}}
          </a>
          <a href="{{route('dashboard.user.ai.index')}}"
             class="d-flex align-items-center btn btn-secondary">
            {!! get_svg_icon('add-square', 'fs-4', 'me-2', '', ['height' => '20' , 'width' => '20'])!!}
            {{__('New')}}
          </a>
        </div>
      @else
        <div class="page-pretitle">
          {{$title}}
        </div>
      @endisset
      <h2 class="page-title mb-2">
        {{$page_title}}
      </h2>
    </div>
    @isset($btn)
      <div class="d-flex btn-list">
        <a href="{{route('dashboard.user.ai.documents.index')}}"
           class="d-flex align-items-center btn btn-label-secondary me-2">
          {!! get_svg_icon('documents', 'fs-4', 'me-2', '', ['height' => '20' , 'width' => '20'])!!}
          {{__('My Documents')}}
        </a>
        <a href="{{route('dashboard.user.ai.index')}}"
           class="d-flex align-items-center btn btn-secondary">
          {!! get_svg_icon('add-square', 'fs-4', 'me-2', '', ['height' => '20' , 'width' => '20'])!!}
          {{__('New')}}
        </a>
      </div>
    @endif
  </div>
</div>
