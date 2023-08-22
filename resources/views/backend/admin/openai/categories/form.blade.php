@extends('backend.layout.content')
@section('title', 'Add or Edit Custom Template')
@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <form id="cat_save" data-cat-id="{{$category != null ? $category->id : null}}">
        <h5 class="mb-2">
          {{__('Add or Edit Custom Template')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-12">
              <label class="form-label" for="name">{{__('Category Name')}}</label>
              <input type="text" class="form-control" id="name" name="name"
                     value="{{$category != null ? $category->name : ''}}">
            </div>

            <div class="col-12 d-flex categorys-center justify-content-center">
              <button type="submit" id="btn_save" class="btn btn-primary w-100">{{__('Save')}}</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection


@section('page-script')
  <script>
    function chatSave() {
      $("#cat_save").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();

        const id = $(this).attr("data-cat-id");

        document.getElementById("btn_save").disabled = true;

        let formData = new FormData();
        formData.append("id", id);
        formData.append("name", $("#name").val());

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.ai.categories.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Chat Saved successfully.");
            location.href = '{{route('dashboard.admin.ai.categories.index')}}';
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

    chatSave();
  </script>
@endsection
