@extends('backend.layout.content')
@section('title', $feature ? __('Edit Feature') : __('Create Feature'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <h5 class="mb-2">{{$feature ? __('Edit Feature') : __('Create Feature')}}
      </h5>
      <div class="card mb-4">
        <div class="card-body p-3">
          <form id="section_save" data-section-id="{{$feature != null ? $feature->id : null}}">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label class="form-label" for="title">{{__('Title')}}</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{$feature !=null ? $feature->title : null}}" required>
              </div>
              <div class="col-md-12 mb-3">
                <label class="form-label" for="description">{{__('Description')}}</label>
                <textarea name="description" id="description" class="form-control resize-none" rows="6"
                          required>{{$feature !=null ? $feature->description : null}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                <label class="form-label" for="icon">{{__('Icon')}}</label>
                <textarea name="icon" id="icon" class="form-control resize-none" rows="8"
                          required>{{$feature !=null ? $feature->icon : null}}</textarea>
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

        document.getElementById("btn_save").disabled = true;

        let formData = new FormData();
        formData.append("title", $("#title").val());
        formData.append("description", $("#description").val());
        formData.append("icon", $("#icon").val());

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.frontend.features.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Section saved successfully.");
            location.href = '{{route('dashboard.admin.frontend.features.index')}}';
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

