@extends('backend.layout.content')
@section('title',__('General Settings'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <form id="setting_save">
        <h5 class="mb-2">
          {{__('Global Settings')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-12">
              <label class="form-label" for="site_name">{{__('Site Name')}}</label>
              <input type="text" class="form-control" id="site_name" name="site_name"
                     value="{{getSetting('site_name')}}">
            </div>

            <div class="mb-3 col-12">
              <label class="form-label" for="site_url">{{__('Site URL')}}</label>
              <input type="text" class="form-control" id="site_url" name="site_url" value="{{getSetting('site_url')}}">
            </div>

            <div class="mb-3 col-12">
              <label class="form-label" for="site_email">{{__('Site Email')}}</label>
              <input type="text" class="form-control" id="site_email" name="site_email"
                     value="{{getSetting('site_email')}}">
            </div>

            <div class="mb-3 col-12">
              <label class="form-label" for="default_country">{{__('Default Country')}}</label>
              <select class="form-select" name="default_country" id="default_country">
                @include('backend.admin.settings.countries')
              </select>
            </div>

            <div class="mb-3 col-12">
              <label class="form-label" for="default_currency">{{__('Default Currency')}}</label>
              <select class="form-select" name="default_currency" id="default_currency">
                @include('backend.admin.settings.currencies')
              </select>
            </div>

            <div class="mb-3 col-12">
              <label class="form-label" for="register_active">{{__('Registration Active')}}</label>
              <select class="form-select" name="register_active" id="register_active">
                <option value="1" {{getSetting('register_active') == 1 ? 'selected' : ''}}>{{__('Active')}}</option>
                <option value="0" {{getSetting('register_active') == 0 ? 'selected' : ''}}>{{__('Passive')}}</option>
              </select>
            </div>

            <div class="mb-3 col-12">
              <label class="d-flex align-items-center form-check-label" for="free_plan_words">
                {{__('Free Words Usage After Registration')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('If you want to give to your user free words usage for test')])!!}
              </label>
              <input type="text" class="form-control" id="free_plan_words" name="free_plan_words"
                     value="{{getSetting('free_plan_words') }}">
            </div>

            <div class="mb-3 col-12">
              <label class="d-flex align-items-center form-check-label" for="free_plan_images">
                {{__('Free Images Usage After Registration')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('If you want to give to your user free images usage for test')])!!}
              </label>
              <input type="text" class="form-control" id="free_plan_images" name="free_plan_images"
                     value="{{getSetting('free_plan_images') }}">
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Social Login')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="mb-3 col-12">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                <span class="alert-icon text-primary me-2">
                   {!! get_svg_icon('info-circle-fill', 'fs-5', '', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Follow this documentation for configure social login.')])!!}
                </span>
                  <a class="d-flex align-center" href="https://docs.oricodes.com/turboai/social-login"
                     target="_blank">
                    {{__('Check the documentation.')}}
                    {!! get_svg_icon('arrow-up-right', 'fs-4 ms-1', '', '', ['height' => '18', 'width' => '18'])!!}
                  </a>
                </div>
              </div>
              <div class="mb-3 col-12">
                <label class="form-check form-switch switch">
                  <input class="form-check-input" type="checkbox"
                         id="facebook_active" {{ getSetting('facebook_active') ? 'checked' : '' }}>
                  <span class="form-check-label">{{__('Facebook') }}</span>
                </label>
              </div>
              <div class="mb-3 col-12">
                <label class="form-check form-switch switch">
                  <input class="form-check-input" type="checkbox"
                         id="google_active" {{ getSetting('google_active') ? 'checked' : '' }}>
                  <span class="form-check-label">{{__('Google') }}</span>
                </label>
              </div>
              <div class="mb-3 col-12">
                <label class="form-check form-switch switch">
                  <input class="form-check-input switch" type="checkbox"
                         id="github_active" {{ getSetting('github_active') ? 'checked' : '' }}>
                  <span class="form-check-label">{{__('Github') }}</span>
                </label>
              </div>
              <div class="mb-3 col-12">
                <label class="form-check form-switch switch">
                  <input class="form-check-input switch" type="checkbox"
                         id="twitter_active" {{ getSetting('twitter_active') ? 'checked' : '' }}>
                  <span class="form-check-label">{{__('Twitter') }}</span>
                </label>
              </div>
              <div class="mb-3 col-12">
                <label class="form-check form-switch switch">
                  <input class="form-check-input" type="checkbox"
                         id="login_without_confirmation" {{ getSetting('login_without_confirmation') == 0 ?  'checked' : '' }}>
                  <span class="d-flex align-items-center form-check-label">
                 {{__('Disable Login Without Confirmation') }}
                    {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('If this is enabled users cannot login unless they confirm their emails.')])!!}
                    </span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Logo Settings')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="mb-3 col-12">
                <label class="form-label" for="favicon">{{__('Site Favicon')}}</label>
                <input type="file" class="form-control" id="favicon" name="favicon">
              </div>
              <div class="mb-3 col-12">
                <label class="form-label" for="logo">{{__('Site Logo')}}</label>
                <input type="file" class="form-control" id="logo" name="logo">
              </div>
              <div class="mb-3 col-12">
                <label class="form-label" for="logo_dark">{{__('Site Logo Dark')}}</label>
                <input type="file" class="form-control" id="logo_dark" name="logo_dark">
              </div>
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Seo Settings')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="google_analytics_code">{{__('Google Analytics Tracking ID')}}
                (UA-1xxxxx)</label>
              <input type="text" class="form-control" id="google_analytics_code" name="google_analytics_code"
                     value="{{getSetting('google_analytics_code')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="meta_title">{{__('Meta Title')}}</label>
              <input type="text" class="form-control" id="meta_title" name="meta_title"
                     value="{{getSetting('meta_title')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="meta_description">{{__('Meta Description')}}</label>
              <textarea class="form-control" id="meta_description" name="meta_description"
                        rows="5">{{getSetting('meta_description')}}</textarea>
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="meta_keywords">{{__('Meta Keywords')}}</label>
              <textarea class="form-control" id="meta_keywords" name="meta_keywords"
                        placeholder="{{__('OpenAI, AI Writer, AI Image Generator, AI Chat, AI Code')}}"
                        rows="3">{{getSetting('meta_keywords')}}</textarea>
            </div>
          </div>
        </div>

        <h5 class="d-flex align-items-center mb-2">
          {{__('Manage the Features')}}
          {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Manage the features you want to activate for users.')])!!}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3">
              <label class="form-check form-switch switch">
                <input class="form-check-input" type="checkbox"
                       id="feature_ai_writer"
                       name="feature_ai_writer" {{ getSetting('feature_ai_writer') ? 'checked' : '' }}>
                <span class="form-check-label">{{__('AI Writer') }}</span>
              </label>
            </div>
            <div class="mb-3">
              <label class="form-check form-switch switch">
                <input class="form-check-input" type="checkbox"
                       id="feature_ai_image"
                       name="feature_ai_image" {{ getSetting('feature_ai_image') ? 'checked' : '' }}>
                <span class="form-check-label">{{__('AI Image') }}</span>
              </label>
            </div>
            <div class="mb-3">
              <label class="form-check form-switch switch">
                <input class="form-check-input" type="checkbox"
                       id="feature_ai_chat" name="feature_ai_chat" {{ getSetting('feature_ai_chat') ? 'checked' : '' }}>
                <span class="form-check-label">{{__('AI Chat') }}</span>
              </label>
            </div>
            <div class="mb-3">
              <label class="form-check form-switch switch">
                <input class="form-check-input" type="checkbox"
                       id="feature_ai_code" name="feature_ai_code" {{ getSetting('feature_ai_code') ? 'checked' : '' }}>
                <span class="form-check-label">{{__('AI Code') }}</span>
              </label>
            </div>
            <div class="mb-3">
              <label class="form-check form-switch switch">
                <input class="form-check-input" type="checkbox"
                       id="feature_ai_speech_to_text"
                       name="feature_ai_speech_to_text" {{ getSetting('feature_ai_speech_to_text') ? 'checked' : '' }}>
                <span class="form-check-label">{{__('AI Speech to Text') }}</span>
              </label>
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
      $("#setting_save").on("submit", function (e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();

        document.getElementById("btn_save").disabled = true;

        let formData = new FormData();
        formData.append("site_name", $("#site_name").val());
        formData.append("site_url", $("#site_url").val());
        formData.append("site_email", $("#site_email").val());
        formData.append("register_active", $("#register_active").val());
        formData.append("default_country", $("#default_country").val());
        formData.append("default_currency", $("#default_currency").val());
        formData.append("free_plan_words", $("#free_plan_words").val());
        formData.append("free_plan_images", $("#free_plan_images").val());

        formData.append("facebook_active", $("#facebook_active").is(":checked") ? 1 : 0);
        formData.append("google_active", $("#google_active").is(":checked") ? 1 : 0);
        formData.append("github_active", $("#github_active").is(":checked") ? 1 : 0);
        formData.append("twitter_active", $("#twitter_active").is(":checked") ? 1 : 0);

        if ($("#logo").val() != "undefined") {
          formData.append("logo", $("#logo").prop("files")[0]);
        }
        if ($("#logo_dark").val() != "undefined") {
          formData.append("logo_dark", $("#logo_dark").prop("files")[0]);
        }
        if ($("#favicon").val() != "undefined") {
          formData.append("favicon", $("#favicon").prop("files")[0]);
        }

        formData.append("google_analytics_code", $("#google_analytics_code").val());
        formData.append("meta_title", $("#meta_title").val());
        formData.append("meta_description", $("#meta_description").val());
        formData.append("meta_keywords", $("#meta_keywords").val());

        formData.append("feature_ai_writer", $("#feature_ai_writer").is(":checked") ? 1 : 0);
        formData.append("feature_ai_image", $("#feature_ai_image").is(":checked") ? 1 : 0);
        formData.append("feature_ai_chat", $("#feature_ai_chat").is(":checked") ? 1 : 0);
        formData.append("feature_ai_code", $("#feature_ai_code").is(":checked") ? 1 : 0);
        formData.append("feature_ai_speech_to_text", $("#feature_ai_speech_to_text").is(":checked") ? 1 : 0);

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.settings.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function (data) {
            toastr.success("Settings saved successfully.");
            location.href = '{{route('dashboard.admin.settings.index')}}';
            document.getElementById("btn_save").disabled = false;
          },
          error: function (data) {
            let err = data.responseJSON.errors;
            $.each(err, function (index, value) {
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
