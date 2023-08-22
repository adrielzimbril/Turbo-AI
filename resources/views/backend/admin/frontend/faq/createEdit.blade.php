@extends('backend.layout.content')
@section('title', $faq ? __('Edit Question') : __('Create Question'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <h5 class="mb-2">
        {{$faq ? __('Edit Question') : __('Create Question')}}
      </h5>
      <div class="card mb-4">
        <div class="card-body p-3">
          <form id="section_save" data-section-id="{{$faq != null ? $faq->id : null}}">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label class="form-label" for="question">{{__('Question')}}</label>
                <input type="text" class="form-control" id="question" name="question"
                       value="{{$faq !=null ? $faq->question : null}}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label" for="answer">{{__('Answer')}}</label>
                <textarea name="answer" id="answer" class="form-control resize-none" rows="8"
                          required>{{$faq !=null ? $faq->answer : null}}</textarea>
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
        formData.append("question", $("#question").val());
        formData.append("answer", $("#answer").val());

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.frontend.faq.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Section saved successfully.");
            location.href = '{{route('dashboard.admin.frontend.faq.index')}}';
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
