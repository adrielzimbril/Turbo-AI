@extends('backend.layout.content')
@section('title', __('AI Speech To Text'))

@section('content')
  <div class="row">
    <div class="col-xl-4">
      <div class="card mb-4">
        <div class="card-body p-3">
          <div class="col-12 mb-3">
            <div class="alert alert-primary d-flex align-items-start" role="alert">
                <span class="alert-icon text-primary me-2">
                  {!! get_svg_icon('info-circle-fill', 'fs-5', '', '', ['height' => '20', 'width' => '20'])!!}
              </span>
              <div class="flex-column ps-1">
                <h6 class="mb-1">
                  {{__('Upload your file in format')}} : mp3, mp4, mpeg, mpga, m4a, wav, and webm
                </h6>
                <span>{{__('Max File size accepted:')}} 25MB</span>
              </div>
            </div>
          </div>
          <form class="row" id="content_create">
            <div class="mb-3">
              <label class="form-label" for="file">{{__('Audio file')}}</label>
              <input type="file" class="form-control" name="file" id="file" accept="audio/*" required>
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
                        data-doc-type="doc" data-doc-name="" data-clipboard-action="copy"
                        data-clipboard-target="#doc_text">
                  {!! get_svg_icon('files-earmark', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                </button>

                <div class="dropdown d-flex me-2">
                  <button class="btn bg-label-secondary p-2 align-items-center" type="button"
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
              </div>
            </div>

            <div id="content-form" class="h-100">
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

    $("#file").on("change", function() {
      "use strict";
      if (this.files[0].size > 2490000) {
        toastr["error"]("This file exceed the limit of file size upload.");
        document.getElementById("file").value = null;
      }
    });

    function createContent() {
      $("#content_create").on("submit", function(e) {
        "use strict";
        tinymce.remove(".tinymce");
        e?.preventDefault();
        e?.stopPropagation();
        const btn = document.getElementById("create_btn");
        btn.disabled = true;

        let formData = new FormData();
        formData.append("file", $("#file").prop("files")[0]);

        $.ajax({
          headers: {
            "X-CSRF-TOKEN": '{{ csrf_token() }}'
          },
          type: "POST",
          url: "{{ route('dashboard.user.ai.stt.process') }}",
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            const { title, slug, output } = data;
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
