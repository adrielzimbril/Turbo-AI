@extends(config('amamarul-location.layout'))
@section(config('amamarul-location.content_section'))
  @include('langs::includes.tools')

  <div class="card">
    <div class="card-header d-flex justify-content-between">
      <div class="card-title m-0">
        <h5 class="mb-0 mt-2">{{__('Editing')}} {{__('Language')}}: <span
            class="text-muted text-uppercase">{{ucfirst($lang)}}_{{emojiFlag($lang)}}</span>
        </h5>
      </div>
      <div class="d-flex align-items-center">
        <a href="{{route('amamarul.translations.lang.generateJson',$lang)}}" class="btn btn-label-secondary"
           title="{{__('Generate JSON File')}}">
          {!! get_svg_icon('refresh', 'fs-5', '', '', ['height' => '20' , 'width' => '20'])!!}
        </a>
      </div>
    </div>

    <div class="card-body p-2 pb-3">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          @foreach($list as $key => $value)
            <tr>
              <td width="10px">
                <input type="checkbox" name="ids_to_edit[]" value="{{$value->id}}"/>
              </td>
              @foreach ($value->toArray() as $key => $element)
                @if ($key !== 'code')
                  <td style="max-width:450px!important">
                    <a href="#" class="string-edit" data-type="textarea" data-column="code"
                       data-url="{{url('translations/lang/update/'.$value->code)}}"
                       data-pk="{{$value->code}}" data-title="change"
                       data-name="{{$key}}">{{$element}}</a>
                  </td>
                @endif
              @endforeach
              <td>
                <a href="{{route('amamarul.translations.lang.string',$value->code)}}"
                   class="d-flex btn btn-icon btn-label-secondary mx-auto" title="{{__('Show')}}">
                  {!! get_svg_icon('eye', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                </a>
              </td>
            </tr>
          @endforeach
        </table>
      </div>
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
