@extends('backend.layout.content')
@section('title', $usecase ? __('Edit Usecase') : __('Create Usecase'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <h5 class="mb-2">{{$usecase ? __('Edit Usecase') : __('Create Usecase')}}
      </h5>
      <div class="card mb-4">
        <div class="card-body p-3">
          <form id="section_save" data-section-id="{{$usecase != null ? $usecase->id : null}}">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label class="form-label" for="tab_title">{{__('Tab Title')}}</label>
                <input type="text" class="form-control" id="tab_title" name="tab_title"
                       value="{{$usecase!=null ? $usecase->tab_title : null}}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="title">{{__('Title')}}</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{$usecase!=null ? $usecase->title : null}}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="content">{{__('Content')}}</label>
                <input type="text" class="form-control" id="content" name="content"
                       value="{{$usecase!=null ? $usecase->content : null}}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="content_sub">{{__('Content Subtitle')}}</label>
                <input type="text" class="form-control" id="content_sub" name="content_sub"
                       value="{{$usecase!=null ? $usecase->content_sub : null}}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="image">{{__('Image')}}</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
              </div>

              <div class="col-12 d-flex items-center justify-content-center">
                <button type="submit" id="btn_save" class="btn btn-primary w-100">{{__('Save')}}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('page-script')
  <script>
    function sectionSave() {
      $("#section_save").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();

        const id = $(this).attr("data-section-id");
        document.getElementById("btn_save").disabled = true;

        let formData = new FormData();
        formData.append("id", id);
        formData.append("tab_title", $("#tab_title").val());
        formData.append("title", $("#title").val());
        formData.append("content", $("#content").val());
        formData.append("content_sub", $("#content_sub").val());

        if ($("#image").val() != "undefined") {
          formData.append("image", $("#image").prop("files")[0]);
        }

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.frontend.usecases.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Section saved successfully.");
            location.href = '{{route('dashboard.admin.frontend.usecases.index')}}';
            document.getElementById("btn_save").disabled = false;
          },
          error: function(data) {
            let err = data.responseJSON.errors;
            $.each(err, function(index, value) {
              toastr.error(value);
            });
            document.getElementById("btn_save").disabled = false;
          }
        });
        return false;
      });
    }

    sectionSave();
  </script>
@endsection
