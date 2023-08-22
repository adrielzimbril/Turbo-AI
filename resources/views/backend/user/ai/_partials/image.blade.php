<div class="col-6 col-md-4 col-xl-2 ">
  <div class="img-thumbnail img-thumbnail-zoom-in rounded-3 mb-2 overflow-hidden">
    <a href="{{asset($usage->output)}}" data-external-thumb-image="{{asset($usage->output)}}">
      <img data-src="{{asset($usage->output)}}" src="{{asset($usage->output)}}" class="w-100 h-100"
           data-prompt="{{$usage->prompt}}" alt="{{$usage->prompt}}">
    </a>
    <div class="img-thumbnail-content zindex-5">
      <div
        class="d-flex align-items-center justify-content-center gap-2 w-100 h-100 position-absolute top-0 left-0">
        <a href="{{asset($usage->output)}}" class="btn rounded-pill bg-white p-2" download>
          {!! get_svg_icon('download-square', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
        </a>
        <a href="{{asset($usage->output)}}" data-external-thumb-image="{{asset($usage->output)}}"
           title="{{$usage->prompt}}"
           class="view btn rounded-pill bg-white p-2">
          {!! get_svg_icon('pen-alt-2', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
        </a>
        <a
          href="{{route('dashboard.user.ai.image.delete', $usage->slug)}}"
          onclick="return confirm('Are you sure?')" class="btn rounded-pill bg-white p-2">
          {!! get_svg_icon('trash-bin-minimalistic', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
        </a>
      </div>
    </div>
    <span class="img-thumbnail-overlay w-100 h-100" style="background-color: #111827e6;"></span>
  </div>
</div>
