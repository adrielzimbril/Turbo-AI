<div class="card-body p-2 pb-3">
  <div class="d-flex align-items-center rounded-2 bg-white py-1 px-2 mb-3"
       href="javascript:void(0);">
    <input type="text" class="search-ai form-control h-px-40 border-0"
           placeholder="E.g: 'Facebook Ads', 'Paragraph Generator'"
           aria-label="E.g: 'Facebook Ads', 'Paragraph Generator'">
    <span class="py-3 px-2">
      {!! get_svg_icon('magnifier', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
        </span>
  </div>

  <div class="filter-map d-flex flex-wrap align-items-center rounded-3 bg-white m-0 p-2">
    <a data-grid-mapper="all"
       class="d-inline-flex px-4 py-2 mx-1 rounded-pill cursor-pointer bg-primary text-white active">
      {{__('All')}}
    </a>
    @foreach($filters as $filter)
      <a data-grid-mapper="{{$filter->name}}"
         class="d-inline-flex px-4 py-2 m-1 rounded-pill cursor-pointer bg-label-secondary">
        {{Str::ucfirst($filter->name)}}
      </a>
    @endforeach
  </div>
</div>

