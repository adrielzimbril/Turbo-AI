@extends('backend.layout.content')
@section('title', __('AI Code'))

@section('content')
  <div class="row">
    <div class="col-xl-4">
      <div class="card mb-4">
        <div class="card-body p-3">
          <div class="mb-3 col-12 mb-0">
            <div class="alert alert-info border-0">
              <span>
                {{__('Remaining Credits')}}: {{Auth::user()->remaining_words == -1 ? 'Unlimited' : number_format((int)Auth::user()->remaining_words)}} {{__('Words')}}
              </span>
            </div>
          </div>
          <form class="row" id="content_create">
            <div class="mb-3">
              <label class="form-label" for="description">{{__('Type of code')}}</label>
              <textarea class="form-control" id="description" name="description" rows="8"
                        maxlength="{{getSetting('openai_max_input_length')}}"
                        required="required"></textarea>

              <label class="form-label" for="code_language">{{__('Code Language (Next.js, PHP ...)')}}</label>
              <input type="text" class="form-control" id="code_language"
                     name="code_language" maxlength="{{getSetting('openai_max_input_length')}}"
                     required="required">
            </div>

            <div class="col-12 d-flex items-center justify-content-center">
              <span class="d-none">{{__('Please wait...')}}</span>
              <button type="submit" id="create_btn" class="btn btn-primary w-100">{{__('Generate')}}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-8">
      <div class="card mb-4">
        <div class="card-body">
          <div class="h-100">
            <input type="hidden" id="code_output" name="code_output">
            <pre id="code-ctn" class="language-markup h-100 rounded-4 overflow-auto line-numbers"
                 data-dependencies="markup,css!" style="white-space: pre-line;">
            <code id="code"
                  class=""
                  data-prismjs-copy="{{__('Copy')}} !">{{__('Your code container')}}</code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('page-script')
  <script>
    function createContent() {
      $("#content_create").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();
        const btn = document.getElementById("create_btn");
        btn.disabled = true;

        let formData = new FormData();
        formData.append("description", $("#description").val());
        formData.append("code_language", $("#code_language").val());

        $.ajax({
          headers: {
            "X-CSRF-TOKEN": '{{ csrf_token() }}'
          },
          type: "POST",
          url: "{{ route('dashboard.user.ai.code.process') }}",
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            const { output, lang } = data;

            const code = $("#code");

            code.html(output);
            window.codeRaw = $("#code").text();
            code.attr("class", "");
            code.addClass(`language-${lang ?? "javascript"}`);
            window.Prism = window.Prism || {};
            window.Prism.manual = true;
            btn.disabled = false;
          },
          error: function(data) {
            if (data.responseJSON.errors) {
              $.each(data.responseJSON.errors, function(index, value) {
                toastr["error"](value);
              });
            } else if (data.responseJSON.message) {
              toastr["error"](data.responseJSON.message);
            }
            btn.disabled = false;
          }
        });
        return false;
      });
    }

    createContent();
  </script>
@endsection
