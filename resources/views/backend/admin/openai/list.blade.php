@extends('backend.layout.content')
@section('title', __('Built-in Templates'))

@section('content')
  <h5 class="mb-2">
    {{__('Built-in Templates')}}
  </h5>
  <div class="card">
    <div class="table-responsive">
      <table class="table">
        <thead>
        <tr>
          <th>{{__('Status')}}</th>
          <th>{{__('Template Name')}}</th>
          <th>{{__('Template Description')}}</th>
          <th>{{__('Package')}}</th>
          <th>{{__('Updated At')}}</th>
          <th>{{__('Actions')}}</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($prompts as $prompt)
          <tr>
            <td><span
                class="badge bg-label-{{$prompt->active == 1 ? 'primary' : 'secondary' }} me-1">{{$prompt->active == 1 ? __('Active') : __('Disable') }}</span>
            </td>
            <td>{{__($prompt->name)}}</td>
            <td>{{__($prompt->description)}}</td>
            <td>{{$prompt->premium == 1 ? __('Premium') : __('Regular')}}</td>
            <td>
              {{date('j F, Y h:i:s A', strtotime($prompt->updated_at))}}
            </td>
            <td>
              <a href="javascript:void(0);"
                 data-prompt-id="{{$prompt->id}}"
                 class="btn-state d-flex btn bg-label-{{$prompt->active == 1 ? 'success' : 'danger' }} text-white">{{$prompt->active == 1 ? __('Active') : __('Disable') }}
              </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection


@section('page-script')
  <script>
    function state() {
      $(".btn-state").on("click", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();
        "use strict";

        const id = $(this).attr("data-prompt-id");
        let formData = new FormData();
        formData.append("id", id);

        $(this).addClass("disabled");

        $.ajax({
          type: "post",
          url: '{{route('dashboard.admin.ai.state')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Status changed successfully.");
            location.href = '{{route('dashboard.admin.ai.index')}}';
            $(this).removeClass("disabled");
          },
          error: function(data) {
            toastr.error("Something went wrong. Please reload the page and try it again.");
          }
        });
        return false;
      });
    }

    state();
  </script>
@endsection
