@extends('backend.layout.content')
@section('title', $testimonial ? __('Edit Testimonial') : __('Create New Testimonial'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <h5 class="mb-2">{{$testimonial ? __('Edit Testimonial') : __('Create Testimonial')}}
      </h5>
      <div class="card mb-4">
        <div class="card-body p-3">
          <form id="section_save" data-section-id="{{$testimonial != null ? $testimonial->id : null}}">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label class="form-label">{{__('Avatar')}}</label>
                <input type="file" class="form-control" id="avatar" name="avatar"
                       value="{{$testimonial ? $testimonial->avatar : null}}" accept="image/png, image/jpeg">
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="name">{{__('Name')}}</label>
                <input type="text" class="form-control" id="name" name="name"
                       value="{{$testimonial ? $testimonial->name : null}}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="work">{{__('Job Title')}}</label>
                <input type="text" class="form-control" id="work" name="work"
                       value="{{$testimonial ? $testimonial->work : null}}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="content">{{__('Testimonial')}}</label>
                <textarea class="form-control" name="content" id="content" rows="8"
                          required>{{$testimonial ? $testimonial->content : null}}</textarea>
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
        formData.append("name", $("#name").val());
        formData.append("work", $("#work").val());
        formData.append("content", $("#content").val());

        if ($("#avatar").val() != "undefined") {
          formData.append("avatar", $("#avatar").prop("files")[0]);
        }

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.frontend.testimonials.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Section saved successfully.");
            location.href = '{{route('dashboard.admin.frontend.testimonials.index')}}';
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
