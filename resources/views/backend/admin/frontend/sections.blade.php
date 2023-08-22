@extends('backend.layout.content')
@section('title', __('Frontend Sections'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <form id="frontend_setting_save">
        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('Banner Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__('Banner Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="banner_active" name="banner_active" {{ getFrontSection('banner_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="banner_title">{{__('Banner Title')}}</label>
              <input type="text" class="form-control" id="banner_title" name="banner_title"
                     value="{{getFrontSection('banner_title')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="banner_content">{{__('Banner Text')}}</label>
              <input type="text" class="form-control" id="banner_content" name="banner_content"
                     value="{{getFrontSection('banner_content')}}">
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="0 mt-2">
              {{__('Hero Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__('Hero Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="hero_active" name="hero_active" {{ getFrontSection('hero_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="hero_tag">{{__('Hero Heading Tag')}}</label>
              <input type="text" class="form-control" id="hero_tag" name="hero_tag"
                     value="{{getFrontSection('hero_tag')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="hero_title">{{__('Hero Title')}}</label>
              <input type="text" class="form-control" id="hero_title" name="hero_title"
                     value="{{getFrontSection('hero_title')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="hero_subtitle">{{__('Hero Subtitle')}}</label>
              <input type="text" class="form-control" id="hero_subtitle" name="hero_subtitle"
                     value="{{getFrontSection('hero_subtitle')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="hero_description">{{__('Hero Description')}}</label>
              <input type="text" class="form-control" id="hero_description" name="hero_description"
                     value="{{getFrontSection('hero_description')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="hero_button">{{__('Hero Button')}}</label>
              <input type="text" class="form-control" id="hero_button" name="hero_button"
                     value="{{getFrontSection('hero_button')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="hero_link">{{__('Hero Button URL')}}</label>
              <input type="text" class="form-control" id="hero_link" name="hero_link"
                     value="{{getFrontSection('hero_link')}}">
            </div>

            <div class="mb-3 col-12">
              <label class="form-label" for="hero_illustration">{{__('Site Illustration')}}</label>
              <input type="file" class="form-control" id="hero_illustration" name="hero_illustration"
                     accept="image/svg+xml,image/png,image/jpeg">
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Chats Slider Section')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-check form-switch switch">
                <input class="form-check-input" type="checkbox"
                       id="chats_slider_active"
                       name="chats_slider_active" {{ getFrontSection('chats_slider_active') ? 'checked' : '' }}>
                <span class="form-check-label">{{__('Chats Slider Active') }}</span>
              </label>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('Features Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__('Features Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="features_active"
                     name="features_active" {{ getFrontSection('features_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="features_heading">{{__('Features Heading')}}</label>
              <input type="text" class="form-control" id="features_heading" name="features_heading"
                     value="{{getFrontSection('features_heading')}}">

              <div class="mb-3 col-md-12">
                <label class="form-label" for="features_button">{{__('Features Text')}}</label>
                <input class="form-control" id="features_button"
                       name="features_button" value="{{getFrontSection('features_button')}}">
              </div>
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="features_link">{{__('Features Link')}}</label>
              <input class="form-control" id="features_link"
                     name="features_link" value="{{getFrontSection('features_link')}}">
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('Usecases Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__('Usecases Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="usecases_active"
                     name="usecases_active" {{ getFrontSection('usecases_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="usecases_heading">{{__('Usecases Heading')}}</label>
              <input type="text" class="form-control" id="usecases_heading" name="usecases_heading"
                     value="{{getFrontSection('usecases_heading')}}">
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('Prompts Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__('Prompts Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="prompts_active" name="prompts_active" {{ getFrontSection('prompts_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="prompts_heading">{{__('Prompts Heading')}}</label>
              <input type="text" class="form-control" id="prompts_heading" name="prompts_heading"
                     value="{{getFrontSection('prompts_heading')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="prompts_description">{{__('Prompts Description')}}</label>
              <input type="text" class="form-control" id="prompts_description" name="prompts_description"
                     value="{{getFrontSection('prompts_description')}}">
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('How It Works Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__('How It Works Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="how_it_works_active"
                     name="how_it_works_active" {{ getFrontSection('how_it_works_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="how_it_works_heading">{{__('How It Works Heading')}}</label>
              <input type="text" class="form-control" id="how_it_works_heading" name="how_it_works_heading"
                     value="{{getFrontSection('how_it_works_heading')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="how_it_works_description">{{__('How It Works Description')}}</label>
              <input type="text" class="form-control" id="how_it_works_description" name="how_it_works_description"
                     value="{{getFrontSection('how_it_works_description')}}">
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('Image Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__('Image Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="image_slider_active"
                     name="image_slider_active" {{ getFrontSection('image_slider_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="image_slider_heading">{{__('Image Heading')}}</label>
              <input type="text" class="form-control" id="image_slider_heading" name="image_slider_heading"
                     value="{{getFrontSection('image_slider_heading')}}">
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('Testimonials Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__('Testimonials Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="testimonials_active"
                     name="testimonials_active" {{ getFrontSection('testimonials_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="testimonials_title">{{__('Testimonials Title')}}</label>
              <input type="text" class="form-control" id="testimonials_title" name="testimonials_title"
                     value="{{getFrontSection('testimonials_title')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="testimonials_heading">{{__('Testimonials Heading')}}</label>
              <input type="text" class="form-control" id="testimonials_heading" name="testimonials_heading"
                     value="{{getFrontSection('testimonials_heading')}}">
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Partners Section')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-check form-switch switch">
                <input class="form-check-input" type="checkbox"
                       id="partners_active"
                       name="partners_active" {{ getFrontSection('partners_active') ? 'checked' : '' }}>
                <span class="form-check-label">{{__('Partners Active') }}</span>
              </label>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('Pricing Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__(' Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="pricing_active" name="pricing_active" {{ getFrontSection('pricing_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="pricing_save_percent">{{__('Pricing Save Percent')}}</label>
              <input type="text" class="form-control" id="pricing_save_percent" name="pricing_save_percent"
                     value="{{getFrontSection('pricing_save_percent')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="pricing_heading">{{__('Pricing Heading')}}</label>
              <input type="text" class="form-control" id="pricing_heading" name="pricing_heading"
                     value="{{getFrontSection('pricing_heading')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="pricing_title">{{__('Pricing Title')}}</label>
              <input type="text" class="form-control" id="pricing_title" name="pricing_title"
                     value="{{getFrontSection('pricing_title')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="pricing_description">{{__('Pricing Description')}}</label>
              <input type="text" class="form-control" id="pricing_description" name="pricing_description"
                     value="{{getFrontSection('pricing_description')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="pricing_monthly_text">{{__('Pricing Monthly Text')}}</label>
              <input type="text" class="form-control" id="pricing_monthly_text" name="pricing_monthly_text"
                     value="{{getFrontSection('pricing_monthly_text')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="pricing_onetime_text">{{__('Pricing Onetime Text')}}</label>
              <input type="text" class="form-control" id="pricing_onetime_text" name="pricing_onetime_text"
                     value="{{getFrontSection('pricing_onetime_text')}}">
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('FAQ Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__(' Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="faq_active" name="faq_active" {{ getFrontSection('faq_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="faq_heading">{{__('FAQ Heading')}}</label>
              <input type="text" class="form-control" id="faq_heading" name="faq_heading"
                     value="{{getFrontSection('faq_heading')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="faq_title">{{__('FAQ Title')}}</label>
              <input type="text" class="form-control" id="faq_title" name="faq_title"
                     value="{{getFrontSection('faq_title')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="faq_description">{{__('FAQ Description')}}</label>
              <input type="text" class="form-control" id="faq_description" name="faq_description"
                     value="{{getFrontSection('faq_description')}}">
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('Try It Section')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <label class="form-check form-switch switch">
              <span class="form-check-label">{{__(' Active') }}</span>
              <input class="form-check-input" type="checkbox"
                     id="try_it_active" name="try_it_active" {{ getFrontSection('try_it_active') ? 'checked' : '' }}>
            </label>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="try_it_title">{{__('Try It Title')}}</label>
              <input type="text" class="form-control" id="try_it_title" name="try_it_title"
                     value="{{getFrontSection('try_it_title')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="try_it_description">{{__('Try It Description')}}</label>
              <input type="text" class="form-control" id="try_it_description" name="try_it_description"
                     value="{{getFrontSection('try_it_description')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="try_it_button">{{__('Try It Button Text')}}</label>
              <input class="form-control" id="try_it_button"
                     name="try_it_button" value="{{getFrontSection('try_it_button')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="try_it_link">{{__('Try It Link')}}</label>
              <input class="form-control" id="try_it_link"
                     name="try_it_link" value="{{getFrontSection('try_it_link')}}">
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Footer Section')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-md-12">
              <label class="form-label" for="footer_button_text">{{__('Footer Button Text')}}</label>
              <input type="text" class="form-control" id="footer_button_text" name="footer_button_text"
                     value="{{getFrontSection('footer_link_text')}}">
            </div>

            <div class="mb-3 col-md-12">
              <label class="form-label" for="footer_link">{{__('Footer Button URL (Please enter full url)')}}</label>
              <input type="text" class="form-control" id="footer_link" name="footer_link"
                     value="{{getFrontSection('footer_link')}}">
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
        formData.append("_active", $("#_active").is(":checked") ? 1 : 0);

        formData.append("banner_active", $("#banner_active").is(":checked") ? 1 : 0);
        formData.append("banner_title", $("#banner_title").val());
        formData.append("banner_content", $("#banner_content").val());

        formData.append("hero_active", $("#hero_active").is(":checked") ? 1 : 0);
        formData.append("hero_tag", $("#hero_tag").val());
        formData.append("hero_title", $("#hero_title").val());
        formData.append("hero_subtitle", $("#hero_subtitle").val());
        formData.append("hero_description", $("#hero_description").val());
        formData.append("hero_button", $("#hero_button").val());
        formData.append("hero_link", $("#hero_link").val());
        if ($("#hero_illustration").val() !== "undefined") {
          formData.append("hero_illustration", $("#hero_illustration").prop("files")[0]);
        }

        formData.append("chats_slider_active", $("#chats_slider_active").is(":checked") ? 1 : 0);
        formData.append("features_active", $("#features_active").is(":checked") ? 1 : 0);
        formData.append("features_heading", $("#features_heading").val());
        formData.append("features_button", $("#features_button").val());
        formData.append("features_link", $("#features_link").val());

        formData.append("usecases_active", $("#usecases_active").is(":checked") ? 1 : 0);
        formData.append("usecases_heading", $("#usecases_heading").val());

        formData.append("prompts_active", $("#prompts_active").is(":checked") ? 1 : 0);
        formData.append("prompts_heading", $("#prompts_heading").val());
        formData.append("prompts_description", $("#prompts_description").val());

        formData.append("how_it_works_active", $("#how_it_works_active").is(":checked") ? 1 : 0);
        formData.append("how_it_works_heading", $("#how_it_works_heading").val());
        formData.append("how_it_works_description", $("#how_it_works_description").val());

        formData.append("image_slider_active", $("#image_slider_active").is(":checked") ? 1 : 0);
        formData.append("image_slider_heading", $("#image_slider_heading").val());

        formData.append("testimonials_active", $("#testimonials_active").is(":checked") ? 1 : 0);
        formData.append("testimonials_title", $("#testimonials_title").val());
        formData.append("testimonials_heading", $("#testimonials_heading").val());

        formData.append("partners_active", $("#partners_active").is(":checked") ? 1 : 0);

        formData.append("pricing_active", $("#pricing_active").is(":checked") ? 1 : 0);
        formData.append("pricing_save_percent", $("#pricing_save_percent").val());
        formData.append("pricing_heading", $("#pricing_heading").val());
        formData.append("pricing_title", $("#pricing_title").val());
        formData.append("pricing_description", $("#pricing_description").val());
        formData.append("pricing_monthly_text", $("#pricing_monthly_text").val());
        formData.append("pricing_onetime_text", $("#pricing_onetime_text").val());

        formData.append("faq_active", $("#faq_active").is(":checked") ? 1 : 0);
        formData.append("faq_heading", $("#faq_heading").val());
        formData.append("faq_title", $("#faq_title").val());
        formData.append("faq_description", $("#faq_description").val());

        formData.append("try_it_active", $("#try_it_active").is(":checked") ? 1 : 0);
        formData.append("try_it_title", $("#try_it_title").val());
        formData.append("try_it_description", $("#try_it_description").val());
        formData.append("try_it_button", $("#try_it_button").val());
        formData.append("try_it_link", $("#try_it_link").val());

        formData.append("footer_button_text", $("#footer_button_text").val());
        formData.append("footer_link", $("#footer_link").val());

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.frontend.sections.store')}}',
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
