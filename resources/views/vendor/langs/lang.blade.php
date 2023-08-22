@extends(config('amamarul-location.layout'))
@section(config('amamarul-location.content_section'))
  @include('langs::includes.tools')

  <div class="card">
    <div class="card-body p-2 pb-3">
      @foreach (collect($string)->except(['code','created_at','updated_at'])->toArray() as $key => $element)
        <div class="px-3">
          <div class="mb-2"><code class="rounded-2">{{$key}} {{emojiFlag($key)}}</code></div>
          <a href="#" class="string-edit" data-type="textarea" data-column="code"
             data-url="{{url('translations/lang/update/'.$string->code)}}" data-pk="{{$string->code}}"
             data-title="change"
             data-name="{{$key}}">{{$element}}</a> <br>
          <hr class="mt-3">
        </div>
      @endforeach
    </div>
  </div>
@endsection
@section(config('amamarul-location.scripts_section'))
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
        rel="stylesheet"/>
  <script
    src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  <script>
    $.fn.editable.defaults.mode = "inline";
    $.fn.editableform.buttons = `<button type="submit" class="btn btn-primary editable-submit btn-sm rounded-2">{!! get_svg_icon('pen-alt-2', 'fs-5', '', '', ['height' => '20' , 'width' => '20'])!!}</button><button type="button" class="btn btn-secondary editable-cancel btn-sm rounded-2">{!! get_svg_icon('refresh', 'fs-5', '', '', ['height' => '20' , 'width' => '20'])!!}</button>`;
    $(document).ready(function () {
      $(".string-edit").editable({
        rows: 3,
        params: function (params) {
          // add additional params from data-attributes of trigger element
          params.name = $(this).editable().data("name");
          return params;
        },
        error: function (response, newValue) {
          if (response.status === 500) {
            return "Server error. Check entered data.";
          } else {
            return response.responseText;
            // return "Error.";
          }
        }
      });
    });
  </script>
@endsection
