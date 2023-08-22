@extends('backend.layout.content')
@section('title', __('Frontend Settings'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <form id="frontend_setting_save">
        <h5 class="mb-2">
          {{__('Frontend Landing Page Style')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="d-flex align-items-center gap-3">
              <div class="form-check custom-option custom-option-image custom-option-image-radio">
                <label class="form-check-label custom-option-content" for="frontend_template_1">
                <span class="custom-option-body">
                  <img
                    src="{{asset('media/img/illustrations/index-1.png')}}"
                    alt="{{__('Frontend Landing Style')}} 1">
                </span>
                </label>
                <input name="frontend_template" class="form-check-input" type="radio" value="1"
                       id="frontend_template_1"
                       {{getFrontSection('frontend_template') == '1' ? 'checked' : ''}} required>
              </div>

              <div class="form-check custom-option custom-option-image custom-option-image-radio">
                <label class="form-check-label custom-option-content" for="frontend_template_2">
                <span class="custom-option-body">
                  <img
                    src="{{asset('media/img/illustrations/index-2.png')}}"
                    alt="{{__('Frontend Landing Style')}} 2">
                </span>
                </label>
                <input name="frontend_template" class="form-check-input" type="radio" value="2"
                       id="frontend_template_2"
                       {{getFrontSection('frontend_template') == '2' ? 'checked' : ''}} required>
              </div>
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Frontend Setup')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="d-flex align-items-center form-check-label" for="redirect_url">
                {{__('Custom Landing Page')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('You have a personalized frontend page ? Provide the link of your frontend page. Please provide full URL with http:// or https://')])!!}
              </label>
              <input type="text" class="form-control" id="redirect_url" name="redirect_url"
                     value="{{getFrontSection('redirect_url')}}">
            </div>
            <div class="mb-3 col-md-12">
              <label class="d-flex align-items-center form-check-label" for="custom_css">
                {{__('Custom CSS Style')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('You have a custom CSS Style ? Paste your style here')])!!}
              </label>
              <textarea type="text" class="form-control resize-none" id="custom_css" name="custom_css" rows="8">
                     {{getFrontSection('custom_css')}}
              </textarea>
            </div>
            <div class="mb-3 col-md-12">
              <label class="d-flex align-items-center form-check-label" for="custom_js">
                {{__('Custom JS Script')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('You have a custom JS Script ? Paste your script here')])!!}
              </label>
              <textarea type="text" class="form-control resize-none" id="custom_js" name="custom_js" rows="8">
                     {{getFrontSection('custom_js')}}
              </textarea>
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Footer Social Media')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <div class="mb-3">
                <label class="form-label" for="footer_facebook">Facebook {{__('Social Link')}}</label>
                <input type="text" class="form-control" id="footer_facebook" name="footer_facebook"
                       value="{{getFrontSection('footer_facebook')}}">
              </div>
            </div>

            <div class="mb-3 col-md-12">
              <div class="mb-3">
                <label class="form-label" for="footer_twitter">Twitter {{__('Social Link')}}</label>
                <input type="text" class="form-control" id="footer_twitter" name="footer_twitter"
                       value="{{getFrontSection('footer_twitter')}}">
              </div>
            </div>

            <div class="mb-3 col-md-12">
              <div class="mb-3">
                <label class="form-label" for="footer_instagram">Instagram {{__('Social Link')}}</label>
                <input type="text" class="form-control" id="footer_instagram" name="footer_instagram"
                       value="{{getFrontSection('footer_instagram')}}">
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 d-flex items-center justify-content-center">
          <button type="submit" id="btn_save" class="btn btn-primary w-100">{{__('Save')}}</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('page-script')
  <script>
    function settingsSave() {
      $("#frontend_setting_save").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();

        document.getElementById("btn_save").disabled = true;

        let formData = new FormData();
        formData.append("frontend_template", $("#frontend_template").val());
        formData.append("redirect_url", $("#redirect_url").val());
        formData.append("custom_js", $("#custom_js").val());
        formData.append("custom_css", $("#custom_css").val());
        formData.append("footer_facebook", $("#footer_facebook").val());
        formData.append("footer_instagram", $("#footer_instagram").val());
        formData.append("footer_twitter", $("#footer_twitter").val());

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.frontend.settings.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Settings saved successfully.");
            location.href = '{{route('dashboard.admin.settings.index')}}';
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

    settingsSave();
  </script>
@endsection
