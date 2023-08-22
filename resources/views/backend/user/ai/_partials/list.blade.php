@foreach($ai as $item)
  @if($item->active != 1)
    @continue
  @endif

  <div class="col-md-3 position-relative my-2" data-grid-el="{{$item->category->name}}">
    <div class="card h-100 border shadow-none">
      <div class="card-body">
        <div class="d-flex justify-content-between w-100 gap-2 align-items-center mb-2">
          @if ( $item->icon !== 'none' )
            <span class="badge bg-label-info rounded p-2 me-3">
              {!! get_svg_icon_db($item->icon, 'fs-icon', ['height' => '22' , 'width' => '22']) !!}
            </span>
          @endif

          <a href="javascript:void(0)" data-liker="{{$item->id}}"
             class="border {{isFavorited($item->id) ? 'border-warning' : '' }} text-warning cursor-pointer zindex-5 rounded-3 p-2">
            {!! get_svg_icon('star-2', 'fs-5', '', '', ['height' => '22' , 'width' => '22'])!!}
          </a>
        </div>
        <h5 class="my-2">{{__($item->name)}}</h5>
        <span class="text-muted"> {{__($item->description)}} </span>
      </div>
    </div>
    <a class="position-absolute h-100 w-100 bottom-0 zindex-3"
       href="{{route('dashboard.user.ai.creator.view', $item->slug)}}"></a>
  </div>
@endforeach
