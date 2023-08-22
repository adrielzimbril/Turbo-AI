@extends('backend.layout.content')
@section('title', __('AI Creator'))

@section('content')
  <div class="row">
    <div class="col-xl-4">
      <div class="card mb-4">
        <div class="card-body p-3">
          <div class="col-12 mb-3">
            <div class="alert alert-info border-0">
              <span>
                {{__('Remaining Credits')}}: {{Auth::user()->remaining_words == -1 ? 'Unlimited' : number_format((int)Auth::user()->remaining_words)}} {{__('Words')}}
              </span>
            </div>
          </div>
          <form class="row" id="content_create">
            @foreach(json_decode($prompt->fields) as $field)
              <div class="mb-3">
                @if($field->type == 'text')
                  <label class="form-label" for="{{$field->name}}">{{$field->question}}</label>
                  <input type="{{$field->type}}" class="form-control" id="{{$field->name}}"
                         name="{{$field->name}}" maxlength="{{getSetting('openai_max_input_length')}}"
                         required="required">
                @elseif($field->type == 'textarea')
                  <label class="form-label" for="{{$field->name}}">{{$field->question}}</label>
                  <textarea class="form-control" id="{{$field->name}}" name="{{$field->name}}" rows="8"
                            maxlength="{{getSetting('openai_max_input_length')}}"
                            required="required"></textarea>
                @elseif($field->type == 'select')
                  <label class="form-label" for="{{$field->name}}">{{$field->question}}</label>
                  <select class="form-select" id="{{$field->name}}" name="{{$field->name}}" required="required">
                    {!! $field->select !!}
                  </select>
                @endif
              </div>
            @endforeach

            <div class="mb-3 col-md-6">
              <label class="form-label" for="maximum_length">{{__('Maximum Length')}}</label>
              <input type="number" class="form-control" id="maximum_length" name="maximum_length"
                     max="{{getSetting('openai_max_output_length')}}"
                     value="{{getSetting('openai_max_output_length')}}"
                     placeholder="{{__('Maximum character length of text')}}" required>
            </div>

            <div class="mb-3 col-md-6">
              <label class="form-label" for="number_of_results">{{__('Number of Results')}}</label>
              <input type="number" class="form-control" id="number_of_results" name="number_of_results" value="1"
                     placeholder="{{__('Number of results')}}" required>
            </div>

            <div class="mb-3 col-md-6">
              <label class="form-label" for="creativity">{{__('Creativity')}}</label>
              <select type="text" class="form-select" name="creativity" id="creativity" required>
                <option
                  value="0.25" {{getSetting('openai_default_creativity') == 0.25 ? 'selected' : ''}}>{{__('Economic')}}</option>
                <option
                  value="0.5" {{getSetting('openai_default_creativity') ? 'selected' : ''}}>{{__('Average')}}</option>
                <option
                  value="0.75" {{getSetting('openai_default_creativity') == 0.75 ? 'selected' : ''}}>{{__('Good')}}</option>
                <option
                  value="1" {{getSetting('openai_default_creativity') == 1 ? 'selected' : ''}}>{{__('Premium')}}</option>
              </select>
            </div>

            <div class="mb-3 col-md-6">
              <label class="form-label" for="tone_of_voice">{{__('Tone of Voice')}}</label>
              <select class="form-select" id="tone_of_voice" name="tone_of_voice" required>
                <option
                  value="Professional" {{getSetting('openai_default_tone_of_voice') == 'Professional' ? 'selected' : null}}>{{__('Professional')}}</option>
                <option
                  value="Funny" {{getSetting('openai_default_tone_of_voice') == 'Funny' ? 'selected' : null}}>{{__('Funny')}}</option>
                <option
                  value="Casual" {{getSetting('openai_default_tone_of_voice') == 'Casual' ? 'selected' : null}}>{{__('Casual')}}</option>
                <option
                  value="Excited" {{getSetting('openai_default_tone_of_voice') == 'Excited' ? 'selected' : null}}>{{__('Excited')}}</option>
                <option
                  value="Witty" {{getSetting('openai_default_tone_of_voice') == 'Witty' ? 'selected' : null}}>{{__('Witty')}}</option>
                <option
                  value="Sarcastic" {{getSetting('openai_default_tone_of_voice') == 'Sarcastic' ? 'selected' : null}}>{{__('Sarcastic')}}</option>
                <option
                  value="Feminine" {{getSetting('openai_default_tone_of_voice') == 'Feminine' ? 'selected' : null}}>{{__('Feminine')}}</option>
                <option
                  value="Masculine" {{getSetting('openai_default_tone_of_voice') == 'Masculine' ? 'selected' : null}}>{{__('Masculine')}}</option>
                <option
                  value="Bold" {{getSetting('openai_default_tone_of_voice') == 'Bold' ? 'selected' : null}}>{{__('Bold')}}</option>
                <option
                  value="Dramatic" {{getSetting('openai_default_tone_of_voice') == 'Dramatic' ? 'selected' : null}}>{{__('Dramatic')}}</option>
                <option
                  value="Grumpy" {{getSetting('openai_default_tone_of_voice') == 'Grumpy' ? 'selected' : null}}>{{__('Grumpy')}}</option>
                <option
                  value="Secretive" {{getSetting('openai_default_tone_of_voice') == 'Secretive' ? 'selected' : null}}>{{__('Secretive')}}</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label" for="language">{{__('Language')}}</label>
              <select type="text" class="form-select" name="language" id="language" required>
                @include('backend.user.ai._partials.countries')
              </select>
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
          <form id="content-form" data-slug="">
            <div class="d-flex justify-content-between mb-3">
              <div class="d-flex me-2 w-50">
                <input id="doc_title" type="text" class="form-control align-items-center"
                       placeholder="{{__('Untitled Document...')}}">
              </div>

              <div class="d-flex">
                <button class="btn bg-label-secondary p-2 align-items-center me-2" id="copy-btn"
                        title="{{__('Copy to clipboard')}}"
                        data-doc-type="doc" data-doc-name="{{$prompt->name}}" data-clipboard-action="copy"
                        data-clipboard-target="#doc_text">
                  {!! get_svg_icon('files-earmark', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                </button>

                <div class="dropdown d-flex me-2">
                  <button class="btn btn-label-secondary p-2 align-items-center" type="button"
                          id="download-btn"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                    {!! get_svg_icon('download-square', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="content-download-btn">
                    <button id="export-doc" class="d-flex align-items-center dropdown-item workbook_download"
                            data-doc-type="doc" data-doc-name="">
                      Ms Word
                    </button>
                    <button id="export-text" class="d-flex align-items-center dropdown-item workbook_download"
                            data-doc-type="txt" data-doc-name="">
                      Txt File
                    </button>
                  </div>
                </div>
                <button class="btn btn-label-secondary p-2 align-items-center" id="save-btn" type="button"
                        title="{{__('Save')}}">
                  {!! get_svg_icon('file-earmark-check-fill', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                </button>
              </div>
            </div>

            <div class="h-100">
              <textarea id="doc_text" class="form-control tinymce" rows="25"></textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('page-script')
  <script>
    const to = {
      selector: ".tinymce",
      height: 520,
      menubar: false,
      statusbar: false,
      plugins: ["advlist", "link", "autolink", "lists", "code"],
      toolbar:
        "undo redo | styles | forecolor backcolor emoticons | bold italic underline | link | alignleft aligncenter alignright | bullist numlist outdent indent",
      toolbar_mode: "scrolling"
    };
    tinymce.init(to);

    function docUpdate() {
      $("#save-btn").on("click", function(e) {
        e?.preventDefault();
        e?.stopPropagation();

        const slug = document.getElementById("content-form").getAttribute("data-slug"),
          btn = $(this);
        btn.disabled = true;

        let formData = new FormData();
        formData.append("doc_slug", slug);
        formData.append("doc_text", $("#doc_text").val());
        formData.append("doc_title", $("#doc_title").val());

        $.ajax({
          headers: {
            "X-CSRF-TOKEN": '{{ csrf_token() }}'
          },
          type: "POST",
          url: '{{ route('dashboard.user.ai.documents.save') }}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr["success"]('{{__('Document Saved Successfully.')}}');
            btn.disabled = false;
          },
          error: function(data) {
            let err = data.responseJSON.errors;
            $.each(err, function(index, value) {
              toastr["error"](value);
            });
            btn.disabled = false;
          }
        });
        return false;
      });
    }

    docUpdate();

    function createContent() {
      $("#content_create").on("submit", function(e) {
        "use strict";
        tinymce.remove(".tinymce");
        e?.preventDefault();
        e?.stopPropagation();
        const btn = document.getElementById("create_btn");
        btn.disabled = true;

        let formData = new FormData();
        formData.append("type", '{{$prompt->slug}}');
        formData.append("prompt_id", {{$prompt->id}});
        formData.append("maximum_length", $("#maximum_length").val());
        formData.append("number_of_results", $("#number_of_results").val());
        formData.append("creativity", $("#creativity").val());
        formData.append("tone_of_voice", $("#tone_of_voice").val());
        formData.append("language", $("#language").val());
        @foreach(json_decode($prompt->fields) as $field)
        formData.append('{{$field->name}}', $("{{'#'.$field->name}}").val());
        @endforeach

        $.ajax({
          headers: {
            "X-CSRF-TOKEN": '{{ csrf_token() }}'
          },
          type: "POST",
          url: "{{ route('dashboard.user.ai.creator.process') }}",
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            const { title, slug, output, message_id, maximum_length, number_of_results, creativity } = data;
            const docs = [].slice.call(
              document.querySelectorAll("[data-doc-name]")
            );
            docs.forEach(doc => {
              doc.setAttribute("data-doc-name", title);
            });

            document.getElementById("content-form").setAttribute("data-slug", slug);

            $("#doc_title").val(title);
            $("textarea.tinymce").val(output);

            tinymce.init(to);

            let url = '{{ route('dashboard.user.ai.creator.result') }}',
              responseText = "";

            const eventSource = new EventSource(
              `${url}?message_id=${message_id}&maximum_length=${maximum_length}&number_of_results=${number_of_results}&creativity=${creativity}`);

            eventSource.onmessage = function(e) {
              let txt = e.data;
              if (txt === "[DONE]") {
                eventSource.close();
                btn.disabled = false;
              }
              if (txt && txt !== "[DONE]") {
                responseText += txt.split("/**")[0];
                tinymce.activeEditor.setContent(responseText, { format: "raw" });
              }
            };
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
