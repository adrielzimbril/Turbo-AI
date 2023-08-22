@extends('backend.layout.content')
@section('title', $work ? __('Edit How It Work') : __('Create How It Work'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <h5 class="mb-2">{{$work ? __('Edit How It Work') : __('Create How It Work')}}
      </h5>
      <div class="card mb-4">
        <div class="card-body p-3">
          <form id="section_save" data-section-id="{{$work != null ? $work->id : null}}">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label class="form-label" for="order">{{__('Order')}}</label>
                <input type="text" class="form-control" id="order" name="order"
                       value="{{$work != null ? $work->order : null}}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="title">{{__('Title')}}</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{$work != null ? $work->title : null}}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="content">{{__('Content')}}</label>
                <textarea name="content" id="content" class="form-control resize-none" rows="4"
                          required>{{$work != null ? $work->content : null}}</textarea>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="image">{{__('Image')}}</label>
                <input type="file" class="form-control" id="image" name="image"
                       accept="image/*">
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
        formData.append("order", $("#order").val());
        formData.append("title", $("#title").val());
        formData.append("content", $("#content").val());

        if ($("#image").val() != "undefined") {
          formData.append("image", $("#image").prop("files")[0]);
        }

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.frontend.howItWorks.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Section saved successfully.");
            location.href = '{{route('dashboard.admin.frontend.howItWorks.index')}}';
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
