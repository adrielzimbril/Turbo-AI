@extends('backend.layout.content')
@section('title', __('Document Edit'))

@section('content')
  @if($prompt || $usage->content_type == 'stt')
    <div class="my-4">
      <form id="content-form" data-slug="{{$usage->slug}}">
        <div class="d-flex justify-content-between mb-3">
          <div class="d-flex me-2 w-50">
            <input id="doc_title" type="text" class="form-control align-items-center"
                   placeholder="{{__('Untitled Document...')}}" value="{{$usage->title}}">
          </div>

          <div class="d-flex">
            <button class="btn btn-label-secondary p-2 align-items-center me-2" id="copy-btn"
                    title="{{__('Copy to clipboard')}}"
                    data-doc-type="doc" data-doc-name="{{$usage->name}}" data-clipboard-action="copy"
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
                        data-doc-type="doc" data-doc-name="{{$usage->name}}">
                  Ms Word
                </button>
                <button id="export-text" class="d-flex align-items-center dropdown-item workbook_download"
                        data-doc-type="txt" data-doc-name="{{$usage->name}}">
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
          <textarea id="doc_text" class="form-control tinymce" rows="25">{{$usage->output}}</textarea>
        </div>
      </form>
    </div>
  @else
    <pre id="code-ctn" class="language-markup h-100 rounded-4 overflow-auto line-numbers"
         data-dependencies="markup,css!" style="white-space: pre-line;">
      <code id="code"
            class="language-{{substr($usage->prompt, strrpos($usage->prompt, 'in') +3)}}"
            data-prismjs-copy="{{__('Copy')}} !">{{$usage->output}}</code></pre>
  @endif
@endsection

@if($prompt || $usage->content_type == 'stt')
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

          tinymce.get("doc_text").save();

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
    </script>
  @endsection
@endif
